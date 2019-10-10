@extends('welcome')
@section(__('language.title'), __('language.create_post'))
@section('content')

        <form action="{{route('blogs.store')}}" method="post" class="form-create-post">
            {{csrf_field()}}
            <label for="title">{!! __('language.title') !!}</label> <br/>
            <input class="form-control" id="title" name="title" type="text"/> <br/>
            <label for="content">{!! __('language.content') !!}</label> <br/>
            <textarea class="form-control" id="content" name="content"></textarea><br/>
            <button type="submit" value="Create">{!! __('language.save') !!}</button>
        </form>
@endsection