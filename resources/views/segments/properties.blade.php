<section class="wp-block" style="background-color:#dcc7b7">
    <div class="container" id="list-properties">
        <h1>TITLE TEXT HERE...</h1>
        <div class="row d-flex justify-content-center">
            @foreach($properties as $property)
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card card-hover" data-aos="zoom-in">
                    <!-- Card hover -->
                    <div class="card-img" href="" data-target="#myModal{{$property->id}}" data-toggle="modal" role="document">
                        <!-- Card img -->
                        <img src="{{ asset('images/properties-image/'.$property->properties_image) }}" alt="">
                        <div class="overlay-card">
                            <!-- Overlay -->
                            <div class="overlay-content">
                                <!-- Overlay content -->
                                <a class="overlay-hover" href="#!">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <a href="#!">
                            <h2 class="card-title">{{ $property->properties_name }}</h2>
                            <p class="card-price">{{ $property->type }}</p>
                            <p class="card-description">{{ $property->location }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('segments.blueprints.blueprint')
<script>
    $(document).ready(function() {

        $('.card').delay(1800).queue(function(next) {
            $(this).removeClass('overlay-hover');
            $('overlay-hover').removeClass('overlay-hover');
            next();
        });
    });
</script>