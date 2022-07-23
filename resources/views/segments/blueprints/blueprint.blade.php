@foreach($properties as $property)
<div id="myModal{{$property->id}}" class="modal fade">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TITLE HERE..</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <section class="modal-body">
                <div class="container-fluid modal-layouts">
                    <div class="row">
                        <div class="modal-layout-left col-12 col-lg-6 mb-3">
                            <img id="img" src="images/blueprint/3660 rumah.png" alt="" class="main-image w-100">
                            <div class="row mt-3">
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="child-product-thumbnail">
                                        <img src="images/blueprint/3660 rumah.png" onclick='changeImage("images/blueprint/3660 rumah.png")' alt="" class="w-100 h-75 thumbnail-image">
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="child-product-thumbnail">
                                        <img src="images/blueprint/3660 sketch.png" onclick='changeImage("images/blueprint/3660 sketch.png")' alt="" class="w-100 h-75 thumbnail-image">
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="child-product-thumbnail">
                                        <img src="images/blueprint/8472 rumah.png" onclick='changeImage("images/blueprint/8472 rumah.png")' alt="" class="w-100 h-75 thumbnail-image">
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="child-product-thumbnail">
                                        <img src="images/blueprint/8472 sketch.png" onclick='changeImage("images/blueprint/8472 sketch.png")' alt="" class="w-100 h-75 thumbnail-image">
                                    </div>
                                </div>
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
                                            <p class="modal-desc-text">{{ $property->type }}</h1>
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
            </section>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach