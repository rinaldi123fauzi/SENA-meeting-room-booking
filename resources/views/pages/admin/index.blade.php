<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Admin panel') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="flex flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<div class="w-2/3 p-3">
										<h3 class="mb-3 text-xl font-semibold text-gray-800">Meeting List</h3>
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
																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">IT Weekly Meeting</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">Ruang Meeting cafe</td>
																								<td
																										class="text-wrap flex items-center gap-x-2 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																										<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">Alexander
																										Graham Bell
																								</td>
																								<td class="whitespace-nowrap rounded-full px-6 py-4 text-sm">
																										<div
																												class="rounded-full bg-blue-200 px-2 py-0 text-center text-sm font-semibold text-blue-800">
																												Ongoing
																										</div>
																								</td>
																								<td class="whitespace-nowrap px-6 py-4 text-end text-sm">
																										<button type="button"
																												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 disabled:pointer-events-none disabled:opacity-50">Cancel</button>
																								</td>
																						</tr>

																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">EDMS Meeting</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">Ruang Meeting Baru</td>
																								<td
																										class="text-wrap flex items-center gap-x-2 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																										<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">John Doe
																								</td>
																								<td class="whitespace-nowrap rounded-full px-6 py-4 text-sm">
																										<div class="rounded-full bg-red-200 px-2 py-0 text-center text-sm font-semibold text-red-800">
																												Canceled
																										</div>
																								</td>
																								<td class="whitespace-nowrap px-6 py-4 text-end text-sm">
																										<button type="button"
																												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 disabled:pointer-events-none disabled:opacity-50">Cancel</button>
																								</td>
																						</tr>

																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">EDMS Meeting</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">Ruang Meeting Tengah
																								</td>
																								<td
																										class="text-wrap flex items-center gap-x-2 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																										<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">John Doe
																								</td>
																								<td class="whitespace-nowrap rounded-full px-6 py-4 text-sm">
																										<div
																												class="rounded-full bg-green-200 px-2 py-0 text-center text-sm font-semibold text-green-800">
																												Booked
																										</div>
																								</td>
																								<td class="whitespace-nowrap px-6 py-4 text-end text-sm">
																										<button type="button"
																												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 disabled:pointer-events-none disabled:opacity-50">Cancel</button>
																								</td>
																						</tr>

																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">EDMS Meeting</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">Ruang Meeting Utama</td>
																								<td
																										class="text-wrap flex items-center gap-x-2 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																										<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">John Doe
																								</td>
																								<td class="whitespace-nowrap rounded-full px-6 py-4 text-sm">
																										<div
																												class="rounded-full bg-green-200 px-0.5 py-0 text-center text-sm font-semibold text-green-800">
																												Booked
																										</div>
																								</td>
																								<td class="whitespace-nowrap px-6 py-4 text-end text-sm">
																										<button type="button"
																												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 disabled:pointer-events-none disabled:opacity-50">Cancel</button>
																								</td>
																						</tr>
																				</tbody>
																		</table>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="w-1/3 p-3">
										<div class="flex items-center justify-center px-4 py-8">
												<div class="w-full rounded-lg border border-gray-200">
														<div class="rounded-md bg-white p-5 md:p-8">
																<div class="flex items-center justify-between px-4">
																		<span tabindex="0" class="text-xl font-semibold text-gray-800 focus:outline-none">February
																				2024</span>
																		<div class="flex items-center">
																				<button aria-label="calendar backward"
																						class="text-gray-800 hover:text-gray-400 focus:text-gray-400">
																						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
																								width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
																								fill="none" stroke-linecap="round" stroke-linejoin="round">
																								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																								<polyline points="15 6 9 12 15 18" />
																						</svg>
																				</button>
																				<button aria-label="calendar forward"
																						class="ml-3 text-gray-800 hover:text-gray-400 focus:text-gray-400">
																						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
																								width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
																								fill="none" stroke-linecap="round" stroke-linejoin="round">
																								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																								<polyline points="9 6 15 12 9 18" />
																						</svg>
																				</button>

																		</div>
																</div>
																<div class="flex items-center justify-between overflow-x-auto pt-12">
																		<table class="w-full">
																				<thead>
																						<tr>
																								<th>
																										<div class="flex w-full justify-center">
																												<p class="text-center text-sm font-medium text-gray-800">Mo</p>
																										</div>
																								</th>
																								<th>
																										<div class="flex w-full justify-center">
																												<p class="text-center text-sm font-medium text-gray-800">Tu</p>
																										</div>
																								</th>
																								<th>
																										<div class="flex w-full justify-center">
																												<p class="text-center text-sm font-medium text-gray-800">We</p>
																										</div>
																								</th>
																								<th>
																										<div class="flex w-full justify-center">
																												<p class="text-center text-sm font-medium text-gray-800">Th</p>
																										</div>
																								</th>
																								<th>
																										<div class="flex w-full justify-center">
																												<p class="text-center text-sm font-medium text-gray-800">Fr</p>
																										</div>
																								</th>
																								<th>
																										<div class="flex w-full justify-center">
																												<p class="text-center text-sm font-medium text-gray-800">Sa</p>
																										</div>
																								</th>
																								<th>
																										<div class="flex w-full justify-center">
																												<p class="text-center text-sm font-medium text-gray-800">Su</p>
																										</div>
																								</th>
																						</tr>
																				</thead>
																				<tbody>
																						<tr>
																								<td class="pt-6">
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-300">29</p>
																										</div>
																								</td>
																								<td class="pt-6">
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-300">30</p>
																										</div>
																								</td>
																								<td class="pt-6">
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-300">31</p>
																										</div>
																								</td>
																								<td class="pt-6">
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">1</p>
																										</div>
																								</td>
																								<td class="pt-6">
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">2</p>
																										</div>
																								</td>
																								<td class="pt-6">
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">3</p>
																										</div>
																								</td>
																								<td class="pt-6">
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">4</p>
																										</div>
																								</td>
																						</tr>
																						<tr>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">5</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">6</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">7</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">8</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">9</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">10</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">11</p>
																										</div>
																								</td>
																						</tr>
																						<tr>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">12</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">13</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">14</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">15</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">16</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">17</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">18</p>
																										</div>
																								</td>
																						</tr>
																						<tr>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">19</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">20</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">21</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">22</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">23</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">24</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">25</p>
																										</div>
																								</td>
																						</tr>
																						<tr>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">26</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">27</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-600">28</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p
																														class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-sm font-medium text-white hover:bg-blue-900 focus:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-offset-2">
																														29</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-300">1</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-300">2</p>
																										</div>
																								</td>
																								<td>
																										<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																												<p class="text-sm font-semibold text-gray-300">3</p>
																										</div>
																								</td>
																						</tr>
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
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Name
																												</th>
																												<th scope="col"
																														class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
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
								<a href=""
										class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Manage</a>
								<div class="flex gap-5">
										<div class="my-2 w-1/3"><img src="{{ asset('image/gedung-depan-1.jpg') }}" alt="">
												<p class="px-3 text-gray-800">Gedung Depan</p>
										</div>
										<div class="w-2/3">
												<div class="-m-1.5 overflow-x-auto">
														<div class="inline-block min-w-full p-1.5 align-middle">
																<div class="overflow-hidden">
																		<table class="min-w-full divide-y divide-gray-200">
																				<thead>
																						<tr>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										ID
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Seat Location
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Username
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Department
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Action
																								</th>
																						</tr>
																				</thead>
																				<tbody class="divide-y divide-gray-200">
																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">111
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">1
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">John Doe
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">IT</td>
																								<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm"><a href=""
																												class="font-bold text-blue-500 hover:text-blue-800">Edit</a><a href=""
																												class="font-bold text-red-500 hover:text-red-800">Delete</a></td>
																						</tr>

																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">222
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">2
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">John doe
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">IT</td>
																								<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm"><a href=""
																												class="font-bold text-blue-500 hover:text-blue-800">Edit</a><a href=""
																												class="font-bold text-red-500 hover:text-red-800">Delete</a></td>
																						</tr>
																				</tbody>
																		</table>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="flex gap-5">
										<div class="my-2 w-1/3"><img src="{{ asset('image/gedung-depan-1.jpg') }}" alt="">
												<p class="px-3 text-gray-800">Gedung Depan</p>
										</div>
										<div class="w-2/3">
												<div class="-m-1.5 overflow-x-auto">
														<div class="inline-block min-w-full p-1.5 align-middle">
																<div class="overflow-hidden">
																		<table class="min-w-full divide-y divide-gray-200">
																				<thead>
																						<tr>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										ID
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Seat Location
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Username
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Department
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Action
																								</th>
																						</tr>
																				</thead>
																				<tbody class="divide-y divide-gray-200">
																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">111
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">1
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">John Doe
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">IT</td>
																								<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm"><a href=""
																												class="font-bold text-blue-500 hover:text-blue-800">Edit</a><a href=""
																												class="font-bold text-red-500 hover:text-red-800">Delete</a></td>
																						</tr>

																						<tr>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">222
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">2
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">John doe
																								</td>
																								<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">IT</td>
																								<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm"><a href=""
																												class="font-bold text-blue-500 hover:text-blue-800">Edit</a><a href=""
																												class="font-bold text-red-500 hover:text-red-800">Delete</a></td>
																						</tr>
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
