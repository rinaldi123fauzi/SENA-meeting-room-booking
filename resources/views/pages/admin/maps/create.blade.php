<x-app-layout>
		<x-slot name="header">
				<h2 class="text-base font-semibold leading-tight text-gray-800 lg:text-xl">
						<a href="{{ route('admin') }}">Admin panel &rsaquo;</a> {{ __('Add a map') }}
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
				</div>
				<div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
						<form action="{{ route('maps.store') }}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="mx-auto my-5 flex w-1/2 flex-col">
										<label for="building_id">Select building</label>
										<select name="building_id" id="building_id" class="my-1 rounded-md">
												@foreach ($buildings as $building)
														<option value="{{ $building->id }}">{{ $building->name }}</option>
												@endforeach
										</select>
								</div>
								<div class="mx-auto my-3 flex w-1/2 flex-col">
										<label for="name">Map name</label>
										<input type="text" name="name" id="name" placeholder="Enter map name" class="my-1 rounded-md">
								</div>
								<div class="mx-auto mb-10 flex w-1/2 items-center justify-center">
										<label for="image_url" class="sr-only cursor-pointer">Choose file</label>
										<input type="file" name="image_url" id="image_url"
												class="block w-full cursor-pointer rounded-lg border border-gray-200 text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-100 file:px-4 file:py-3 focus:z-10 focus:border-primary focus:ring-primary disabled:pointer-events-none disabled:opacity-50">
								</div>
								<img id="preview" class="mx-auto my-5 max-w-xl" />
								<div class="mx-auto mb-5 w-1/2">
										<button
												class="rounded-md bg-primary px-4 py-2 text-center text-white transition duration-300 hover:bg-blue-900">Save</button>
								</div>
						</form>
				</div>
		</div>
		</div>
		@push('script')
				<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
				<script type="text/javascript">
						$(document).ready(function(e) {
								$('#image_url').change(function() {
										let reader = new FileReader();
										reader.onload = (e) => {

												$('#preview').attr('src', e.target.result);
										}
										reader.readAsDataURL(this.files[0]);
								});

						});
				</script>
		@endpush
</x-app-layout>
