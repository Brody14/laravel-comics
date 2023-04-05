
@extends('layouts.app')

@section('content')

        <div class="container">
           <div class="row g-3">
               
               {{-- @dump($comics) --}}
               @foreach($comics as $comic)
                <div class="col-2">
                    <img class="thumbs" src="{{ $comic['thumb']}}" alt="">

                </div>
                @endforeach
           </div>

        </div>


@endsection

