@extends('app')

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

@endsection
