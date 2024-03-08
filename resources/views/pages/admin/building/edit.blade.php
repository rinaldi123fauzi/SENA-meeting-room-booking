<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						<a href="{{ route('meeting-room-list') }}">Meeting room list &rsaquo;</a> {{ __('Edit building') }}
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
								<form action="{{ route('buildings.update', $building->id) }}" method="post">
										@method('PUT')
										@csrf
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">Building name</label>
												<input type="text" name="name" id="name" placeholder="Enter buiding name" class="my-1 rounded-md"
														value="{{ $building->name }}">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="capacity">Building capacity</label>
												<input type="text" name="capacity" id="capacity" placeholder="Enter buiding capacity"
														class="my-1 rounded-md" value="{{ $building->capacity }}">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">Address</label>
												<input type="text" name="address" id="address" placeholder="Enter buiding address"
														class="my-1 rounded-md" value="{{ $building->address }}">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">City</label>
												<input type="text" name="city" id="city" placeholder="Enter city" class="my-1 rounded-md"
														value="{{ $building->city }}">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">Provice</label>
												<input type="text" name="provice" id="provice" placeholder="Enter provice" class="my-1 rounded-md"
														value="{{ $building->provice }}">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">Postal code</label>
												<input type="number" name="postal_code" id="postal_code" placeholder="Enter postal code"
														class="my-1 rounded-md" value="{{ $building->postal_code }}">
										</div>
										<div class="mr-4 text-right lg:mr-12">
												<button
														class="mr-auto rounded-md bg-primary px-4 py-2 text-white transition duration-300 hover:bg-blue-900">Save</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</x-app-layout>
