@extends('welcome')
@section('content')
        <div class="title m-b-md">
            Trang chủ
        </div>
        <div class="links">
            <a href="{!! route('post.list') !!}">Danh sách bài viết</a>
            <a href="{!! route('post.create') !!}">Tạo bài viết mới</a>
        </div>
    @endsection