@extends('layouts.main')

@section('contact')

<!-- Banner -->
@include('segments.banners')
<!-- End of Banner -->
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-content-between flex-wrap">
      <div class="col-12 left-content-about">
        <div class="top-left-content-about">
          <h6 class="contact-title">Contact Us</h6>
          <h4>Easy To Contact Us</h4>
          <div class="call">
            <a href="/" class="fas fa-phone-alt contact-icon"></a>
            <span class="icon-name-about">Call</span>
            <span class="icon-desc-about">021 4444 4444</span>
          </div>
          <div class="email">
            <a href="/" class="fas fa-envelope-open-text contact-icon"></a>
            <span class="icon-name-about">Email</span>
            <span class="icon-desc-about">Ardito@mail.com</span>
          </div>
          <div class="chat">
            <a href="/" class="fas fa-comments contact-icon"></a>
            <span class="icon-name-about">Chat</span>
            <span class="icon-desc-about">+62 123 4444</span>
          </div>
        </div>
      </div>
      <div class="col-12 google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9432.970702244756!2d106.52579103234721!3d-6.25376688858329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e420766f2e519a9%3A0xcf05128d6363176a!2zNsKwMTUnMDMuOSJTIDEwNsKwMzEnMzUuNyJF!5e0!3m2!1sen!2sid!4v1656995166949!5m2!1sen!2sid&z=7" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 right-top-layout">
      <img src="https://avatars.mds.yandex.net/i?id=f404535374691b48d1c331c2f64fef39-5102031-images-thumbs&n=13" class="right-top-layout-bg" alt="">
    </div>
  </div>
</div>
@endsection