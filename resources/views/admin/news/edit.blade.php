@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update News</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-news/'.$news->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" value="{{ $news->title}}" name="title">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description"  rows="3" class="form-control">{{ $news->description }}</textarea>
                    </div>
                   
                    <div class="col-md-12">
                        @if ($news->image)
                            <img src="{{ asset('assets/uploads/news/'.$news->image) }}" class="cate-image" alt="New image">
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12 mt-3">
                        <a href="{{ url('news') }}" class="btn btn-danger back">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection