@extends('layouts.AdminLayout')
@section('content')
    @if ($messSuccess = Session::get('msg'))
        <div class="alert alert-success show" role="alert">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong style="text-align: center;">{{ $messSuccess }}</strong>
        </div>
    @endif <br>
    <h3 style="color:rgb(207, 28, 28); border-bottom:1px solid #000;">Create Category</h3> <br>
    <form action="{{ URL::to('category/luu-dao-tao') }} " method="post">
        <input type="text" placeholder="Enter Trainability Name" class="form-control" name="trainability">
        <button type="submit" class="btn btn-primary">Add Category</button>
        @csrf
    </form>
    {{-- end! --}}
    <a href=" " class="btn btn-warning">Back</a>
@endsection
