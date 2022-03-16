@extends('layouts.default')

@section('content')
        <a href="{{url('create')}}" class="btn btn-primary">Create New User</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($data as $dataUsers)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $dataUsers->name }}</td>
                    <td>{{ $dataUsers->email }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">tes</a>
                        <a href="#" class="btn btn-success">tes</a>
                        <a href="{{url('/show/' . $dataUsers->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy/' . $dataUsers->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $data->links() !!} 
@endsection