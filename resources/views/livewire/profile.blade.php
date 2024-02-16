
<div>
	<div class="profile">

        @include('pages.profile.profile-header', ['company' => $company,'user'=>$user])

			<div class="profile-sidebar">
				<div class="desktop-sticky-top">
					<h4>{{$company->name}}</h4>
					<div class="fw-500 mb-3 text-muted mt-n2">{{$user->email}}</div>
                </div>
            </div>

		<div class="profile-container">

			<div class="profile-content">
				<div class="row">
					<div class="col-xl-8">
						<div class="p-0 tab-content">

							<div class="tab-pane fade show active" id="profile-post">
                                @include('pages.posts.post', ['postList' => $company->posts,'user'=>$user])
							</div>

							<div class="tab-pane fade" id="profile-followers">
                            </div>
							<div class="tab-pane fade" id="profile-media">
                            </div>
							<div class="tab-pane fade" id="profile-video">
							</div>
						</div>
					</div>

                    @include('pages.profile.profile-trends')

				</div>
			</div>
		</div>
    </div>
</div>
