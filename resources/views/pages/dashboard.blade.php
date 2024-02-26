<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Dashboard') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-screen-xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
								<div class="flex">
										<div class="m-5">
												<div>
														<h3 class="mb-3 text-xl font-bold text-gray-800">Meeting Summary</h3>
														<div class="flex w-full flex-wrap justify-between gap-3">
																<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																		<div class="rounded-full bg-green-200 p-3">
																				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
																						stroke="green" class="h-8 w-8">
																						<path stroke-linecap="round" stroke-linejoin="round"
																								d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
																				</svg>
																		</div>
																		<div class="text-gray-800">
																				<p class="text-base font-bold">Meeting Scheduled</p>
																				<div class="flex items-center gap-x-2">
																						<p class="text-3xl font-black">10</p>
																						<p class="text-center text-base font-normal"> this month</p>
																				</div>
																		</div>
																</div>
																<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																		<div class="rounded-full bg-blue-200 p-3">
																				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
																						stroke="blue" class="h-8 w-8">
																						<path stroke-linecap="round" stroke-linejoin="round"
																								d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
																				</svg>
																		</div>
																		<div class="text-gray-800">
																				<p class="text-base font-bold">Meeting Rescheduled</p>
																				<div class="flex items-center gap-x-2">
																						<p class="text-3xl font-black">10</p>
																						<p class="text-center text-base font-normal"> this month</p>
																				</div>
																		</div>
																</div>
																<div class="flex items-center gap-x-3 rounded-lg bg-gray-50 p-4 shadow-sm">
																		<div class="rounded-full bg-red-200 p-3">
																				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
																						stroke="red" class="h-8 w-8">
																						<path stroke-linecap="round" stroke-linejoin="round"
																								d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
																				</svg>
																		</div>
																		<div class="text-gray-800">
																				<p class="text-base font-bold">Meeting Canceled</p>
																				<div class="flex items-center gap-x-2">
																						<p class="text-3xl font-black">10</p>
																						<p class="text-center text-base font-normal"> this month</p>
																				</div>
																		</div>
																</div>
														</div>
												</div>
												<div class="my-8">
														<h3 class="my-3 text-xl font-bold">Today<span class="mx-2">-</span>4 Meetings</h3>
														<div class="grid grid-cols-3 gap-3">
																<div class="rounded-lg border border-gray-200 font-bold text-gray-800">
																		<div class="border-b border-gray-200 p-5">
																				<h5 class="my-1 text-xl font-bold capitalize">Weekly meeting</h5>
																				<p class="text-sm text-gray-500">10.00 AM - 11.00 AM</p>
																				<p class="text-sm text-gray-500">Ruang Meeting Tengah</p>
																				<div class="my-2 flex items-start">
																						<p class="rounded-full bg-blue-200 px-2 py-0 text-sm font-bold text-blue-800">Ongoing</p>
																				</div>
																		</div>
																		<div class="p-5">
																				<p class="text-gray-500">Booked by</p>
																				<div class="flex items-center gap-x-2">
																						<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">
																						<p class="">John Doe</p>
																				</div>
																		</div>
																</div>
																<div class="rounded-lg border border-gray-200 font-bold text-gray-800">
																		<div class="border-b border-gray-200 p-5">
																				<h5 class="my-1 text-xl font-bold capitalize">Weekly meeting</h5>
																				<p class="text-sm text-gray-500">10.00 AM - 11.00 AM</p>
																				<p class="text-sm text-gray-500">Ruang Meeting Tengah</p>
																				<div class="my-2 flex items-start">
																						<p class="rounded-full bg-blue-200 px-2 py-0 text-sm font-bold text-blue-800">Ongoing</p>
																				</div>
																		</div>
																		<div class="p-5">
																				<p class="text-gray-500">Booked by</p>
																				<div class="flex items-center gap-x-2">
																						<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">
																						<p class="">John Doe</p>
																				</div>
																		</div>
																</div>
																<div class="rounded-lg border border-gray-200 font-bold text-gray-800">
																		<div class="border-b border-gray-200 p-5">
																				<h5 class="my-1 text-xl font-bold capitalize">Weekly meeting</h5>
																				<p class="text-sm text-gray-500">10.00 AM - 11.00 AM</p>
																				<p class="text-sm text-gray-500">Ruang Meeting Tengah</p>
																				<div class="my-2 flex items-start">
																						<p class="rounded-full bg-blue-200 px-2 py-0 text-sm font-bold text-blue-800">Ongoing</p>
																				</div>
																		</div>
																		<div class="p-5">
																				<p class="text-gray-500">Booked by</p>
																				<div class="flex items-center gap-x-2">
																						<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">
																						<p class="">John Doe</p>
																				</div>
																		</div>
																</div>
																<div class="rounded-lg border border-gray-200 font-bold text-gray-800">
																		<div class="border-b border-gray-200 p-5">
																				<h5 class="my-1 text-xl font-bold capitalize">Weekly meeting</h5>
																				<p class="text-sm text-gray-500">10.00 AM - 11.00 AM</p>
																				<p class="text-sm text-gray-500">Ruang Meeting Tengah</p>
																				<div class="my-2 flex items-start">
																						<p class="rounded-full bg-blue-200 px-2 py-0 text-sm font-bold text-blue-800">Ongoing</p>
																				</div>
																		</div>
																		<div class="p-5">
																				<p class="text-gray-500">Booked by</p>
																				<div class="flex items-center gap-x-2">
																						<img src="https://i.pravatar.cc/300" class="h-8 w-8 rounded-full" alt="">
																						<p class="">John Doe</p>
																				</div>
																		</div>
																</div>
														</div>
												</div>
										</div>
										<div class="w-1/3">
												<div class="flex items-center justify-center px-4 py-8">
														<div class="w-full rounded-lg border border-gray-200">
																<div class="rounded-md bg-white p-5 md:p-8">
																		<div class="flex items-center justify-between px-4">
																				<span tabindex="0" class="text-xl font-bold text-gray-800 focus:outline-none">February
																						2024</span>
																				<div class="flex items-center">
																						<button aria-label="calendar backward"
																								class="text-gray-800 hover:text-gray-400 focus:text-gray-400">
																								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
																										width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
																										stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																										<polyline points="15 6 9 12 15 18" />
																								</svg>
																						</button>
																						<button aria-label="calendar forward"
																								class="ml-3 text-gray-800 hover:text-gray-400 focus:text-gray-400">
																								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
																										width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
																										stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																										<polyline points="9 6 15 12 9 18" />
																								</svg>
																						</button>

																				</div>
																		</div>
																		<div class="flex items-center justify-between overflow-x-auto pt-12">
																				<table class="w-full">
																						<thead>
																								<tr>
																										<th>
																												<div class="flex w-full justify-center">
																														<p class="text-center text-sm font-medium text-gray-800">Mo</p>
																												</div>
																										</th>
																										<th>
																												<div class="flex w-full justify-center">
																														<p class="text-center text-sm font-medium text-gray-800">Tu</p>
																												</div>
																										</th>
																										<th>
																												<div class="flex w-full justify-center">
																														<p class="text-center text-sm font-medium text-gray-800">We</p>
																												</div>
																										</th>
																										<th>
																												<div class="flex w-full justify-center">
																														<p class="text-center text-sm font-medium text-gray-800">Th</p>
																												</div>
																										</th>
																										<th>
																												<div class="flex w-full justify-center">
																														<p class="text-center text-sm font-medium text-gray-800">Fr</p>
																												</div>
																										</th>
																										<th>
																												<div class="flex w-full justify-center">
																														<p class="text-center text-sm font-medium text-gray-800">Sa</p>
																												</div>
																										</th>
																										<th>
																												<div class="flex w-full justify-center">
																														<p class="text-center text-sm font-medium text-gray-800">Su</p>
																												</div>
																										</th>
																								</tr>
																						</thead>
																						<tbody>
																								<tr>
																										<td class="pt-6">
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-300">29</p>
																												</div>
																										</td>
																										<td class="pt-6">
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-300">30</p>
																												</div>
																										</td>
																										<td class="pt-6">
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-300">31</p>
																												</div>
																										</td>
																										<td class="pt-6">
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">1</p>
																												</div>
																										</td>
																										<td class="pt-6">
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">2</p>
																												</div>
																										</td>
																										<td class="pt-6">
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">3</p>
																												</div>
																										</td>
																										<td class="pt-6">
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">4</p>
																												</div>
																										</td>
																								</tr>
																								<tr>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">5</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">6</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">7</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">8</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">9</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">10</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">11</p>
																												</div>
																										</td>
																								</tr>
																								<tr>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">12</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">13</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">14</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">15</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">16</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">17</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">18</p>
																												</div>
																										</td>
																								</tr>
																								<tr>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">19</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">20</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">21</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">22</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">23</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">24</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="font-bold text-gray-600">25</p>
																												</div>
																										</td>
																								</tr>
																								<tr>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">26</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">27</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-600">28</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p
																																class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-sm font-medium text-white hover:bg-blue-900 focus:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-offset-2">
																																29</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-300">1</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-300">2</p>
																												</div>
																										</td>
																										<td>
																												<div class="flex w-full cursor-pointer justify-center px-2 py-2">
																														<p class="text-sm font-bold text-gray-300">3</p>
																												</div>
																										</td>
																								</tr>
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
		</div>
</x-app-layout>
