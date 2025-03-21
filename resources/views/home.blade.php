@extends('Layouts.master')  

@section('content')
<div class="container">
    <h1 class="text-center my-5">LARAVEL MOVIES</h1>

    <!-- Movie Cards -->
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
        @foreach($movies as $movie)
        <div class="col mb-4">
            <x-card :movie="$movie" />
        </div>
        @endforeach
    </div>
    <!-- /Movie Cards -->
</div>
@endsection