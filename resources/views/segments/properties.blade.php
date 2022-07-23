<div class="container" id="list-properties">
    <h1>TITLE TEXT HERE...</h1>
    <div class="row">
        @foreach($properties as $property)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card stacked" data-aos="zoom-in">
                <a href="" data-target="#myModal{{$property->id}}" data-toggle="modal" role="document">
                    <img src="{{ asset('images/properties-image/'.$property->properties_image) }}" alt="" class="card-img">
                </a>
                <div class="card-content">
                    <h2 class="card-title">{{ $property->properties_name }}</h2>
                    <p class="card-price">{{ $property->type }}</p>
                    <p class="card-description">{{ $property->location }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('segments.blueprints.blueprint')