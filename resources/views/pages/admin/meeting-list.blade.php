<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						{{ __('Meeting list') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="flex flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<div class="w-full p-3">
										<div class="mb-3 flex flex-col justify-between font-semibold lg:flex-row">
												<h3 class="mb-0 text-lg font-semibold text-gray-800 lg:mb-3 lg:text-xl">Meeting List in a Week</h3>
												<div>
														<p class="text-sm lg:text-base">{{ $now }} </p>
												</div>
										</div>
										<div class="flex flex-col">
												<div class="-m-1.5 overflow-x-auto">
														<div class="inline-block min-w-full p-1.5 align-middle">
																<div class="overflow-hidden">
																		<table class="min-w-full divide-y divide-gray-200">
																				<thead>
																						<tr>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Meeting Desc
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Time
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">Room
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Booked by
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Status</th>
																								<th scope="col" class="px-6 py-3 text-end text-xs font-medium uppercase text-gray-500">Action
																								</th>
																						</tr>
																				</thead>
																				<tbody class="divide-y divide-gray-200">
																						@foreach ($bookings as $booking)
																								<tr>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $booking->meeting_description }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ \Carbon\Carbon::parse($booking->start_time)->format('H:i') }} -
																												{{ \Carbon\Carbon::parse($booking->end_time)->format('H:i') }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $booking->room->name }}
																										</td>
																										<td
																												class="text-wrap flex items-center gap-x-2 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full"
																														alt="">{{ $booking->user->name }}
																										</td>
																										<td class="whitespace-nowrap rounded-full px-6 py-4 text-sm">
																												@if ($booking->status == 'BOOKED')
																														<div
																																class="rounded-full bg-green-200 px-2 py-0 text-center text-sm font-semibold text-green-800">
																																{{ $booking->status }}
																														</div>
																												@elseif ($booking->status == 'CANCELED')
																														<div
																																class="rounded-full bg-red-200 px-2 py-0 text-center text-sm font-semibold text-red-800">
																																{{ $booking->status }}
																														</div>
																												@else
																														<div
																																class="rounded-full bg-blue-200 px-2 py-0 text-center text-sm font-semibold text-blue-800">
																																{{ $booking->status }}
																														</div>
																												@endif
																										</td>
																										<td class="whitespace-nowrap px-6 py-4 text-end text-sm">
																												@if ($booking->status == 'CANCELED')
																														<p class="text-center">-</p>
																												@else
																														<form action="{{ route('bookings.cancel', $booking->id) }}" method="post">
																																@csrf
																																@method('PUT')
																																<button onclick="return confirm('{{ __('Cancel this meeting?') }}')"
																																		class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 disabled:pointer-events-none disabled:opacity-50">{{ __('Cancel') }}</button>
																														</form>
																												@endif
																										</td>
																								</tr>
																						@endforeach
																				</tbody>
																		</table>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</x-app-layout>
