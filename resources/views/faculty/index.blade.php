@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/faculty/create" class="btn btn-primary btn-sm">Add Faculty</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                        <th scope="col">#</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faculties as $faculty)
                            <tr>
                                <td>{{ $faculty->id }}</td>
                                <td>{{ $faculty->name }}</td>
                                <td>
                                    <a href="" class="badge bg-primary">Edit</a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                        
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection