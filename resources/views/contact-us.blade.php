@extends('layouts.main')

@section('contact')

<!-- Banner -->
@include('segments.banner-contact')
<!-- End of Banner -->
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-content-between flex-wrap">
      <div class="col-12 left-content-about">
        <div class="top-left-content-about">
          <h1 id="page-contact" class="page-title text-center">
            <span>
              <span class="heading-content">Contact</span>
            </span>
          </h1>
          <div class="text-center">
            <div class="call">
              @foreach ($contact as $indexContact)
              <a href="/" class="fas fa-phone-alt contact-icon"></a>
              <span class="icon-name-about">Call</span>
              <span class="icon-desc-about">{{ $indexContact->no_hp }}</span>
            </div>
            <div class="email">
              <a href="/" class="fas fa-envelope-open-text contact-icon"></a>
              <span class="icon-name-about">Email</span>
              <span class="icon-desc-about">{{ $indexContact->email }}</span>
            </div>
            <div class="chat">
              <a href="https://wa.me/{{ $indexContact->no_hp }}" class="fas fa-comments contact-icon"></a>
              <span class="icon-name-about">Chat</span>
              <span class="icon-desc-about">{{ $indexContact->no_hp }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 google-maps">
        <iframe src="{{ $indexContact->location }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        @endforeach
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 right-top-layout">
      <img src="https://avatars.mds.yandex.net/i?id=f404535374691b48d1c331c2f64fef39-5102031-images-thumbs&n=13" alt="thumb-data">
    </div>
  </div>
</div>
@endsection