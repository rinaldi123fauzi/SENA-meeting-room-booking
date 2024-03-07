<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						{{ __('Users') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="flex flex-col">
								<div class="mb-4 ml-2 flex w-full flex-wrap overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
										<div class="w-full p-3">
												<h3 class="mb-3 text-xl font-semibold text-gray-800">Role management</h3>
												<div class="flex gap-3">
														<a href="{{ route('roles.create') }}"
																class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Add
																role
																<span class="ml-1 text-lg font-semibold">+</span></a>
														<a href="{{ route('roles.show') }}"
																class="rounded-md bg-primary px-2.5 py-1.5 text-white transition duration-300 hover:bg-blue-900">Manage
														</a>
												</div>
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
				</div>
		</div>
</x-app-layout>
