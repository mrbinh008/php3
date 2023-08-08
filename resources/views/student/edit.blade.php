@extends('layouts.app')
@section('content')
    <form action="#" method="post" class="container" enctype="multipart/form-data">
        <h2 class="text-center">Update student</h2>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="" placeholder="" name="name" value="">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender">
                            <option selected>Open this select menu</option>
                            <option value="0" >Boy</option>
                            <option value="1" >Girl</option>
                        </select>
                    </div>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="" name="phone" value="">
                    </div>
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="" name="address" value="">
                    </div>
                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="inputImage" name="image">
                        <img src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" id="showImage" style="max-width: 300px; height:250px; margin-top: 20px;">
                    </div>
                </div>
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $('#inputImage').change(function (e){
            let url = URL.createObjectURL(e.target.files[0]);
            $('#showImage').attr('src',url);
        })
    </script>
@endsection
