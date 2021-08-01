@extends('app')
@section('contenet')
<div class="container">
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="name">FullName</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile">
        </div>
        <div class="form-group">
            <label for="faculty_id">Faculty_id</label>
            <select name="faculty_id" id="faculty_id">
                <option value="">BBS</option>
                <option value="">BIT</option>
                <option value="">BBA</option>
            </select>

        </div>
        <div>
            <button type="submit">Save</button>
        </div>

        </div>
    </form>
</div>
    
@endsection