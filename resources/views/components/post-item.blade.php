        <article class="flex flex-col my-4 shadow">
            @foreach($post->media as $media)
                <a href="{{route('view',$post)}}" class="hover:opacity-75">
                    <img src="{{$post->getThumbnail($media)}}"/>
                </a>
            @endforeach
            <div class="flex flex-col justify-start p-6 bg-white">
                <div class="flex gap-4">
                    @foreach ($post->categories as $category)
                        <a href="{{route('by-category',$category)}}" class="pb-4 text-sm font-bold text-blue-700 uppercase">
                            {{$category->name}}
                        </a>
                    @endforeach

                </div>
                    <a href="{{route('view',$post)}}" class="pb-4 text-3xl font-bold hover:text-gray-700">
                        {{$post->title}}
                    </a>

                    <p class="pb-3 text-sm">
                        Publicado por:
                        <a href="{{route('by-company',$post->company)}}" class="font-semibold hover:text-gray-800">
                            {{$post->company->name}}
                        </a>,
                        fecha: {{ \Carbon\Carbon::parse($post->published_at)->format('F jS Y') }}
                        <!-- \Carbon\Carbon::parse($post->published_at)->formatLocalized('%d de %B de %Y') }} -->
                    </p>

                    <a href="#" class="pb-6">
                        {!! \Illuminate\Support\Str::limit($post->content,50,'...') !!}
                    </a>
                <a href="{{route('view',$post)}}" class="text-gray-800 uppercase hover:text-black">Ver más<i class="fas fa-arrow-right"></i></a>
            </div>
        </article>
