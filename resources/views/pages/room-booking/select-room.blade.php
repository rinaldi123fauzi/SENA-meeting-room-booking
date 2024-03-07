<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						<a href="{{ route('bookings.index') }}">Book a room &rsaquo;</a> {{ __('Select a room') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<h3 class="mb-3 text-xl font-semibold text-gray-800">Available rooms</h3>
								<div class="grid grid-cols-2 gap-3 lg:grid-cols-3">
										@foreach ($availableRooms as $availableRoom)
												<div class="flex w-full flex-col gap-3 rounded-md border border-primary p-5">
														<h5 class="text-lg font-semibold">{{ $availableRoom->name }}</h5>
														<div>
																<p class="text-base font-normal text-gray-600">Gedung Depan</p>
																<p class="text-base font-normal text-gray-600">Capacity : {{ $availableRoom->capacity }}</p>
														</div>
														<div class="flex items-start">
																<form action="{{ route('bookings.confirmation', $availableRoom->id) }}" method="post">
																		@csrf
																		<input type="text" name="start_time" value="{{ $startTime }}" class="hidden">
																		<input type="text" name="end_time" value="{{ $endTime }}" class="hidden">
																		<button
																				class="trsnsition rounded-md bg-primary px-2.5 py-1.5 text-white duration-300 hover:bg-blue-900">Book
																				now</button>
																</form>
														</div>
												</div>
										@endforeach
								</div>

								@if ($unavailableRooms)
										<h3 class="mb-3 mt-10 text-xl font-semibold text-gray-800">Unavailable rooms</h3>
										<div class="grid grid-cols-2 gap-3 lg:grid-cols-3">
												@foreach ($unavailableRooms as $unavailableRoom)
														{{-- @foreach ($unavailableRoom->room as $room) --}}
														<div class="flex w-full flex-col gap-3 rounded-md border border-red-500 p-5">
																<h5 class="text-lg font-semibold">{{ $unavailableRoom->room->name }}</h5>
																<div class="border-b border-red-500 pb-3">
																		<p class="text-base font-normal text-gray-600">Gedung Depan</p>
																		<p class="text-base font-normal text-gray-600">Capacity : {{ $unavailableRoom->room->capacity }}</p>
																</div>
																<div class="flex flex-col items-start gap-1 pt-1">
																		<div class="flex items-center gap-3">
																				<div>
																						<p class="rounded-full bg-red-200 px-4 py-0.5 text-red-800">Booked</p>
																				</div>
																				<div>
																						<p>From <span
																										class="font-semibold">{{ \Carbon\Carbon::parse($unavailableRoom->start_time)->format('H:i') }}</span>
																								-
																								<span
																										class="font-semibold">{{ \Carbon\Carbon::parse($unavailableRoom->end_time)->format('H:i') }}</span>
																						</p>
																				</div>
																		</div>
																		<div class="flex flex-col gap-1">
																				<p class="mt-3 font-normal leading-tight text-gray-600">Booked by:</p>
																				<div class="flex items-center gap-2">
																						<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">
																						<p class="font-semibold text-gray-600">{{ $unavailableRoom->booked_by }}</p>
																				</div>
																		</div>
																</div>
														</div>
														{{-- @endforeach --}}
												@endforeach
										</div>
								@endif
						</div>
				</div>
		</div>
</x-app-layout>
