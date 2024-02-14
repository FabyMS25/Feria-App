		<?php $posts=App\Models\Post::all()?>
                    <div class="col-xl-4">
						<div class="desktop-sticky-top d-none d-lg-block">
							<div class="card mb-3">
								<div class="list-group list-group-flush">
									<div class="list-group-item fw-500 px-3 d-flex">
										<span class="flex-fill">Ultimos Posts</span>
										<a href="#" class="text-muted"><i class="fa fa-cog"></i></a>
									</div>
                                    @foreach ($posts as $post)
									<div class="list-group-item px-3">
										<div class="text-muted"><small><strong>{{$post->title}}</strong></small></div>
										<div class="fw-500 mb-2">
                                        @foreach ($post->categories as $category)
                                            #{{$category->name}}
                                        @endforeach
                                        </div>
                                        @if(!$post->media)
    										<div class="fs-13px">
                                                {!! \Illuminate\Support\Str::limit($post->content,50,'...') !!}
                                            </div>
                                        @else
										<a href="#" class="card overflow-hidden mb-1 text-body text-decoration-none">
											<div class="row no-gutters">
												<div class="col-md-8">
													<div class="card-body p-1 px-2">
														<div class="fs-12px text-muted">{{$post->company->name}}</div>
														<div class="h-40px fs-13px overflow-hidden">
                                                            {!! \Illuminate\Support\Str::limit($post->content,50,'...') !!}
                                                        </div>
													</div>
												</div>
												<div class="col-md-4 d-flex">
													<div class="h-100 w-100" style="background: url({{$post->getThumbnail($post->media->first())}}) center; background-size: cover;"></div>
												</div>
											</div>
										</a>
                                        @endif
                                        @if($post->company->link)
										<div ><small class="text-muted"><i class="fa fa-external-link-square-alt"></i> {{$post->company->link}}</small></div>
                                        @endif
										<div><small class="text-muted">1.89m vistos</small></div>
									</div>

                                    @endforeach
									<a href="#" class="list-group-item list-group-action text-center">
										Ver Mas
									</a>
								</div>
							</div>
						</div>
					</div>
