@extends('layouts.master')

@section('content')

<div class="row"> 
    <div class="col-offset-md-3 col-md-6">
        <h1>User Add Form</h1>
        <form method="POST" href="{{ isset($user) ? '/user/edit': '/user/add' }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{ isset($user) ? $user->name : '' }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your email" value="{{ isset($user) ? $user->email : '' }}">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="text" name="photo" class="form-control" placeholder="Upload your photo" value="{{ isset( $user) ? $user->photo : '' }}">
            </div>
            <div class="text-center form-group">
                <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Update User' : 'Add User' }}</button>
            </div>
        </form>
    </div>
</div>


@endsection