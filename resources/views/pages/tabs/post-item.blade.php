    @foreach ($postList as $post)

        <div class="card mb-3">
    		<div class="card-body">
    				<!-- post header -->
					<div class="d-flex align-items-center mb-3">
						<a href="#">
                            <img src="{{ asset('images/'.$company->logo) }}" alt="" width="50" class="rounded-circle">
                        </a>
						<div class="flex-fill ps-2">
							<div class="fw-500">
                                <a href="#" class="text-decoration-none">{{$post->user->name}}</a>
                                {{$post->title ? 'publico:':''}}
                               {{-- <a href="{{ route('posts', ['slug' => $post->slug]) }}" class="text-decoration-none">
                                    {{ $post->title }}
                                </a> --}}

                                <a href="post\{{$post->slug}}" class="text-decoration-none" @if($post->title)href="{{ $post->title }}"@endif>{{ $post->title }}</a>
                                </div>
							<div class="text-body text-opacity-50 fs-13px">{{$post->created_at}}</div>
						</div>
					</div>
					<!-- post content -->
                    <h3>{{$post->title ? $post->title :''}}</h3>
					<p class="mb-0">{!! \Illuminate\Support\Str::limit($post->content,50,'...') !!}</p>

                @if($post->title)
					<div class="profile-img-list">
    					<div class="profile-img-list-item main">
                            <a href="/images/gallery-6.jpg" data-lity class="profile-img-list-link">
                                <img src="{{ asset('images/gallery-6.jpg') }}" alt="">
                            </a>
                        </div>
	    				<div class="profile-img-list-item">
                            <a href="/assets/img/gallery/gallery-2.jpg" data-lity class="profile-img-list-link">
                                {{-- <span class="profile-img-content" style="background-image: url(app/public/gallery-6.jpg)"></span> --}}
                                <img src="{{ asset('images/gallery-6.jpg') }}" alt="">
                            </a>
                        </div>
		    				<div class="profile-img-list-item"><a href="/images/gallery-6.jpg" data-lity class="profile-img-list-link">
                                <img src="{{ asset('images/gallery-6.jpg') }}" alt="">
                                <span class="profile-img-content" style="background-image: url(images/gallery-6.jpg)"></span>
                            </a></div>
							<div class="profile-img-list-item"><a href="/images/gallery-6.jpg" data-lity class="profile-img-list-link">
                                <span class="profile-img-content" style="background-image: url(images/gallery-6.jpg)"></span>
                                <img src="{{ asset('images/gallery-6.jpg') }}" alt="">
                            </a></div>
			    		<div class="profile-img-list-item with-number">
							<a href="/assets/img/gallery/gallery-5.jpg" data-lity class="profile-img-list-link">
                                <img src="{{ asset('images/gallery-6.jpg') }}" alt="">
								<span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-5.jpg)"></span>
								<div class="profile-img-number">+12</div>
							</a>
						</div>
                    </div>
                @endif
			</div>

            @if($post->title =='video')
				<div class="pt-0 ps-0 pe-0">
					<div class="ratio ratio-16x9">
						<iframe src="https://www.youtube.com/embed/ChOhcHD8fBA?showinfo=0"></iframe>
					</div>
				</div>
            @endif
                {{-- <div class="card-body pt-0">
					<hr class="mb-1 ms-n2 me-n2">
                    <div class="row text-center mb-n3 fw-500">
                        <div class="col">
                            <a href="#" class="text-body text-opacity-75 text-decoration-none d-block p-2">
                                <i class="far fa-thumbs-up me-1 d-block d-sm-inline"></i> Calificar
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-body text-opacity-75 text-decoration-none d-block p-2">
                                <i class="far fa-comment me-1 d-block d-sm-inline"></i> Guardar
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-body text-opacity-75 text-decoration-none d-block p-2">
                                <i class="fa fa-share me-1 d-block d-sm-inline"></i> Compartir
                            </a>
                        </div>
                    </div>
                </div> --}}
				<div class="card-footer pt-3 pb-3">
                    <div class="row text-center mt-n3 mb-n3 fw-500">
                        <div class="col">
                            <a href="#" class="text-body text-opacity-75 text-decoration-none d-block p-2">
                                <i class="far fa-thumbs-up me-1 d-block d-sm-inline"></i> Calificar
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-body text-opacity-75 text-decoration-none d-block p-2">
                                <i class="far fa-comment me-1 d-block d-sm-inline"></i> Guardar
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-body text-opacity-75 text-decoration-none d-block p-2">
                                <i class="fa fa-share me-1 d-block d-sm-inline"></i> Compartir
                            </a>
                        </div>
                    </div>
				</div>
		</div>

    @endforeach
