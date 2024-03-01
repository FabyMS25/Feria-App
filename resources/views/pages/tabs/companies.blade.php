
<div>


							<div class="tab-pane fade show active " id="profile-followers">

								<div class="list-group">
                                    <?php $companies=App\Models\Company::all();
                                        $notificaciones= $user->notifications()->get();
                                    ?>


                                    @foreach ($companies as $company)

									<div class="list-group-item d-flex align-items-center">
										<img src="/storage/{{$company->logo}}" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">{{$company->name}}</a></div>
											{{-- <div class="text-muted fs-13px">{{$notice->data['body']}}</div> --}}
										</div>
										<a href="{{App\Filament\Pages\ProfileCompany::getUrl(['slug'=>$company->slug])}}" class="btn btn-outline-theme">Ver</a>
									 </div>
                                    @endforeach
								</div>
								<div class="text-center p-3"><a href="#" class="text-body text-decoration-none">Ver mas <b class="caret"></b></a></div>
							</div>

</div>
