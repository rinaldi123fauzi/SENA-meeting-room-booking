<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						<a href="{{ route('office-layout-list') }}">Office layout list &rsaquo;</a> {{ __('Office layout') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
								<div class="flex flex-col gap-3 p-5">
										<div class="w-full p-5">
												@foreach ($maps as $map)
														<div class="mt-12 flex h-96 flex-col">
																<img src="{{ Storage::url($map->image_url) }}" alt="" class="h-96 w-full object-cover">
																<div class="mx-5 flex flex-col gap-1">
																		<p class="">{{ $map->name }}</p>
																		<p class="">Gedung Depan</p>
																</div>
														</div>
										</div>
										<div>
												<div class="my-10 overflow-x-auto py-3">
														<a href="{{ route('office-layouts.seat.create', $map->id) }}" @endforeach
																class="rounded-md bg-primary px-3 py-1 text-white transition duration-300 hover:bg-blue-900">Add
																user</a>
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
																						@foreach ($officeLayouts as $officeLayout)
																								<tr>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $officeLayout->id }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $officeLayout->location }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $officeLayout->user_name }}
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $officeLayout->department }}</td>
																										<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm">
																												<a href="{{ route('office-layouts.seat.edit', $officeLayout->id) }}"
																														class="font-bold text-blue-500 hover:text-blue-800">Edit</a>
																												<form action="{{ route('office-layouts.seat.delete', $officeLayout->id) }}" method="post">
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
										</div>
								</div>
						</div>
				</div>
		</div>
</x-app-layout>
