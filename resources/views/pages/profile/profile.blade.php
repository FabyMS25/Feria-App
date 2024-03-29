
@extends('layout.default')

@section('title', 'Profile')

@push('css')
	<link href="/assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />
@endpush

@push('js')
  <script src="/assets/plugins/lity/dist/lity.min.js"></script>
@endpush

@section('content')

	<div class="profile">

		<div class="profile-header">
			<div class="profile-header-cover"></div>

			<div class="profile-header-content">
				<div class="profile-header-img">
                    <img src="/storage/{{$post->thumbnail}}"/>
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
							<div class="nav-field">Clientes</div>
							<div class="nav-value">1.3m</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#profile-media" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Photos</div>
							<div class="nav-value">1,397</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#profile-video" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Videos</div>
							<div class="nav-value">120</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Following</div>
							<div class="nav-value">2,592</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END profile-header -->

		<!-- BEGIN profile-container -->
		<div class="profile-container">
			<!-- BEGIN profile-sidebar -->
			<div class="profile-sidebar">
				<div class="desktop-sticky-top">
					<!-- profile info -->
					{{-- <h4>{{$user->companies->first()->nombre}}</h4> --}}
					{{-- <div class="fw-500 mb-3 text-muted mt-n2">{{$user->email}}</div> --}}
					<p>
						Principal UXUI Design & Brand Architecture for Studio. Creator of SeanTheme.
						Bringing the world closer together. Studied Computer Science and Psychology at Harvard University.
					</p>
					<div class="mb-1">
						<i class="fa fa-map-marker-alt fa-fw text-muted"></i> New York, NY
					</div>
					<div class="mb-3">
						<i class="fa fa-link fa-fw text-muted"></i> seantheme.com/studio
					</div>

					<hr class="mt-4 mb-4">

					<!-- people-to-follow -->
					<div class="fw-500 mb-3 fs-16px">People to follow</div>
					<div class="d-flex align-items-center mb-3">
						<img src="/assets/img/user/user-1.jpg" alt="" width="30" class="rounded-circle">
						<div class="flex-fill px-3">
							<div class="fw-500 text-truncate w-100px">Noor Rowe</div>
							<div class="fs-12px text-body text-opacity-50">3.1m followers</div>
						</div>
						<a href="#" class="btn btn-sm btn-outline-theme fs-11px fw-500">Follow</a>
					</div>
					<div class="d-flex align-items-center mb-3">
						<img src="/assets/img/user/user-2.jpg" alt="" width="30" class="rounded-circle">
						<div class="flex-fill px-3">
							<div class="fw-500 text-truncate w-100px">Abbey Parker</div>
							<div class="fs-12px text-body text-opacity-50">302k followers</div>
						</div>
						<a href="#" class="btn btn-sm btn-outline-theme fs-11px fw-500">Follow</a>
					</div>
					<div class="d-flex align-items-center mb-3">
						<img src="/assets/img/user/user-3.jpg" alt="" width="30" class="rounded-circle">
						<div class="flex-fill px-3">
							<div class="fw-500 text-truncate w-100px">Savannah Nicholson</div>
							<div class="fs-12px text-body text-opacity-50">720k followers</div>
						</div>
						<a href="#" class="btn btn-sm btn-outline-theme fs-11px fw-500">Follow</a>
					</div>
					<div class="d-flex align-items-center mb-3">
						<img src="/assets/img/user/user-4.jpg" alt="" width="30" class="rounded-circle">
						<div class="flex-fill px-3">
							<div class="fw-500 text-truncate w-100px">Kenny Bright</div>
							<div class="fs-12px text-body text-opacity-50">1.4m followers</div>
						</div>
						<a href="#" class="btn btn-sm btn-outline-theme fs-11px fw-500">Follow</a>
					</div>
					<div class="d-flex align-items-center">
						<img src="/assets/img/user/user-5.jpg" alt="" width="30" class="rounded-circle">
						<div class="flex-fill px-3">
							<div class="fw-500 text-truncate w-100px">Cara Poole</div>
							<div class="fs-12px text-body text-opacity-50">989k followers</div>
						</div>
						<a href="#" class="btn btn-sm btn-outline-theme fs-11px fw-500">Follow</a>
					</div>
				</div>
			</div>
			<!-- END profile-sidebar -->

			<!-- BEGIN profile-content -->
            {{-- @include('pages.posts.post') --}}
			<!-- END profile-content -->
		</div>
		<!-- END profile-container -->
	</div>
	<!-- END profile -->
@endsection
