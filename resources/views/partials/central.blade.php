<div id="primary-container" class="container-fluid">
    <main id="main" class="site-main">
        <article>
            @yield('main')
            @yield('about')
            @yield('contact')
            <!-- Modal Form Reservation -->
            <div id="reservasiBtn">
                <button class="reservasi btn btn-outline-success" data-toggle="modal" data-target="#reservasiModal">Reservasi</button>
            </div>
            <div class="modal fade" id="reservasiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Reservasi Form</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                        @endif
                        <form action="{{url('captcha-validation')}}" method="POST">
                            @csrf
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" id="form34" class="form-control" name="reservation_name" required>
                                    <label data-error="wrong" data-success="right" for="form34">Nama</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" id="form29" class="form-control" name="email" required>
                                    <label data-error="wrong" data-success="right" for="form29">Email</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-phone"></i>
                                    <input type="number" id="form34" class="form-control" name="notelp" required>
                                    <label data-error="wrong" data-success="right" for="form34">No. Telp</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-industry"></i>
                                    <select class="form-control" id="exampleFormControlSelect1" name="model">
                                        <option>Modern</option>
                                        <option>Industrial</option>
                                    </select>
                                    <label data-error="wrong" data-success="right" for="form34">Jenis</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-list-ol"></i>
                                    <select class="form-control" id="exampleFormControlSelect1" name="type">
                                        <option>36/60</option>
                                        <option>80/72</option>
                                        <option>84/75</option>
                                    </select>
                                    <label data-error="wrong" data-success="right" for="form32">Tipe</label>
                                </div>

                                <div class="md-form mb-5">
                                    <div class="captcha">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                    </div>
                                </div>
                                <div class="md-form mb-5">
                                    <input id="captcha" type="text" placeholder="Enter Captcha" name="captcha" class="form-control @error('captcha') is-invalid @enderror" required />
                                </div>
                                @error('captcha')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @push('scripts')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
                $("#reload").click(function() {
                    $.ajax({
                        type: "GET",
                        url: "/reload-captcha",
                        success: function(data) {
                            $(".captcha span").html(data.captcha);
                        },
                    });
                });
            </script>
            @endpush

        </article>
    </main>
</div>