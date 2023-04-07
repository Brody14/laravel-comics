
@extends('layouts.app')

@section('content')

    <section class="hero-section">
        <div class="hero">

        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <span class="btn btn-blue badge">current series</span>
            <div class="row g-3">
               
               {{-- @dump($comics) --}}
               @foreach($comics as $comic)
                <div class="col-2 br-card">
                    <img class="thumbs" src="{{ $comic['thumb']}}" alt="">
                    <h2 class="title">{{ $comic['series'] }}</h2>

                </div>
                @endforeach
            </div>

        </div>
        <div class="container d-flex justify-content-center">
            <button class="btn btn-blue">load more</button>
        </div>

    </section>

    <section>
        <div class="sidebar">
            <div class="container d-flex justify-content-between">
             @foreach($sidebarItems as $item)
                <div class="sidebar_card d-flex align-items-center">
                    <div class="sidebar_card-img">
                        <img src="{{ $item['img'] }}" alt="">
                    </div>
                    <div class="sidebar_card-body">
                    <p class="m-0">{{ $item['text'] }}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

@endsection

