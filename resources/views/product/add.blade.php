@extends('layout')
@section('content')
    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Giá sản phẩm</label>
            <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Nhập giá sản phẩm">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Chọn ảnh</label>
            <input type="file" class="form-control" id="exampleCheck1" name="image">
        </div>
        <div class="form-group">
            <label>Chọn danh mục </label>
            <select class="form-control select2_init" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

