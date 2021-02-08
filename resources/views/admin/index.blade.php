@extends('layouts.admin')

@section('content')
<section>
    <div class="row">

        @if(Session::has('info'))
        <div>
            <p>{{ Session::get('info')}}</p>
        </div>
        @endif

        <div>
            <a href="{{ route('admin.create') }}" class='button is-success'>New Post</a>
        </div>

    </div>
    <hr>
    @foreach($posts as $post)
    <div class="row">
        <div>
            <p><strong>{{$post->title}}</strong><br><a href="{{ route('admin.edit', ['id'=> $post->id]) }}">Edit</a></p>
            <p><a href="{{ route('admin.delete', ['id'=> $post->id]) }}">Delete</a></p>
        </div>
    </div>
    @endforeach

</section>


@endsection
