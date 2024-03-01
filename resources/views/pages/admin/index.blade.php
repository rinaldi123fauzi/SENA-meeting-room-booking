<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Admin panel') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="flex flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<div class="w-full p-3">
										<div class="flex justify-between font-semibold">
												<h3 class="mb-3 text-xl font-semibold text-gray-800">Meeting List in a Week</h3>
												<div>
														<p>{{ $now }} </p>
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
						<div class="my-4 mr-2 w-full flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<h3 class="mb-3 text-xl font-semibold text-gray-800">Building list</h3>
								<a href="{{ route('buildings.create') }}"
										class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Add
										building <span class="ml-1 text-lg font-bold">+</span></a>
								<div class="my-5 flex flex-col">
										@if (count($buildings) == 0)
												<div class="text-center font-normal">
														<p>No buildings</p>
												</div>
										@else
												<div class="-m-1.5 overflow-x-auto">
														<div class="inline-block min-w-full p-1.5 align-middle">
																<div class="overflow-hidden">
																		<table class="min-w-full divide-y divide-gray-200">
																				<thead>
																						<tr>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Name
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Address
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										City
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Provice
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Postal code
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Action
																								</th>
																						</tr>
																				</thead>
																				<tbody class="divide-y divide-gray-200">
																						@foreach ($buildings as $building)
																								<tr>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $building->name }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $building->address }}</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $building->city }}</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $building->provice }}</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $building->postal_code }}</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm">
																												<a href="{{ route('buildings.edit', $building->id) }}"
																														class="font-bold text-blue-500 hover:text-blue-800">Edit</a>
																												<form action="{{ route('buildings.destroy', $building->id) }}" method="post">
																														@csrf
																														@method('DELETE')
																														<input name="_method" type="hidden" value="DELETE">
																														<button onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"
																																class="font-bold text-red-500 hover:text-red-800">{{ __('Delete') }}</button>
																												</form>
																										</td>
																								</tr>
																						@endforeach
																				</tbody>
																		</table>
																</div>
														</div>
												</div>
										@endif
								</div>
						</div>
						<div class="flex">
								<div class="mb-4 mr-2 flex w-1/2 flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
										<div class="w-full p-3">
												<h3 class="mb-3 text-xl font-semibold text-gray-800">Meeting room list</h3>
												<a href="{{ route('rooms.create') }}"
														class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Add
														meeting
														room <span class="ml-1 text-lg font-bold">+</span></a>
												<div class="mt-5 flex flex-col">
														@if (count($rooms) == 0)
																<div class="text-center">
																		<p>No rooms</p>
																</div>
														@else
																<div class="-m-1.5 overflow-x-auto">
																		<div class="inline-block min-w-full p-1.5 align-middle">
																				<div class="overflow-hidden">
																						<table class="min-w-full divide-y divide-gray-200">
																								<thead>
																										<tr>
																												<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Name
																												</th>
																												<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Building
																												</th>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Capacity
																												</th>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Action
																												</th>
																										</tr>
																								</thead>
																								<tbody class="divide-y divide-gray-200">
																										@foreach ($rooms as $room)
																												<tr>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																																{{ $room->name }}
																														</td>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																																{{ $room->building->name }}</td>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																																{{ $room->capacity }}</td>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm">
																																<a href="{{ route('rooms.edit', $room->id) }}"
																																		class="font-bold text-blue-500 hover:text-blue-800">Edit</a>
																																<form action="{{ route('rooms.destroy', $room->id) }}" method="post">
																																		@csrf
																																		@method('delete')
																																		<button onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"
																																				class="font-bold text-red-500 hover:text-red-800">{{ __('Delete') }}</button>
																																</form>
																														</td>
																												</tr>
																										@endforeach
																								</tbody>
																						</table>
																				</div>
																		</div>
																</div>
														@endif
												</div>
										</div>
								</div>
								<div class="mb-4 ml-2 flex w-1/2 flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
										<div class="w-full p-3">
												<h3 class="mb-3 text-xl font-semibold text-gray-800">Role access management</h3>
												<a href="{{ route('roles.create') }}"
														class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Add
														role
														<span class="ml-1 text-lg font-semibold">+</span></a>
												<a href="{{ route('roles.show') }}"
														class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Manage
												</a>
												<div class="mt-5 flex flex-col">
														<div class="-m-1.5 overflow-x-auto">
																<div class="inline-block min-w-full p-1.5 align-middle">
																		<div class="overflow-hidden">
																				<table class="min-w-full divide-y divide-gray-200">
																						<thead>
																								<tr>
																										<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																												Role
																										</th>
																										<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																												Quantity
																										</th>
																										<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																												Action
																										</th>
																								</tr>
																						</thead>
																						<tbody class="divide-y divide-gray-200">
																								@foreach ($roleCounts as $roleName => $count)
																										<tr>
																												<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																														{{ $roleName }}</td>
																												</td>
																												<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																														{{ $count }}</td>
																												<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm">
																														<a href="{{ route('user.roles.show', $roleName) }}"
																																class="font-bold text-blue-500 hover:text-blue-800">Show users</a>
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
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<h3 class="mb-3 text-xl font-semibold text-gray-800">Office monitoring</h3>
								<a href="{{ route('maps.create') }}"
										class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Add office
										map</a>
								@foreach ($maps as $map)
										<div class="my-5 flex gap-5">
												<div class="my-2 w-1/3"><img src="{{ Storage::url($map->image_url) }}" alt="">
														<p class="px-3 text-gray-800">{{ $map->name }}</p>
												</div>
												<div class="w-2/3">
														<div class="-m-1.5 overflow-x-auto">
																<div class="inline-block min-w-full p-1.5 align-middle">
																		<div class="overflow-hidden">
																				@if ($map->office_layout->count() == 0)
																						<p class="text-center">No User</p>
																				@else
																						<table class="min-w-full divide-y divide-gray-200">
																								<thead>
																										<tr>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														ID
																												</th>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Seat Location
																												</th>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Username
																												</th>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Department
																												</th>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Action
																												</th>
																										</tr>
																								</thead>
																								<tbody class="divide-y divide-gray-200">
																										@foreach ($map->office_layout as $layout)
																												<tr>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																																{{ $layout->id }}
																														</td>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																																{{ $layout->location }}
																														</td>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																																{{ $layout->user_name }}
																														</td>
																														<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																																{{ $layout->department }}</td>
																														<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm"><a href=""
																																		class="font-bold text-blue-500 hover:text-blue-800">Edit</a><a href=""
																																		class="font-bold text-red-500 hover:text-red-800">Delete</a></td>
																												</tr>
																										@endforeach
																								</tbody>
																						</table>
																				@endif
																				<div class="my-1 w-full text-center"><a href="{{ route('office-layouts.show', $map->id) }}"
																								class="mx-auto font-bold text-primary hover:underline">Show
																								more</a></div>
																		</div>
																</div>
														</div>
												</div>
										</div>
								@endforeach
						</div>
				</div>
		</div>
</x-app-layout>
