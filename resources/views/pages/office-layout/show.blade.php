<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Office layout') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
								<div class="flex flex-col gap-3 p-5">
										<div class="w-full p-5">
												@foreach ($maps as $map)
														<div class="mt-12 flex flex-col">
																<img src="{{ Storage::url($map->image_url) }}" alt="" class="w-full object-cover">
																<div class="mx-5 flex flex-col gap-1">
																		<p class="">{{ $map->name }}</p>
																		<p class="">Gedung Depan</p>
																</div>
														</div>
												@endforeach
										</div>
										<div>
												<div class="my-10 overflow-x-auto py-3">
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
																						</tr>
																				</thead>
																				<tbody class="divide-y divide-gray-200">
																						@foreach ($officeLayouts as $item)
																								<tr>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $item->id }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $item->location }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $item->user_name }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $item->department }}
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
