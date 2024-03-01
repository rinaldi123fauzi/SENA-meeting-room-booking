<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Change role') }}
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
								<form action="{{ route('user.roles.update', $user->id) }}" method="post">
										@csrf
										@method('PUT')
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="building_id">Select role</label>
												<select name="role_id" id="role_id" class="my-1 rounded-md">
														<option value="{{ $user->roles->id }}">{{ $user->roles->name }}</option>
														<option value="" disabled>---</option>
														@foreach ($roles as $role)
																<option value="{{ $role->id }}">{{ $role->name }}</option>
														@endforeach
												</select>
												<div class="mt-3 text-right">
														<button
																class="mr-auto rounded-md bg-primary px-4 py-2 text-white transition duration-300 hover:bg-blue-900">Save</button>
												</div>
										</div>
								</form>
						</div>
				</div>
		</div>
</x-app-layout>
