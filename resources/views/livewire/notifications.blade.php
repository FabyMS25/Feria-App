
<div>
	<div class="profile">

        @include('pages.profile.profile-header', ['company' => $company,'user'=>$user])

		<div class="profile-container">

			<div class="profile-content">
				<div class="row">
					<div class="col-xl-8">
						<div class="tab-content p-0">

							<div class="tab-pane fade show active" id="profile-post">
                                @include('pages.posts.post', ['postList' => $company->posts,'user'=>$user])
							</div>

							<div class="tab-pane fade" id="profile-followers">
								<div class="list-group">
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-1.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Ethel Wilkes</a></div>
											<div class="text-muted fs-13px">North Raundspic</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-2.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Shanaya Hansen</a></div>
											<div class="text-muted fs-13px">North Raundspic</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-3.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">James Allman</a></div>
											<div class="text-muted fs-13px">North Raundspic</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-4.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Marie Welsh</a></div>
											<div class="text-muted fs-13px">Crencheporford</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-5.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Lamar Kirkland</a></div>
											<div class="text-muted fs-13px">Prince Ewoodswan</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-6.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Bentley Osborne</a></div>
											<div class="text-muted fs-13px">Red Suvern</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-7.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Ollie Goulding</a></div>
											<div class="text-muted fs-13px">Doa</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-8.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Hiba Calvert</a></div>
											<div class="text-muted fs-13px">Stemunds</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-9.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Rivka Redfern</a></div>
											<div class="text-muted fs-13px">Fallnee</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
									<div class="list-group-item d-flex align-items-center">
										<img src="/assets/img/user/user-10.jpg" alt="" width="50" class="rounded-sm ms-n2">
										<div class="flex-fill px-3">
											<div><a href="#" class="text-body fw-500 text-decoration-none">Roshni Fernandez</a></div>
											<div class="text-muted fs-13px">Mount Lerdo</div>
										</div>
										<a href="#" class="btn btn-outline-theme">Follow</a>
									</div>
								</div>
								<div class="text-center p-3"><a href="#" class="text-body text-decoration-none">Show more <b class="caret"></b></a></div>
							</div>

							<div class="tab-pane fade" id="profile-media">
								<div class="card mb-3">
									<div class="card-header fw-500 bg-transparent">May 20</div>
									<div class="card-body">
										<div class="widget-img-list">
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-1.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-1.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-2.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-2.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-3.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-3.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-4.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-4.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-5.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-5.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-6.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-6.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-7.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-7.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-8.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-8.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-9.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-9.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-10.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-10.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-11.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-11.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-12.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-12.jpg)"></span></a></div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header fw-500 bg-transparent">May 16</div>
									<div class="card-body">
										<div class="widget-img-list">
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-13.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-13.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-14.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-14.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-15.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-15.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-16.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-16.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-17.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-17.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-18.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-18.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-19.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-19.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-20.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-20.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-21.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-21.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-22.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-22.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-23.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-23.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-24.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-24.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-25.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-25.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-26.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-26.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-27.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-27.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-28.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-28.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-29.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-29.jpg)"></span></a></div>
											<div class="widget-img-list-item"><a href="/assets/img/gallery/gallery-30.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-30.jpg)"></span></a></div>
										</div>
									</div>
								</div>
								<div class="text-center p-3"><a href="#" class="text-body text-decoration-none">Show more <b class="caret"></b></a></div>
							</div>

							<div class="tab-pane fade" id="profile-video">
								<div class="card mb-3">
									<div class="card-header fw-bold bg-transparent">Collections #1</div>
									<div class="card-body">
										<div class="row gx-1">
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=RQ5ljyGg-ig" data-lity="">
													<img src="https://img.youtube.com/vi/RQ5ljyGg-ig/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=5lWkZ-JaEOc" data-lity="">
													<img src="https://img.youtube.com/vi/5lWkZ-JaEOc/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=9ZfN87gSjvI" data-lity="">
													<img src="https://img.youtube.com/vi/9ZfN87gSjvI/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=w2H07DRv2_M" data-lity="">
													<img src="https://img.youtube.com/vi/w2H07DRv2_M/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=PntG8KEVjR8" data-lity="">
													<img src="https://img.youtube.com/vi/PntG8KEVjR8/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=q8kxKvSQ7MI" data-lity="">
													<img src="https://img.youtube.com/vi/q8kxKvSQ7MI/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=cutu3Bw4ep4" data-lity="">
													<img src="https://img.youtube.com/vi/cutu3Bw4ep4/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=gCspUXGrraM" data-lity="">
													<img src="https://img.youtube.com/vi/gCspUXGrraM/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-3">
									<div class="card-header fw-bold bg-transparent">Collections #2</div>
									<div class="card-body">
										<div class="row gx-1">
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=COtpTM1MpAA" data-lity="">
													<img src="https://img.youtube.com/vi/COtpTM1MpAA/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=8NVkGHVOazc" data-lity="">
													<img src="https://img.youtube.com/vi/8NVkGHVOazc/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=QgQ7MWLsw1w" data-lity="">
													<img src="https://img.youtube.com/vi/QgQ7MWLsw1w/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=Dmw0ucCv8aQ" data-lity="">
													<img src="https://img.youtube.com/vi/Dmw0ucCv8aQ/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=r1d7ST2TG2U" data-lity="">
													<img src="https://img.youtube.com/vi/r1d7ST2TG2U/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=WUR-XWBcHvs" data-lity="">
													<img src="https://img.youtube.com/vi/WUR-XWBcHvs/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=A7sQ8RWj0Cw" data-lity="">
													<img src="https://img.youtube.com/vi/A7sQ8RWj0Cw/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
											<div class="col-md-4 col-sm-6 mb-1">
												<a href="https://www.youtube.com/watch?v=IMN2VfiXls4" data-lity="">
													<img src="https://img.youtube.com/vi/IMN2VfiXls4/mqdefault.jpg" alt="" class="d-block w-100">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

                    @include('pages.profile.profile-trends', ['postList' => $company->posts,'user'=>$user])

				</div>
			</div>
		</div>
    </div>
</div>
