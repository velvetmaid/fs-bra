@extends('layouts.main')

@section('contact')

<!-- Banner -->
@include('segments.banner-about')
<!-- End of Banner -->
<div class="container">
    <div class="row text-justify pb-5">
        <div class="col-lg-6 col-md-6 col-sm-12 d-block">
            <span>Visi</span>
            <div class="">
                @foreach ($about as $indexAbout)
                <h1>{{ $indexAbout->visi }}</h1>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-block">
            <span>Misi</span>
            <div class="ar-center row">
                <p class="col-lg-12 col-md-12 col-sm-6">{{ $indexAbout->misi  }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection