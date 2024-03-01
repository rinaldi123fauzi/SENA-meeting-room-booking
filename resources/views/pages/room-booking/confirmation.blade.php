<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Add meeting room') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						@if ($errors->any())
								<div class="mb-3" role="alert">
										<div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
												There's something wrong!
										</div>
										<div class="border-t-6 rounded-b border border-red-400 bg-red-100 px-4 py-3 text-red-700">
												<p>
												<ul>
														@foreach ($errors->all() as $error)
																<li>{{ $error }}</li>
														@endforeach
												</ul>
												</p>
										</div>
								</div>
						@endif
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<form action="{{ route('bookings.book') }}" method="post">
										@csrf
										<div class="mx-auto my-3 hidden w-11/12 flex-col">
												<label for="room_id">Room name</label>
												<input type="text" name="room_id" id="room_id" placeholder="Enter room name"
														class="my-1 rounded-md bg-gray-100 read-only:border-0 read-only:outline-none read-only:ring-0"
														value="{{ $room->id }}" readonly>
										</div>
										<div class="mx-auto my-3 hidden w-11/12 flex-col">
												<label for="user_id">user_id</label>
												<input type="text" name="user_id" id="user_id" placeholder="Enter user_id"
														class="my-1 rounded-md bg-gray-100 read-only:border-0 read-only:outline-none read-only:ring-0"
														value="{{ Auth::user()->id }}" readonly>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="booked_by">Booked by</label>
												<input type="text" name="booked_by" id="booked_by" placeholder=""
														class="my-1 rounded-md bg-gray-100 read-only:border-0 read-only:outline-none read-only:ring-0"
														value="{{ Auth::user()->name }}" readonly>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" placeholder=""
														class="my-1 rounded-md bg-gray-100 read-only:border-0 read-only:outline-none read-only:ring-0"
														value="{{ Auth::user()->email }}" readonly>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="start_time">Start time</label>
												<input type="text" name="start_time" id="start_time" placeholder=""
														class="my-1 rounded-md bg-gray-100 read-only:border-0 read-only:outline-none read-only:ring-0"
														value="{{ \Carbon\Carbon::parse($start_time)->format('H:i') }}" readonly>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="end_time">End time</label>
												<input type="text" name="end_time" id="end_time" placeholder=""
														class="my-1 rounded-md bg-gray-100 read-only:border-0 read-only:outline-none read-only:ring-0"
														value="{{ \Carbon\Carbon::parse($end_time)->format('H:i') }}" readonly>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="meeting_description">Meeting description</label>
												<textarea name="meeting_description" id="meeting_description" cols="30" rows="3"
												  class="my-1 rounded-md bg-gray-100 read-only:border-0 read-only:outline-none read-only:ring-0">{{ old('meeting_description') }}</textarea>
										</div>
										<div class="mr-12 text-right">
												<button
														class="mr-auto rounded-md bg-primary px-4 py-2 text-white transition duration-300 hover:bg-blue-900">Confirm
														booking</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</x-app-layout>
