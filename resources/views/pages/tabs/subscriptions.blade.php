
    <div class="list-group">
        @foreach ($list as $item)
        {{$item}}
        @php

        $client = App\Models\Client::where('id', $item->client_id)->firstOrFail();
        @endphp
			<div class="list-group-item d-flex align-items-center">
				<img src="/storage/{{$client->avatar}}" alt="" width="50" class="rounded-sm ms-n2">
					<div class="flex-fill px-3">
						<div>
                            <a href="#" class="text-body fw-500 text-decoration-none">
                                {{$client->name}}
                            </a>
                        </div>
						<div class="text-muted fs-13px">
                            Empezo a seguirte el {{$item->created_at}}
                        </div>
				</div>
				<a href="#" class="btn btn-outline-theme">Ver</a>
			</div>

        @endforeach

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
