@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr id="">
            <th scope="row">2</th>
            <td>nm</td>
            <td>mml</td>
            <td>nkjk</td>
            <td>aaa</td>
            <td><img src="image.jpg" height="100" width="100"></td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger btn-delete" data-id="1">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
@section('script')
    <script>
        $('#inputImage').change(function (e){
            let url = URL.createObjectURL(e.target.files[0]);
            $('#showImage').attr('src',url);
        })
    </script>
@endsection
