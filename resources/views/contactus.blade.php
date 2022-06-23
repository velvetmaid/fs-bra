@extends('layouts.main')


@section('container')
<div class="content-about">
  <div class="left-content-about">
    <div class="top-left-content-about">
      <h6 class="contact-title">Contact Us</h6>
      <h4>Easy To Contact Us</h4>
      <div class="call">
        <a href="/" class="fas fa-phone-alt contact-icon"></a>
        <span class="icon-name-about">Call</span>
        <span class="icon-desc-about">021 4444 4444</span>
      </div>
      <div class="email">
        <span class="fas fa-envelope-open-text contact-icon"></span>
        <span class="icon-name-about">Email</span>
        <span class="icon-desc-about">Ardito@mail.com</span>
      </div>
      <div class="chat">
        <span class="fas fa-comments contact-icon"></span>
        <span class="icon-name-about">Chat</span>
        <span class="icon-desc-about">+62 123 4444</span>
      </div>
    </div>
  </div>
  <img src="images/home-1.jpg" class="contact-bg" alt="">
  <div class="right-content-about">

    <div class="bottom-left-content-about">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
@endsection