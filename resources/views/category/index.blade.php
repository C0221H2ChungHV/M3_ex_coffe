@extends('layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-success float-right m-2" href="{{route('categories.create')}}">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key=>$category)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->description}}</td>
                                <td>
                                    <a href="{{route('categories.delete', ['id'=>$category->id])}}"
                                       methods="get"
                                       class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--                <div class="col-md-12">{{$categories->appends(request()->query())}} </div>--}}
            </div>
        </div>
    </div>
    </div>
    @endsection
