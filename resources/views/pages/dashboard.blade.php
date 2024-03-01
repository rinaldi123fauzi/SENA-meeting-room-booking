<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Dashboard') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-screen-xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
								<div class="flex">
										<div class="m-5">
												<div>
														<h3 class="mb-3 text-base font-medium text-gray-800 lg:text-xl lg:font-semibold">Meeting Summary - This
																week</h3>
														<div>
																<div class="my-3 grid w-full grid-cols-2 justify-between gap-3">
																		<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																				<div class="rounded-full bg-green-200 p-3">
																						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
																								stroke="green" class="h-8 w-8">
																								<path stroke-linecap="round" stroke-linejoin="round"
																										d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
																						</svg>
																				</div>
																				<div class="text-gray-800">
																						<p class="text-base font-semibold">Meeting Scheduled</p>
																						<div class="flex items-center gap-x-2">
																								<p class="text-3xl font-bold">{{ $booked }}</p>
																								<p class="text-center text-base font-normal"> this week</p>
																						</div>
																				</div>
																		</div>
																		<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																				<div class="rounded-full bg-red-200 p-3">
																						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
																								stroke="red" class="h-8 w-8">
																								<path stroke-linecap="round" stroke-linejoin="round"
																										d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
																						</svg>
																				</div>
																				<div class="text-gray-800">
																						<p class="text-base font-semibold">Meeting Canceled</p>
																						<div class="flex items-center gap-x-2">
																								<p class="text-3xl font-bold">{{ $canceled }}</p>
																								<p class="text-center text-base font-normal"> this week</p>
																						</div>
																				</div>
																		</div>
																</div>
																<div class="my-3 grid w-full grid-cols-3 justify-between gap-3">
																		<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																				<div class="text-gray-800">
																						<p class="text-base font-semibold">Total building</p>
																						<div class="flex items-center gap-x-2">
																								<p class="text-3xl font-bold">{{ $buildingCount }}</p>
																						</div>
																				</div>
																		</div>
																		<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																				<div class="text-gray-800">
																						<p class="text-base font-semibold">Total capacity</p>
																						<div class="flex items-center gap-x-2">
																								<p class="text-3xl font-bold">{{ $capacity }}</p>
																						</div>
																				</div>
																		</div>
																		<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																				<div class="text-gray-800">
																						<p class="text-base font-semibold">Seat available</p>
																						<div class="flex items-center gap-x-2">
																								<p class="text-3xl font-bold">{{ $seatAvailable }}</p>
																						</div>
																				</div>
																		</div>
																</div>
														</div>
												</div>
												<div class="my-8">
														<div class="mb-3 mt-10 flex justify-between font-semibold">
																<h3 class="text-xl">Today<span class="mx-2">-</span>{{ $todaysMeet->count() }} Meetings</h3>
																<div>
																		<p>{{ $now }}</p>
																</div>
														</div>
														<div class="grid grid-cols-3 gap-3">
																@forelse ($todaysMeet as $meetings)
																		<div class="rounded-lg border border-gray-200 font-medium text-gray-800">
																				<div class="border-b border-gray-200 p-5">
																						<h5 class="my-1 text-xl font-semibold capitalize">{{ $meetings->meeting_description }}</h5>
																						<p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($meetings->start_time)->format('H:i') }}
																								- {{ \Carbon\Carbon::parse($meetings->end_time)->format('H:i') }}</p>
																						<p class="text-sm text-gray-500">{{ $meetings->room->name }}</p>
																						<div class="my-2 flex items-start">
																								@if ($meetings->status == 'BOOKED')
																										<div
																												class="rounded-full bg-green-200 px-2 py-0 text-center text-sm font-semibold text-green-800">
																												{{ $meetings->status }}
																										</div>
																								@elseif ($meetings->status == 'CANCELED')
																										<div class="rounded-full bg-red-200 px-2 py-0 text-center text-sm font-semibold text-red-800">
																												{{ $meetings->status }}
																										</div>
																								@else
																										<div
																												class="rounded-full bg-blue-200 px-2 py-0 text-center text-sm font-semibold text-blue-800">
																												{{ $meetings->status }}
																										</div>
																								@endif
																						</div>
																				</div>
																				<div class="p-5">
																						<p class="text-gray-500">Booked by</p>
																						<div class="flex items-center gap-x-2">
																								<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">
																								<p class="">{{ $meetings->booked_by }}</p>
																						</div>
																				</div>
																		</div>
																@empty
																@endforelse

														</div>
												</div>
										</div>
										<div class="my-5 w-1/3">{!! $chart->container() !!}</div>
								</div>
						</div>
				</div>
		</div>
		</div>
		<script src="{{ $chart->cdn() }}"></script>

		{{ $chart->script() }}
</x-app-layout>
