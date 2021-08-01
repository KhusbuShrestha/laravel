@extends('app')
@section('content')
<div class="container">
    <a href="/teacher/create" class="btn btn-primary">Add Teacher</a>
    <table class="table" id="tabledata">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Faculty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $index => $teacher)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->mobile }}</td>
                    <td>{{ $teacher->faculty->name}}</td>
                    
                    <td>
                        <form action="/teacher/{{ $teacher->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="" class="badge bg-primary text-decoration-none">Edit</a>
                        <button type="submit" class="btn badge bg-danger text-decoration-none">Delete</button>
                        </form>
                    </td>
                </tr>
             @endforeach
        </tbody>

    </table>
</div>
    
@endsection