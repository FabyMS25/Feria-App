<main>
    <div class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="mb-5">
          <h2 class="mb-4" style="line-height:1.5">{{$item->title}}</h2>
          <span>{{ \Carbon\Carbon::parse($item->published_at)->format('F jS Y') }} <span class="mx-2">/</span> </span>
          <p class="list-inline-item">Categorias :
            @foreach ($item->categories as $category)
                <a href="{{route('items').'?categorySlug='.$category->slug}}" class="ml-1">{{$category->name}} </a>
            @endforeach
          </p>
          <p class="list-inline-item">Tags :
            <a href="#!" class="ml-1">Photo </a> ,
            <a href="#!" class="ml-1">Image </a>
          </p>
        </div>
        <div class="mb-5 text-center">
            @if($item->media)
            @foreach($item->media as $media)
            <div class="post-slider rounded overflow-hidden">
                <img loading="lazy" decoding="async" src="/storage/{{$media->file_path}}" alt="Post Thumbnail">
            </div>
          @endforeach
          @endif
        </div>
        <div class="content">

            {!! $item->content!!}
          <h4 id="heading-example"></h4>
          <p>
          </p>
          <h5 id="paragraph"></h5>

        </div>
      </div>
    </div>
  </div>
</div>
</main>
