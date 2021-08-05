@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            
            <div class="card">
                <div class="card-header">
                    <a href="/students" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                {{-- SUCCESS MESSAGE --}}
                <div my-2>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
        
                        </div>
                    @endif
        
                </div>
                <div class="card-body">
                    <form action="/students" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input id="photo" class="form-control-file" type="file" name="photo">
                        </div>
                        @error('photo')
                            <span class="text-danger">Please upload a photo!!</span>
                    
                         @enderror
                        <div class="form-group">
                            <label for="">FullName</label>
                            <input id="my-input" class="form-control" type="text" name="name">
                        </div>
                        @error('name')
                            <span class="text-danger">Please add your full name!!</span>
                    
                         @enderror
                        <div class="form-group">
                            <label for="">Moblie</label>
                            <input id="my-input" class="form-control" type="text" name="mobile">
                        </div>
                        @error('name')
                            <span class="text-danger">Please add your number!!</span>
                    
                         @enderror
                        <div class="form-group">
                            <label for="">Address</Address></label>
                            <input id="my-input" class="form-control" type="text" name="address">
                        </div>
                        @error('name')
                            <span class="text-danger">Please add your number!!</span>
                    
                         @enderror

                        <div class="form-group">
                            <label for="faculty_id">Faculty_id</label>
                            <select name="faculty_id" class="form-control" id="faculty_id">
                                @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                    
                                @endforeach
                            </select>
        
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">Save <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
