<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						<a href="{{ route('admin') }}">Admin panel &rsaquo;</a> {{ __('Add meeting room') }}
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
								<form action="{{ route('rooms.store') }}" method="post">
										@csrf
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="building_id">Select building</label>
												<select name="building_id" id="building_id" class="my-1 rounded-md">
														@foreach ($buildings as $building)
																<option value="{{ $building->id }}">{{ $building->name }}</option>
														@endforeach
												</select>
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">Room name</label>
												<input type="text" name="name" id="name" placeholder="Enter room name" class="my-1 rounded-md">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="description">description</label>
												<input type="text" name="description" id="description" placeholder="Enter description"
														class="my-1 rounded-md">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="capacity">Capacity</label>
												<input type="text" name="capacity" id="capacity" placeholder="Enter capacity" class="my-1 rounded-md">
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
