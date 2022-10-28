@foreach($properties as $property)
<div id="myModal{{ $property->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-bg">
            <div class="modal-header">
                <h5 class="modal-title">{{ $property->properties_name  }}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid modal-layouts">
                    <div class="row">
                        <div class="modal-layout-left col-12 col-lg-7 mb-3">
                            <div class="row preview-main-img">
                                @php
                                $property_images = json_decode($property->image);
                                @endphp
                                <div class="container">
                                    <div class="fotorama" data-logo="true" data-allowfullscreen="true" data-autoplay="true" data-nav="thumbs" data-thumbwidth="110.5" data-thumbheight="65" data-thumbmargin="10" data-thumbborderwidth="4" data-width="850" data-height="550">
                                        @foreach ($property_images as $img)
                                        <img src="{{ asset('images/blueprints/'. $img) }}" alt="{{ $property->image }}" width="144" height="96">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-layout-right col-12 col-lg-5">
                            <div class="container-fluid spacing-top">
                                <div class="row top-0 ">
                                    <div class="col-sm-12 my-auto top-3 h-100 d-inline-block">
                                        <div class="col-sm-12 card-block mx-auto text-center">
                                            <h1 class="modal-desc-text">{{ $property->properties_description }}</h1>
                                        </div>
                                        <div class="col-sm-12 card-block mx-auto text-center">
                                            <h1 class="modal-desc-text">{{ $property->model }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid spacing-bottom">
                                <a href="https://api.whatsapp.com/send?phone={{ $property->notelp }}" target="_blank" rel="noopener noreferrer" type="button" class="btn btn-tertiary btn-lg btn-block text-center">
                                    <i class="fa-brands fa-whatsapp">
                                    </i>Hubungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach