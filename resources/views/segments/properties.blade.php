<section id="page-b" style="background-color:#dcc7b7">
    <div class="container">
        <h1 id="page-properties" class="page-title text-center">
            <span>
                <span class="heading-content">Properties</span>
            </span>
        </h1>
        <div class="row d-flex justify-content-center">
            @foreach($properties as $property)
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card card-hover" data-aos="zoom-in">
                    <!-- Card hover -->
                    <div class="card-img">
                        <!-- Card img -->
                        <?php $property_images = json_decode($property->image); ?>
                        <img class="img-card" src="{{ asset('images/blueprints/'. $property_images[0]) }}" alt="{{ $property->image }}">
                        <div class="overlay-card">
                            <!-- Overlay -->
                            <div class="overlay-content">
                                <!-- Overlay content -->
                                <a class="overlay-hover" data-toggle="modal" data-target="#myModal{{ $property->id }}" data-backdrop="static" data-keyboard="false" href="#myModal">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <a class="card-description">
                            <p>{{ $property->properties_name }}</h2>
                                <h2>{{ $property->type }}
                            </p>
                            <p>{{ $property->location }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('segments.blueprints.blueprint')