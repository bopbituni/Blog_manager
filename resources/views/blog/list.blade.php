@extends('welcome')
@section(__('language.title'), __('language.list_post'))
   @section("content")
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($blogs) == 0)
                    <h2 class="text-danger">@lang('language.post_not_exist')</h2>
                    @else
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>@lang('language.title')</th>
                            <th>@lang('language.content')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td><a href="{{route('blogs.edit', $blog->id)}}">Update</a></td>
                            <td><a href="{{route('blogs.delete', $blog->id)}}">Delete</a></td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                    @endif
            </div>
        </div>
    @endsection