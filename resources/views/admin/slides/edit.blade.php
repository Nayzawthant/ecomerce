@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update Slides</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-slide/'.$slides->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" value="{{ $slides->title}}" name="title">
                    </div>

                    
                    <div class="col-md-12">
                        @if ($slides->image)
                            <img src="{{ asset('assets/uploads/slides/'.$slides->image) }}" class="cate-image" alt="Slide image">
                        @endif
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