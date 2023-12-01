@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="product-title">Categories Page</div>
            
            <div class="product-search-header">
                <div class="product-searchbox">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-default btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                    </button>
                </div>
                <a href="{{ url('add-category') }}" class="add-product btn btn-primary btn-sm">Add Category</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image" alt="Image here">
                            </td>
                            <td class="action">
                                <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection