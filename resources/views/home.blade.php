@extends('layouts.main')

@section('container')

<div class="top-layout-bg">
    <div class="top-layout">
        <div class="left-top-layout">
            <div class="top-left-top-layout">
                <h1> The most affortable place to stay in the san franciso bay area </h1>
                <p> Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy </p>
            </div>
            <div class="bottom-left-layout">
                <div class="searchContainer">
                    <i class="fa fa-map-marker searchIcon"></i>
                    <input class="searchBox" type="search" name="search" placeholder="Search...">
                    <input type="submit" value="Search" class="searchButton">
                </div>
            </div>
        </div>
        <div class="right-top-layout">
            <img src="images/type-home/rumah 36 60.jfif" class="right-top-layout-bg" alt="">
        </div>
    </div>
</div>
@include('segments.type-home-gallery')
@include('segments.facilities-gallery')
</div>

@endsection