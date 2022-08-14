@foreach($properties as $property)

<div id="myModal{{ $property->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TITLE HERE..</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="container-fluid modal-layouts">
                    <?php $property_images = json_decode($property->image); ?>
                    <div class="row">

                        <div class="modal-layout-left col-12 col-lg-6 mb-3">
                            <div class="col-12 main-img-layout">
                                <img id="mainThumb" src="{{ asset('images/blueprint/'. $property_images[0]) }}" data-image-id="$id" alt="" class="main-img">
                            </div>
                            <div class="row mt-3">
                                @foreach ($property_images as $images)
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="child-product-thumbnail">
                                        <img src="{{ asset('images/blueprint/'. $images) }}" alt="" class="w-100 h-75 thumbnail-image preview">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="modal-layout-right col-12 col-lg-6 mb-3">
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
                                <button type="button" class="btn btn-primary btn-lg btn-block">Button</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

</div>

@endforeach

<!-- Inlne JS for onclick privew image -->
<!-- <script type="text/javascript">
    const change = src => {
        document.getElementById('mainThumb').src = src;
    }
</script> -->
<script>
    $('.preview').on('click', function() {
        $('.main-img').prop('src', this.src);
    });
</script>