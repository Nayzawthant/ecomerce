@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add HeroSlide</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-slide') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12 mt-3">
                        <a href="{{ url('slides') }}" class="btn btn-danger back">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection