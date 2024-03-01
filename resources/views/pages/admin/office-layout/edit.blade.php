<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Edit user seat') }}
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
								<form action="{{ route('office-layouts.seat.update', $officeLayout->id) }}" method="post">
										@method('PUT')
										@csrf
										<div class="mx-auto my-3 hidden w-11/12 flex-col">
												<label for="map_id">Map name</label>
												<input type="text" name="map_id" id="map_id" placeholder="Enter seat location"
														class="my-1 rounded-md" value="{{ $officeLayout->office_map->id }}" readonly>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="location">Seat location</label>
												<input type="text" name="location" id="location" placeholder="Enter seat location"
														class="my-1 rounded-md" value="{{ $officeLayout->location }}">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="user_name">User name</label>
												<input type="text" name="user_name" id="user_name" placeholder="Enter user name" class="my-1 rounded-md"
														value="{{ $officeLayout->user_name }}">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="department">Department</label>
												<input type="text" name="department" id="department" placeholder="Enter department"
														class="my-1 rounded-md" value="{{ $officeLayout->department }}">
										</div>
										<div class="mr-12 text-right">
												<button
														class="mr-auto rounded-md bg-primary px-4 py-2 text-white transition duration-300 hover:bg-blue-900">Save</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</x-app-layout>
