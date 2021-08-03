@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/students/create" class="btn btn-primary btn-sm">Add Student</a>
                </div>
                <table class="table" id="tabledata" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                          <td>{{ $student->id }}</td>
                          <td>{{ $student->name }}</td>
                          <td>{{ $student->mobile }}</td>
                          <td>{{ $student->address }}</td>
                          <td>{{ $student->faculty->name }}</td>
                          <td>
                            <form action="/students/{{ $student->id }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="/students/{{ $student->id }}/edit" class="badge bg-primary text-decoration-none">Edit</a>
                            <button type="submit" class="btn badge bg-danger text-decoration-none">Delete</button>
                            </form>
                        </tr>
                            
                        @endforeach
                    </tbody>
                    
                    
                  </table>
                    
            </div>
        </div>
    </div>
</div>
@endsection