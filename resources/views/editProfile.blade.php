@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="{{ route('profile.postEdit', ['id' => $profile->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                <p>
                    <label for="description">Description</label>
                    <br>
                    <input type="text" name="description" id="description" value="{{ $profile->description }}">
                </p>
                <p class="mt-3">
                    <label for="profilepic">Profile picture</label>
                    <br>
                    <input type="file" name="profilepic" id="profilepic">
                </p>
                <button class="btn btn-primary mt-3" type="submit">Create Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
