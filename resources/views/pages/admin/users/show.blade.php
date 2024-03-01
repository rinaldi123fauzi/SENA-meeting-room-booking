<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						<a href="{{ route('admin') }}">Admin panel &rsaquo;</a> {{ __('List users') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">

								@if (count($users) == 0)
										<div class="text-center">
												<p>No users</p>
										</div>
								@else
										<div class="mt-5 flex flex-col">
												<div class="-m-1.5 overflow-x-auto">
														<div class="inline-block min-w-full p-1.5 align-middle">
																<div class="overflow-hidden">
																		<table class="min-w-full divide-y divide-gray-200">
																				<thead>
																						<tr>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										id
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Name
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Email
																								</th>
																								<th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
																										Action
																								</th>
																						</tr>
																				</thead>
																				<tbody class="divide-y divide-gray-200">
																						@foreach ($users as $user)
																								<tr>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $user->id }}</td>
																										</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $user->name }}</td>
																										<td class="text-wrap whitespace-nowrap px-6 py-4 text-sm text-gray-800">
																												{{ $user->email }}</td>
																										<td class="text-wrap flex gap-x-4 whitespace-nowrap px-6 py-4 text-sm">
																												<a href="{{ route('user.roles.edit', $user->id) }}"
																														class="font-bold text-blue-500 hover:text-blue-800">Change</a>
																												<form action="{{ route('user.delete', $user->id) }}" method="post">
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
								@endif

						</div>
				</div>
		</div>
</x-app-layout>
