{{-- <x-filament-panels::page> --}}
    {{-- <livewire:show-post-profile :record="$record"/> --}}


<div>

        <div  class="relative">
        <div class="absolute end-0 z-10 mt-2 w-56 p-2">
            @if (Auth::user()->id === $post->user->id)
            <a  href="{{App\Filament\App\Resources\PostResource::getUrl('edit',[$post->id])}}"
                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                role="menuitem"
            >
            Editar Post
            </a>
            @endif
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
                                @if (Str::contains(request()->url(), '/feria-client'))
                                <a href="{{App\Filament\Pages\ProfileCompany::getUrl(['slug'=>$company->slug])}}" class="text-decoration-none">
                                    {{$post->user->name}}
                                </a>
                                @else

                                <a href="{{App\Filament\App\Pages\ProfilePage::getUrl()}}" class="text-decoration-none">
                                    {{$post->user->name}}
                                </a>
                                @endif
                                {{$post->title ? 'publico:':''}}
                                <a href="{{App\Filament\Pages\Post::getUrl(['slug'=>$post->slug])}}" class="text-decoration-none" @if($post->title)href="{{ $post->title }}"@endif>
                                    {{ $post->title }}
                                </a>
                                </div>
							<div class="text-body text-opacity-50 fs-13px">{{$post->created_at}}</div>
						</div>

					</div>

                    <h3>{{$post->title ? $post->title :''}}</h3>
					<p class="mb-0">{!! $post->content !!}</p>
                @if($post->getMediaType()=='image')
					<div class="profile-img-list">
                        @if ($post->media->count()==1)
                            <div class="profile-img-list-item first">
                                <a href="/storage/{{$post->media->first()}}" data-lity class="profile-img-list-link">
                                    <img src="{{$post->getThumbnail()}}"/>
                                </a>
                            </div>

                        @else
                            <div class="profile-img-list-item main">
                                <a href="/storage/{{$post->media->first()->file_path}}" data-lity class="profile-img-list-link">
                                    <img src="/storage/{{$post->media->first()->file_path}}"/>
                                </a>
                            </div>
                        @endif

                       @foreach($post->media as $key => $media)
                        @if ($key == 0)  @php $key++; @endphp  @continue

                        @elseif ($key > 3)
			    		<div class="profile-img-list-item with-number">
							<a href="{{$media}}" data-lity class="profile-img-list-link">
                                <img src="{{$media}}"/>
								<div class="profile-img-number">{{$post->media->count()>4?"+".$post->media->count()-4:''}}</div>
							</a>
						</div>
                        @break
                        @endif
                        @if ($post->media->count()==2)
                            <div class="profile-img-list-item main">
                                <a href="/storage/{{$media->file_path}}" data-lity class="profile-img-list-link">
                                    <img src="/storage/{{$media->file_path}}"/>
                                </a>
                            </div>
                        @break
                        @else
	    				<div class="profile-img-list-item">
                            <a href="{{$media}}" data-lity class="profile-img-list-link">
                                <img src="/storage/{{$media->file_path}}"/>
                            </a>
                        </div>
                        @endif
                        @endforeach

                    </div>
                @endif
			</div>

            {{-- {{$post->getThumbnail($media)}} --}}
            @if($post->getMediaType()=='video')
				<div class="pt-0 ps-0 pe-0">
					<div class="ratio ratio-16x9">
						<iframe src="{{$post->getThumbnail($media)}}"></iframe>
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


</div>

{{-- </x-filament-panels::page> --}}
