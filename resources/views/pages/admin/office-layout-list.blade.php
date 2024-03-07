<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						{{ __('Office layout list') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<h3 class="mb-3 text-xl font-semibold text-gray-800">Office monitoring</h3>
								<a href="{{ route('maps.create') }}"
										class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Add office
										map</a>
								@foreach ($maps as $map)
										<div class="my-5 flex flex-col gap-5 lg:flex-row">
												<div class="my-2 w-full lg:w-1/3"><img src="{{ Storage::url($map->image_url) }}" alt="">
														<p class="px-3 text-gray-800">{{ $map->name }}</p>
												</div>
												<div class="w-full lg:w-2/3">
														<div class="-m-1.5 overflow-x-auto">
																<div class="inline-block min-w-full p-1.5 align-middle">
																		<div class="overflow-hidden">
																				@if ($map->office_layout->count() == 0)
																						<p class="text-center">No User</p>
																				@else
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
																										@foreach ($map->office_layout->slice(0, 4) as $layout)
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
