
<?php
    $post=$company->posts->first()
?>
<div  class="relative">
  <div class="absolute end-0 z-10 mt-2 w-56 p-2">
      <a  href="http://127.0.0.1:8000/feria/{{$company->slug}}/posts/{{$post->id}}/edit"
        class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
        role="menuitem"
      >
      Editar
      </a>
  </div>
</div>

        <div class="card mb-3">
    		<div class="card-body">

					<div class="d-flex align-items-center mb-3">
						<a href="#">
                            <img src="/storage/{{ $company->logo}}" alt="" width="50" class="rounded-circle">
                        </a>
						<div class="flex-fill ps-2">
							<div class="fw-500">
                                <a href="#" class="text-decoration-none">{{$user->name}}</a>
                                {{$post->title ? 'publico:':''}}
                                <a href="/{{$post->slug}}" class="text-decoration-none" @if($post->title)href="{{ $post->title }}"@endif>
                                    {{ $post->title }}
                                </a>
                                </div>
							<div class="text-body text-opacity-50 fs-13px">{{$post->created_at}}</div>
						</div>

					</div>

                    <h3>{{$post->title ? $post->title :''}}</h3>
					<p class="mb-0">{!! \Illuminate\Support\Str::limit($post->content,50,'...') !!}</p>

                @if($post->media)
					<div class="profile-img-list">
    					<div class="profile-img-list-item main">
                            <a href="/images/gallery-6.jpg" data-lity class="profile-img-list-link">
                                <img src="{{$post->getThumbnail($post->media->first())}}"/>
                            </a>
                        </div>
                       @foreach($post->media as $key => $media)
                        @if ($key == 0)  @php $key++; @endphp  @continue
                        @elseif ($key > 3)
			    		<div class="profile-img-list-item with-number">
							<a href="/assets/img/gallery/gallery-5.jpg" data-lity class="profile-img-list-link">
                                <img src="{{$post->getThumbnail($media)}}"/>
								<div class="profile-img-number">{{$post->media->count()>4?"+".$post->media->count()-4:''}}</div>
							</a>
						</div>
                        @break

                        @endif
	    				<div class="profile-img-list-item">
                            <a href="/assets/img/gallery/gallery-2.jpg" data-lity class="profile-img-list-link">
                                <img src="{{$post->getThumbnail($media)}}"/>
                            </a>
                        </div>
                        @endforeach

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
