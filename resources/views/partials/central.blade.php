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
                        <form action="{{ route('reservation.store') }}" method="POST">
                            @csrf
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" id="form34" class="form-control" name="reservation_name">
                                    <label data-error="wrong" data-success="right" for="form34">Nama</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" id="form29" class="form-control" name="email">
                                    <label data-error="wrong" data-success="right" for="form29">Email</label>
                                </div>

                                <div class="md-form mb-5">
                                    <i class="fa-solid fa-phone"></i>
                                    <input type="number" id="form34" class="form-control" name="notelp">
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
                                    <span class="captcha-image">{!! Captcha::img() !!}</span> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-outline-secondary refresh-button">Refresh</button>
                                    <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" required>
                                    <label for="captcha" class="">Captcha</label>
                                    @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
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
                $('#reload').click(function() {
                    $.ajax({
                        type: 'GET',
                        url: 'reload-captcha',
                        success: function(data) {
                            $(".captcha span").html(data.captcha);
                        }
                    });
                });
            </script>
            @endpush

        </article>
    </main>
</div>