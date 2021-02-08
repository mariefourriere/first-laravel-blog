@extends('layouts.master')

@section('content')
@include('partials.errors')
<div class="row">
    <div>
        <form action="{{ route('admin.update')}}" method="post">
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input" 
                    type="text" 
                    placeholder="Text input" 
                    name="title"
                    value="{{ $post->title}}">

                    <div class="field">
                        <label class="label" for='content'>Content</label>
                        <div class="control">
                            <input class="input"
                            type="text" 
                            placeholder="Text input"
                            name='content'
                            value= "{{ $post->content}}">
                        </div>

                    </div>
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$postId}}">
                    <div class="control">
                       
                        <button type="submit" class="button is-primary">Submit</button>
                    </div>
        </form>
    </div>

</div>

@endsection
