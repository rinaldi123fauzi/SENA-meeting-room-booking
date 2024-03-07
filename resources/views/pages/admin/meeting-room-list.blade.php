<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						{{ __('Meeting room list') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="flex flex-col">
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
								<div class="mb-4 mr-2 flex w-full flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
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
																												<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																														Capacity
																												</th>
																												<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
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
																														<td class="text-wrap flex gap-3 whitespace-nowrap px-6 py-4 text-sm">
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
						</div>
				</div>
		</div>
</x-app-layout>
