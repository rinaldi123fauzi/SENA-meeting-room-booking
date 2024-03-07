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
        $rooms = Room::all();
        $availableRooms = [];
        $occupiedRooms = [];

        foreach ($rooms as $room) {
            $bookings = Booking::with('room')->where('room_id', $room->id)
                ->where('status', 'BOOKED')
                ->where(function ($query) use ($startTime, $endTime) {
                            $query->where(function ($query) use ($startTime) {
                                $query->where('start_time', '<=', $startTime)
                                    ->where('end_time', '>', $startTime);
                            })->orWhere(function ($query) use ($endTime) {
                                            $query->where('start_time', '<', $endTime)
                                                ->where('end_time', '>=', $endTime);
                                        })->orWhere(function ($query) use ($startTime, $endTime) {
                                            $query->where('start_time', '>=', $startTime)
                                                ->where('end_time', '<=', $endTime);
                                        });
                        })->get();

            if ($bookings->isEmpty()) {
                $availableRooms[] = $room;
            } else {
                $occupiedRooms[] = $bookings;
            }

            // $bookings = Booking::with('room')->where('room_id', $room->id)
            //     ->where('status', 'BOOKED')
            //     ->where(function ($query) use ($startTime, $endTime) {
            //         $query->where(function ($query) use ($startTime) {
            //             $query->where('start_time', '<=', $startTime)
            //                 ->where('end_time', '>', $startTime);
            //         })->orWhere(function ($query) use ($endTime) {
            //             $query->where('start_time', '<', $endTime)
            //                 ->where('end_time', '>=', $endTime);
            //         })->orWhere(function ($query) use ($startTime, $endTime) {
            //             $query->where('start_time', '>=', $startTime)
            //                 ->where('end_time', '<=', $endTime);
            //         });
            //     })->get();

            // if ($bookings->isEmpty()) {
            //     $availableRooms[] = $room;
            // } else {
            //     $occupiedRooms[] = $room;
            // }
        }

        $unavailableRooms = [];

        foreach ($occupiedRooms as $rooms) {
            foreach($rooms as $room) {
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

    public function userCancelBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update([
            'status' => 'CANCELED'
        ]);
        return redirect()->route('dashboard');
    }

    

    public function meetingConfirmation() 
    {
        $now = Carbon::now();
        $meetings = Booking::where('status', 'BOOKED')->where('start_time', '>=', $now)->get();
        
        return view('pages.room-booking.meeting-confirm', compact('meetings'));
    }
}
