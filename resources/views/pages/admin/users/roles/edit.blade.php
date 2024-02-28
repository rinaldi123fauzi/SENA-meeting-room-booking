<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Edit role') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<form action="{{ route('roles.update', $role->id) }}" method="post">
										@csrf
										@method('PUT')
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">Role name</label>
												<input type="text" name="name" id="name" placeholder="Enter role name"
														class="my-1 rounded-md uppercase" value="{{ $role->name }}">
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
