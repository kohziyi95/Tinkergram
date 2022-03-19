@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <h2 class="text-capitalize">{{ $user->name }}</h2>
            <p class="mt-2"> {{$post->caption}}</p>
            <p class="mt-5"> Posted on {{ $post->created_at }}</p>
        </div>
    </div>
</div>
@endsection


