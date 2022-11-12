<section id="page-a">
    <div class="carousel-container">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade pointer-event" data-ride="carousel">
            <div class="wrap-welcome-carousel text-center text-white">
                <div class="welcome-carousel-inner">
                    <p class="welcome-carousel-text text-white">LOREM LOREM IPSUM IPSUM LOREM IPSUM</p>
                    <p class="welcome-carousel-text text-white">LOREM IPSUM LOREM IPSUM</p>
                    <a href="#content" class="btn btn-welcome tm-btn-cta fa-solid fa-angle-down">
                        <span>Discover</span>
                    </a>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="">1</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="">2</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="">3</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" class="">4</li>
            </ol>
            <div class="carousel-inner">
                @foreach ($slideshow as $indexSlide)
                @php $x = json_decode($indexSlide->slide_image); @endphp
                @foreach ($x as $img)
                <div class="carousel-item">
                    <div class="overlay-image" style="background-image: url('{{asset('images/slideshows/'.$img)}}')" alt="{{ $indexSlide -> slide_image }}">
                    </div>
                </div>
                @endforeach
                @endforeach
                <div class="carousel-item active">
                    <div class="overlay-image" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB6kKJHE-aVa2pVFDyKxU_xoQTgW4VtPTGH2ecHtfKWLKvH_ht4H3DMqwWzUcYq-nT5Xg&amp;usqp=CAU)" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>