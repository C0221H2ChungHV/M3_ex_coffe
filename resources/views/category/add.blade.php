@extends('layout')
@section('content')
    <div class="content-wrapper">
        <div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" id="form-add" action="{{route('categories.store')}}">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control" name="category_name" placeholder="Nhập tên danh mục" >
                            </div>
                            <div class="form-group">
                                <label>Mô tả danh mục</label>
                                <input type="text" class="form-control" name="description" placeholder="Nhập mô tả danh mục" >
                            </div>
                            <button type="submit"  class="btn btn-success">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
