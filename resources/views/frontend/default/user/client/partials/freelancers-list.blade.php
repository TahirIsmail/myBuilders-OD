
@foreach ($freelancers as $key => $user)
										
											<li class="list-group-item border-0 px-0">
												<a href="{{ route('freelancer.details', $user->user_name) }}" class="text-inherit d-flex align-items-center">
													<span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
														@if($user->photo != null)
															<img src="{{ custom_asset($user->photo) }}">
														@else
															<img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
														@endif
													</span>
													<span class="flex-grow-1 text-truncate-2">{{ $user->name }}</span>
													{{-- <span class="flex-shrink-0 ml-3">
														<span class="d-block opacity-50 fs-10">{{ translate('Hourly Rate') }}</span>
														<span class="fs-15">{{ single_price($user->profile->hourly_rate) }}</span>
													</span> --}}
												</a>
											</li>
                                        @endforeach