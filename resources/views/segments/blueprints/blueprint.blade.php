@foreach($properties as $property)

<div id="myModal{{ $property->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-bg">
            <div class="modal-header">
                <h5 class="modal-title">{{ $property->properties_name  }}</h5>
                <button type="button" class="close" onclick="history.go(0)" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid modal-layouts">
                    <div class="row">

                        <div class="modal-layout-left col-12 col-lg-7 mb-3">
                            <div class="col-12 main-img-layout">
                                <?php $property_images = json_decode($property->image); ?>
                                <img id="mainThumb" src="{{ asset('images/blueprints/'. $property_images[0]) }}" alt="" class="main-img">
                            </div>
                            <div class="row preview-main-img">
                                @foreach ($property_images as $images)
                                <div class="col-6 col-md-3 col-lg-3">
                                    <div class="child-product-thumbnail">
                                        <img id="childThumb" src="{{ asset('images/blueprints/'. $images) }}" alt="{{ $property->image }}" class="preview">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="modal-layout-right col-12 col-lg-5">
                            <div class="container-fluid spacing-top">
                                <div class="row top-0 ">
                                    <div class="col-sm-12 my-auto top-3">
                                        <div class="col-sm-10 card-block mx-auto text-center">
                                            <h1 class="modal-desc-text">{{ $property->properties_name }}</h1>
                                        </div>
                                        <div class="col-sm-10 card-block mx-auto text-center">
                                            <p class="modal-desc-text">{{ $property->properties_description }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid spacing-bottom">
                                <button type="button" class="btn btn-tertiary btn-lg btn-block text-center">
                                    <i class="fa-brands fa-whatsapp"></i>Hubungi</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endforeach

<!-- Inlne JS for onclick privew image -->
<!-- <script type="text/javascript">
    const showImage = src => {
        document.getElementById('mainThumb').src = src;
    }
</script> -->
<script>
    $(".preview").on('click', function() {
        $(".main-img").prop('src', this.src);
    });
</script>