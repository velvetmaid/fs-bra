<div class="container">
    <h1>TITLE TEXT HERE...</h1>
    <div class="row" id="tiperumah">
        @foreach($properties as $property)
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card stacked" data-aos="zoom-in">
                <a href="" data-target="#home-detail1" data-toggle="modal" role="document">
                    <img src="images/type-home/rumah 36 60.jfif" alt="" class="card_img">
                </a>
                <div class="card_content">
                    <h2 class="card_title">{{ $property->properties_name }}</h2>
                    <p class="card_price">{{ $property->type }}</p>
                    <p class="card_description">{{ $property->location }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>