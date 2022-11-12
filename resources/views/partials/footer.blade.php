<!-- Remove the container if you want to extend the Footer to full width. -->
<footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row mt-4">
      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4">About company</h5>

        @foreach ($about as $indexAbout)
        <p>
          {{ $indexAbout->visi }}
        </p>

        <p>
          {{ $indexAbout->misi }}
        </p>

        <div class="mt-4" style="padding-bottom: 1em ;">
          <!-- Facebook -->
          <a href="{{ $indexAbout->facebook }}" type="button" class="btn btn-floating btn-secondary btn-lg"><i class="fab fa-facebook-f"></i></a>
          <!-- Tiktok -->
          <a href="{{ $indexAbout->facebook }}" type="button" class="btn btn-floating btn-secondary btn-lg"><i class="fab fa-tiktok"></i></a>
          <!-- Twitter -->
          <a href="{{ $indexAbout->instagram }}" type="button" class="btn btn-floating btn-secondary btn-lg"><i class="fab fa-twitter"></i></a>
          <!-- Instagram -->
          <a href="{{ $indexAbout->instagram }}" type="button" class="btn btn-floating btn-secondary btn-lg"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      @endforeach
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4 pb-1">information</h5>

        <div class="second">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-4">Find Us</h5>

        @foreach ($contact as $indexContact)
        <ul class="fa-ul" style="margin-left: 2em;">
          <li class="li-find-us mb-3">
            <span class="fa-li"><i class="fas fa-location-arrow"></i></span><span class="ms-2">{{ $indexContact->location }}</span>
          </li>
          <li class=" li-find-us mb-3">
            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">{{ $indexContact->email }}</span>
          </li>
          <li class="li-find-us mb-3">
            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">{{ $indexContact->no_hp }}</span>
          </li>
        </ul>
        @endforeach

      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <a class="text-white" href="#">
      <p class="text-center">Copyright &copy; <script>
          document.write(new Date().getFullYear())
        </script> Le Casa Bonita All Rights Reserved</p>
    </a>
  </div>
  <!-- Copyright -->
</footer>

<!-- End of .container -->