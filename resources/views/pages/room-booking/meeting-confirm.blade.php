<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						<a href="{{ route('bookings.index') }}">Confirm a meeting &rsaquo;</a> {{ __('Select meeting') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						@if ($errors->any())
								<div class="mb-3" role="alert">
										<div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
												There's something wrong!
										</div>
										<div class="border-t-6 rounded-b border border-red-400 bg-red-100 px-4 py-3 text-red-700">
												<p>
												<ul>
														@foreach ($errors->all() as $error)
																<li>{{ $error }}</li>
														@endforeach
												</ul>
												</p>
										</div>
								</div>
						@endif
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<div class="grid grid-cols-2 gap-3 lg:grid-cols-3">
										@forelse ($meetings as $meeting)
												<div class="rounded-lg border border-gray-200 font-medium text-gray-800">
														<div class="border-b border-gray-200 p-5">
																<h5 class="my-1 text-xl font-semibold capitalize">{{ $meeting->meeting_description }}</h5>
																<p class="text-sm text-gray-500">
																		{{ \Carbon\Carbon::parse($meeting->start_time)->translatedFormat('l, j F Y') }}
																</p>
																<p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($meeting->start_time)->format('H:i') }}
																		- {{ \Carbon\Carbon::parse($meeting->end_time)->format('H:i') }}</p>
																<p class="text-sm text-gray-500">{{ $meeting->room->name }}</p>
																<div class="my-2 flex items-start">
																		@if ($meeting->status == 'BOOKED')
																				<div class="rounded-full bg-green-200 px-2 py-0 text-center text-sm font-semibold text-green-800">
																						{{ $meeting->status }}
																				</div>
																		@elseif ($meeting->status == 'CANCELED')
																				<div class="rounded-full bg-red-200 px-2 py-0 text-center text-sm font-semibold text-red-800">
																						{{ $meeting->status }}
																				</div>
																		@else
																				<div class="rounded-full bg-blue-200 px-2 py-0 text-center text-sm font-semibold text-blue-800">
																						{{ $meeting->status }}
																				</div>
																		@endif
																</div>
														</div>
														<div class="p-5">
																<p class="text-gray-500">Booked by</p>
																<div class="flex items-center gap-x-2">
																		<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">
																		<p class="">{{ $meeting->booked_by }}</p>
																</div>
														</div>
														<div class="flex gap-2 p-5">
																<a href="{{ route('dashboard') }}"
																		class="rounded-md bg-blue-200 px-4 py-2 text-blue-800 transition duration-300 hover:bg-blue-300">Confirm</a>
																<form action="{{ route('bookings.user-cancel', $meeting->id) }}" method="post">
																		@csrf
																		@method('PUT')
																		<button onclick="return confirm('{{ __('Cancel this meeting?') }}')"
																				class="rounded-md bg-red-200 px-4 py-2 text-red-800 transition duration-300 hover:bg-red-300">{{ __('Cancel') }}</button>
																</form>
														</div>
												</div>
										@empty
												<div class="col-span-2">No meeting found.</div>
										@endforelse
								</div>
						</div>
				</div>
		</div>
</x-app-layout>
