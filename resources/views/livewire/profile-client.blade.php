
<div>

	<div class="profile">
		<!-- BEGIN profile-header -->
		<div class="profile-header">
			<div class="profile-header-cover"></div>

			<div class="profile-header-content">
				<div class="profile-header-img">
					<img src="/storage/{{$client->avatar}}" alt="">

				</div>
				<ul class="profile-header-tab nav nav-tabs nav-tabs-v2">
					<li class="nav-item">
						<a href="#profile-post" class="nav-link active" data-bs-toggle="tab">
							<div class="nav-field">Muro</div>
							<div class="nav-value">382</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Siguiendo</div>
							<div class="nav-value">1.3m</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#profile-media" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Nuevas Publicaciones</div>
							<div class="nav-value">1,397</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#profile-video" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Notificaciones</div>
							<div class="nav-value">120</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Suscripciones</div>
							<div class="nav-value">2,592</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="profile-container">
			<div class="profile-sidebar">
				<div class="desktop-sticky-top">
					<h4>{{$client->name}}</h4>
					<div class="fw-500 mb-3 text-muted mt-n2">{{$client->email}}</div>
                </div>
            </div>
			<div class="profile-content">
				<div class="row">
					<div class="col-xl-8">
						<div class="tab-content p-0">
							<div class="tab-pane fade show active" id="profile-post">
                                <?php $posts= App\Models\Post::all() ?>
                                {{-- @include('pages.profile.post', ['postList' => $posts,'user'=>$client]) --}}

							</div>
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Tabbed Content</h1>

                <div class="w-full mt-6" x-data="{ openTab: 1 }">
                    <div>
                        <ul class="flex border-b">
                            <li class="-mb-px mr-1" @click="openTab = 1">
                                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 1</a>
                            </li>
                            <li class="mr-1" @click="openTab = 2">
                                <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 2</a>
                            </li>
                            <li class="mr-1" @click="openTab = 3">
                                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 3</a>
                            </li>
                            <li class="mr-1" @click="openTab = 4">
                                <a :class="openTab === 4 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6">
                        <div id="" class="" x-show="openTab === 1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus ligula at condimentum sagittis. Maecenas velit libero, fermentum a leo quis, pretium egestas risus. Proin tempus sem magna, vitae convallis purus rhoncus non. Aenean tristique congue metus in lobortis. Nullam nisi leo, luctus in sapien eget, accumsan mattis leo. Morbi magna dolor, dapibus ut ligula eget, commodo venenatis risus. Nunc quis dignissim velit. Donec nec dapibus ligula. Etiam quis libero ultrices, semper arcu id, suscipit purus. Phasellus eu arcu tincidunt dui pellentesque feugiat et at risus. In hendrerit laoreet ante ac imperdiet. Nam tortor urna, laoreet in malesuada quis, pretium cursus dolor.
                        </div>
                        <div id="" class="" x-show="openTab === 2">
                            Curabitur at lacinia felis. Curabitur elit ante, efficitur molestie iaculis non, blandit dictum dui. Fusce ac faucibus lorem, in aliquet metus. Praesent bibendum justo vitae ante imperdiet, sit amet posuere tortor tincidunt. Nam a arcu eros. In vitae augue tempus, ullamcorper lectus ut, egestas erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean imperdiet eget sapien nec consequat. Etiam imperdiet diam ac mattis gravida.
                        </div>
                        <div id="" class="" x-show="openTab === 3">
                            Duis imperdiet ullamcorper nibh, sed euismod dolor facilisis sit amet. Etiam quis cursus lorem. Vivamus euismod accumsan neque lobortis tempus. Praesent nec lacinia odio, a dictum risus. Sed eget dictum turpis, vitae iaculis orci. Vivamus laoreet consequat velit, non viverra diam pulvinar a. Aliquam bibendum ligula lacus, ac convallis ipsum hendrerit ut. Suspendisse rutrum dui libero, non aliquam lectus lobortis at. Donec gravida finibus sollicitudin. Nulla ut metus finibus purus vehicula porttitor. Fusce id sem non nisl pulvinar scelerisque.
                        </div>
                        <div id="" class="" x-show="openTab === 4">
                            Mauris viverra viverra dolor quis gravida. Duis pharetra felis id tellus faucibus pulvinar. Integer non ligula lobortis, hendrerit est eget, maximus sapien. Suspendisse vel nibh feugiat, porta ex et, dignissim diam. Maecenas finibus consectetur efficitur. Sed tempus vehicula interdum. Nam porttitor id risus a ultrices. Proin mi nulla, ultricies eu ipsum vitae, fermentum congue nunc. Phasellus a dictum massa. Nunc quis lacus et ex vulputate molestie ac eget est. Integer porttitor placerat quam, eu convallis sem tristique sit amet. Nam at risus fringilla, pharetra mauris tincidunt, imperdiet nisi.
                        </div>
                    </div>
                </div>
            </main>
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
							<!-- END tab-pane -->

							<!-- BEGIN tab-pane -->
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
							<!-- END tab-pane -->

							<!-- BEGIN tab-pane -->
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
							<!-- END tab-pane -->
						</div>
					</div>

                    @include('pages.profile.profile-trends')

				</div>
			</div>
		</div>
    </div>
</div>
