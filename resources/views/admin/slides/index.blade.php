@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="product-title">HeroSlides Page</div>
            
            <div class="product-search-header">
                <div class="product-searchbox">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-default btn-round btn-just-icon">
                      <i class="material-icons">search</i>
                      <div class="ripple-container"></div>
                    </button>
                </div>
                <a href="{{ url('add-slides') }}" class="add-product btn btn-primary btn-sm">Add HeroSlide</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/slides/'.$item->image) }}" class="cate-image" alt="Image here">
                            </td>
                            <td class="action">
                                <a href="{{ url('edit-slide/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{url('delete-slide/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection