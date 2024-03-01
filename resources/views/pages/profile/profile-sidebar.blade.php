
			<div class="profile-sidebar" style=" width: 18rem;">
				<div class="desktop-sticky-top d-none d-lg-block">
					<!-- profile info -->
					<h4>{{$company->name}}</h4>
					<div class="fw-500 mb-3 text-muted mt-n2">{{$company->link}}</div>
					<p>
						Principal UXUI Design & Brand Architecture for Studio. Creator of SeanTheme.
						Bringing the world closer together. Studied Computer Science and Psychology at Harvard University.
					</p>
					<div class="mb-1">
						<i class="fa fa-map-marker-alt fa-fw text-muted"></i>
                        @foreach ($company->stores as $item)
                            {{$item->name}}
                        @endforeach
					</div>
					<div class="mb-3">
						<i class="fa fa-link fa-fw text-muted"></i> {{$company->link}}
					</div>

					<hr class="mt-4 mb-4">

                    @include('pages.profile.profile-trends',['posts'=>$company->posts])

				</div>
			</div>
