<div id="home-detail1" class="modal fade">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Default Modal</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <section class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
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
                    </div>
                </div>
            </section>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, I Understand</button>
            </div>
        </div>
    </div>
</div>
<div id="home-detail2" class="modal fade">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Default Modal</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>The default modal size has been changed to 600px. Now it is 100px wider than the previous 500px wide modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, I Understand</button>
            </div>
        </div>
    </div>
</div>
<div id="home-detail3" class="modal fade">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Default Modal</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>The default modal size has been changed to 600px. Now it is 100px wider than the previous 500px wide modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, I Understand</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function changeImage(a) {
        document.getElementById("img").src = a;
    }
</script>