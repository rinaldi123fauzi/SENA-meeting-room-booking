<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						{{ __('Book a room') }}
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

						<a href="{{ route('bookings.meeting-confirm') }}"
								class="rounded-md bg-primary px-4 py-2 text-white transition duration-300 hover:bg-blue-900">Confirm a
								meeting</a>

						<div class="mt-5 overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<form action="{{ route('bookings.select-time') }}" method="post">
										@csrf
										<div class="mx-auto my-3 flex w-11/12 flex-col overflow-hidden rounded-md sm:rounded-lg">
												<label for="start_time">Select start time</label>
												<input type="datetime-local" name="start_time" id="start_time"
														class="my-1 w-4/5 flex-1 items-start rounded-md border lg:w-1/5" value="{{ old('start_time') }}" required>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col overflow-hidden rounded-md sm:rounded-lg">
												<label for="end_time">Select end time</label>
												<input type="datetime-local" name="end_time" id="end_time"
														class="my-1 w-4/5 flex-1 items-start rounded-md border lg:w-1/5" value="{{ old('end_time') }}" required>
										</div>
										<div class="mx-auto my-5 w-11/12">
												<button class="rounded-md bg-primary px-4 py-2 text-white">See available rooms</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</x-app-layout>
