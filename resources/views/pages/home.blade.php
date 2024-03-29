@extends('layouts.app')

@section('style')

<style>
.carousel {}
.carousel .carousel-inner {height:300px;}
.carousel .carousel-inner .carousel-item {height:100%;}
.carousel-image {min-width:100%;object-fit:cover;object-position:center;}
.carousel-caption {left:0;right:0;bottom:0;z-index:14;}
.bg-dark-transparent {background-color:#272B3090;}
.carousel-control-next, .carousel-control-next {z-index:16;}
</style>

@endsection

@section('content')
<div class="container bg-darker py-4">
    <div class="row mb-3">
        <div class="col-md-12 my-5">
            <h1 class="display-3 text-center text-bold">Welcome to 
            <span class="font-weight-normal">AnimeList</span></h1>
        </div>
    </div>
    <div class="row">
    @if (count($r_anime) > 0)
        <div class="card w-100 mb-5">
        <h1 class="card-header">Most Rated</h1>
        <div id="ratingCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            @foreach ($r_anime as $i=>$anime)
                <li data-target="#ratingCarousel" data-slide-to="{{ $i }}"
                class="@if ($i == 0) active @endif"></li>
            @endforeach
            </ol>
            <div class="carousel-inner">
            @foreach ($r_anime as $i=>$a)
                <div class="carousel-item @if ($i == 0) active @endif">
                    <a href="{{ route('display', $a->anime_id) }}" title="{{ $a->anime_name }}">
                        <img class="carousel-image d-block w-100 h-100"
                        src="{{ $a->anime_featured_image }}" alt="{{ $a->anime_name }}">
                        <!-- src="{{ asset('images/featured/'.$a->anime_featured_image) }}" alt="{{ $a->anime_name }}"> -->
                        <div class="carousel-caption d-none d-md-block bg-dark-transparent">
                            <h5>{{ $a->anime_name }}</h5>
                            <p class="text-truncate">{{ $a->anime_description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
            <a class="carousel-control-prev" href="#ratingCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">{{ __('Previous') }}</span>
            </a>
            <a class="carousel-control-next" href="#ratingCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">{{ __('Next') }}</span>
            </a>
            </div>
        </div>
    @else
        <div class="col-md-8 offset-md-2">
            <p class="h3 text-center">
                No rated anime to display here yet.
            </p>
        </div>
    @endif
    </div>

    <div class="row">
    @if (count($v_anime) > 0)
        <div class="card w-100 my-5">
        <h1 class="card-header">Most Voted</h1>
        <div id="voteCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            @foreach ($v_anime as $i=>$anime)
                <li data-target="#voteCarousel" data-slide-to="{{ $i }}"
                class="@if ($i == 0) active @endif"></li>
            @endforeach
            </ol>
            <div class="carousel-inner">
            @foreach ($v_anime as $i=>$a)
                <div class="carousel-item @if ($i == 0) active @endif">
                    <a href="{{ route('display', $a->anime_id) }}" title="{{ $a->anime_name }}">
                        <img class="carousel-image d-block w-100 h-100"
                        src="{{ $a->anime_featured_image }}" alt="{{ $a->anime_name }}">
                        <!-- src="{{ asset('images/featured/'.$a->anime_featured_image) }}" alt="{{ $a->anime_name }}"> -->
                        <div class="carousel-caption d-none d-md-block bg-dark-transparent">
                            <h5>{{ $a->anime_name }}</h5>
                            <p class="text-truncate">{{ $a->anime_description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
            <a class="carousel-control-prev" href="#voteCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">{{ __('Previous') }}</span>
            </a>
            <a class="carousel-control-next" href="#voteCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">{{ __('Next') }}</span>
            </a>
            </div>
        </div>
    @else
        <div class="col-md-8 offset-md-2">
            <p class="h3 text-center">
                No rated anime to display here yet.
            </p>
        </div>
    @endif
    </div>
</div>

<script type="application/javascript">
// $(document).ready(function(){
/* 
//  $(".owl-carousel").owlCarousel({
//      margin: 10,
//      loop: true,
//      nav: true
//  });
*/
// $('.owl-carousel').owlCarousel({
//     autoplay: true,
//     autoHeight: true,
//     autoplayHoverPause: true,
//     items: 1,
//     loop: true,
//     margin: 10,
//     nav: true
// });
// });
</script>

@endsection
