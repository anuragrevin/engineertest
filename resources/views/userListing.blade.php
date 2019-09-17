@extends('layouts.master')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Created On</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if($user->photo != '')
                        <img class="img-thumbnail" src="/uploads/{{$user->photo}}" />
                    @endif
                </td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a href="/user/edit/{{$user->id}}" class="btn btn-success">Edit</a>
                    <a href="/user/delete/{{$user->id}}" onClick="return confirmDelete({{$user->id}})" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmDelete(id) {
            var check = confirm("Are you sure you want to delete the user?");
            return check;
        }
    </script>
@endsection