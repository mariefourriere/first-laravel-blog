@extends('layouts.master')

@section('content')

<section>
    <div>
        <p class="quote">{{$post['title']}}</p>
        <p>{{$post['content']}}</p>
    </div>

</section>

@endsection