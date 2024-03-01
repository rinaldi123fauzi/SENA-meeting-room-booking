<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer',
            'room_id' => 'required|integer',
            'booked_by' => 'required|string|max:255',
            'email' => 'required|email',
            'meeting_description' => 'required|string|max:255',
            'status' => 'required|in:BOOKED,CANCELED',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ];
    }
}
