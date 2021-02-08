@extends('layouts.master')

@section('content')
    @include('partials.errors')

<div class="row">
    <div>
        <form action="{{ route('admin.create')}}" method="post">
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Text input" name="title">

                    <div class="field">
                        <label class="label" for='content'>Content</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" name='content'>
                        </div>

                    </div>
                    {{csrf_field()}}
                    <div class="control">
                        <button type="submit" class="button is-primary">Submit</button>
                    </div>
        </form>
    </div>

</div>

@endsection
