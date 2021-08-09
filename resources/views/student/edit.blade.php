@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/students" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i>Back</a>
                    </div>

                    <div class="card-body">
                        <div my-2>
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <form action="/student/{{ $student->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div my-2>
                                <img src="{{ asset($student->photo) }}" alt="" width="120">
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input id="photo" class="form-control-file" type="file" name="photo">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input id="mobile" class="form-control" type="number" name="mobile" value="{{ $student->mobile }}">
                            </div>
                            @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input id="address" class="form-control" type="text" name="address" value="{{ $student->address }}">
                            </div>
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                            {{--  --}}

                            <div class="form-group">
                                <label for="faculty_id">Faculty</label>
                                <select id="faculty_id" class="form-control" name="faculty_id">
                                    @foreach ($faculties as $faculty)
                                        <option value="{{ $faculty->id }}" {{ $student->faculty_id == $faculty->id ? 'selected' : '' }}>{{ $faculty->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm my-2"><i class="fas fa-sync-alt"></i>Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
{{-- @extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-me-2">

            </div>
            <div class="card">
                <div class="card-header">
                    <a href="/students" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="/students/{{ $student->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">FullName</label>
                            <input id="my-input" class="form-control" type="text" name="name" value="{{ $student->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Moblie</label>
                            <input id="my-input" class="form-control" type="text" name="mobile" value="{{ $student->mobile }}">
                        </div>
                        <div class="form-group">
                            <label for="">Address</Address></label>
                            <input id="my-input" class="form-control" type="text" name="address" value="{{ $student->address }}">
                        </div>

                        <div class="form-group">
                            <label for="faculty_id">Faculty_id</label>
                            <select name="faculty_id" class="form-control" id="faculty_id">
                                @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}" {{ $student->faculty_id == $faculty->id ? 'selected' : '' }}>{{ $faculty->name }}</option>
                                    
                                @endforeach
                            </select>
        
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection --}}
