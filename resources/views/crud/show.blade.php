@extends('layouts.default')

@section('content')
    <div class="row">
        <h2>Edit User</h2>
        <div class="col-lg-8">
            <form action="{{url('/update/'. $data->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                <div class="mb-3">
                    <a href="{{url('/')}}"><<< Go back to Main Page</a>
                </div>
            </form>
        </div>
    </div>
@endsection