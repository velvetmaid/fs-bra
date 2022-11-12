@include('controls/admins.outline.header')

<style>
    .container-card {
        text-decoration: none !important;
        color: inherit;
    }

    .menu-card {
        border-top: 8px solid;
        height: 350px;
    }

    .icon-sz {
        font-size: 5rem;
        position: absolute;
        right: 50px;
        bottom: 35px;
    }

    .icon-card-home,
    .home-card:hover {
        color: #2da949;
    }

    .icon-card-about,
    .about-card:hover {
        color: #17a2b8;
    }

    .icon-card-slide,
    .slide-card:hover {
        color: #ffc107;
    }

    .icon-card-contact,
    .contact-card:hover {
        color: #343a40;
    }

    .icon-card-page,
    .page-card:hover {
        color: #dc3545;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: auto;
    }

    @media only screen and (max-width: 1880px) {
        .display-2 {
            font-size: 4rem;
        }
    }

    @media only screen and (max-width: 1440px) {
        .display-2 {
            font-size: 2.5rem;
        }

        .menu-card {
            height: 320px;
        }
    }



    /* .container-card {
        transition: .3s all ease;
    }

    .container-card:hover {
        margin-bottom: 15px;
        margin-left: 10px;
    } */

    @-webkit-keyframes container-card {
        30% {
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }
    }

    @keyframes container-card {
        30% {
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }
    }

    .container-card {
        padding: 1rem;
        display: inline-block;
        vertical-align: middle;
        /*      -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0); */
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    }

    .container-card:hover,
    .container-card:focus,
    .container-card:active {
        -webkit-animation-name: container-card;
        animation-name: container-card;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
    }
</style>
<div>
    <h1 class="text-center">Welcome, {{ Auth::user()->name }}</h1>
    <h2 class="text-center"><b>{{ $title }}</b></h2></b>
</div>

<div class="row m-0 align-items-center d-flex">

    <a class="container-card home-card col-sm-12 col-lg-6 mx-auto" href="/index-properties">
        <div class="menu-card bg-white p-5 shadow rounded border-success">
            <h1 class="display-2 mb-0 mt-2">Properties</h1>
            <footer class="mt-4 text-right">
                <h5 class="text-left text-muted" title="Source Title">Konten pada halaman utama bagian properties</h5>
                <i class="icon-sz icon-card-home fa-solid fa-industry"></i>
            </footer>
        </div>
    </a>

    <a class="container-card about-card col-12 col-lg-3 mx-auto" href="{{ route('about.index') }}">
        <div class="menu-card bg-white p-5 shadow rounded border-info">
            <h1 class="display-2 mb-0 mt-2">About</h1>
            <footer class="mt-4 text-right">
                <h5 class="text-left text-muted" title="Source Title">Konten pada halaman about</h5>
                <i class="icon-sz icon-card-about fa-solid fa-user"></i>
            </footer>
        </div>
    </a>

    <a class="container-card slide-card col-12 col-lg-3 mx-auto" href="{{ route('slideshow.index') }}">
        <div class="menu-card bg-white p-5 shadow rounded border-warning">
            <h1 class="display-2 mb-0 mt-2">Slideshow</h1>
            <footer class="mt-4 text-right">
                <h5 class="text-left text-muted" title="Source Title">Gambar banner halaman utama</h5>
                <i class="icon-sz icon-card-slide fa-regular fa-image"></i>
            </footer>
        </div>
    </a>

    <a class="container-card contact-card col-12 col-lg-6 mx-auto" href="{{ route('contact.index') }}">
        <div class="menu-card bg-white p-5 shadow rounded border-dark">
            <h1 class="display-2 mb-0 mt-2">Contact</h1>
            <footer class="mt-4 text-right">
                <h5 class="text-left text-muted" title="Source Title">Identitas perusahaan</h5>
                <i class="icon-sz icon-card-contact fa-solid fa-address-book"></i>
            </footer>
        </div>
    </a>

    <!-- <a href="{{ route('logout') }}" onclick="event.preventDefault()
                                                     document.getElementById('logout-form').submit();"> -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <a class="container-card contact-card col-12 col-lg-6 mx-auto nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <div class="menu-card bg-white p-5 shadow rounded border-danger">
            <h1 class="display-2 mb-0 mt-2">Go Back</h1>
            <footer class="mt-4 text-right">
                <h5 class="text-left text-muted" title="Source Title">Menuju halaman utama website</h5>
                <i class="icon-sz icon-card-page fa-solid fa-house"></i>
            </footer>
        </div>
    </a>
    <!--     </a>
 -->

</div>

@include('controls/admins.outline.footer')