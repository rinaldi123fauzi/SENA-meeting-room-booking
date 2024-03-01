<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\BookingStatus;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('pages.room-booking.index');
    }

    public function selectTime(Request $request)
    {
        $data = $request->all();
        $startTime = Carbon::parse($data['start_time']);
        $endTime = Carbon::parse($data['end_time']);
        $rooms = Room::with('bookings')->get();
        $availableRooms = [];
        $unavailableRooms = [];

        foreach ($rooms as $room) {
            $booking = Booking::where('room_id', $room->id)
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->whereBetween('start_time', [$startTime, $endTime])
                        ->orWhereBetween('end_time', [$startTime, $endTime]);
                })
                ->first();

            if (!$booking) {
                $availableRooms[] = $room;
            } else {
                $unavailableRooms[] = $room;
            }
        }

        return view('pages.room-booking.select-room', compact('availableRooms', 'unavailableRooms', 'startTime', 'endTime'));
    }

    public function bookConfirmation(Request $request, $id)
    {
        $start_time = Carbon::parse($request->start_time);
        $end_time = Carbon::parse($request->end_time);
        $room = Room::findOrFail($id);
        return view('pages.room-booking.confirmation', compact('room', 'start_time', 'end_time'));
    }

    public function bookRoom(Request $request)
    {
        $data = $request->all();
        Booking::create([
            'room_id' => $data['room_id'],
            'user_id' => $data['user_id'],
            'booked_by' => $data['booked_by'],
            'email' => $data['email'],
            'meeting_description' => $data['meeting_description'],
            'start_time' => Carbon::parse($data['start_time']),
            'end_time' => Carbon::parse($data['end_time']),
        ]);

        return redirect()->route('dashboard');
    }

    public function cancelBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update([
            'status' => 'CANCELED'
        ]);
        return redirect()->route('admin');
    }
}
