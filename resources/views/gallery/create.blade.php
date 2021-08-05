@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">gallary Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="images">Upload Image</label>
                            <input type="images" name="images" id="name" class="form-control-file">
                        </div>
                        <button type="submit">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection