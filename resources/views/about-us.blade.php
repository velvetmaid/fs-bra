@extends('layouts.main')

@section('contact')

<!-- Banner -->
@include('segments.banner-about')
<!-- End of Banner -->
<div class="container">
    <div class="row text-justify pb-5">
        <div class="col-lg-6 col-md-6 col-sm-12 d-block">
            <span>Description</span>
            <hr color="green"> 
            <div class="">
                @foreach ($about as $indexAbout)
                <h3>{{ $indexAbout->description }}</h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-block">
            <div>
            <p>
              Visi
            <p>
            <hr color="green"> 
                <p class="col-lg-12 col-md-12 col-sm-6">{{ $indexAbout->visi  }}</p>
            </div>
            <div>
            <p>
              Misi
            <p>
            <hr color="green"> 
                <p class="col-lg-12 col-md-12 col-sm-6">{{ $indexAbout->misi  }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
