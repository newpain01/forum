@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                    @foreach ($threads as $thread)
                    <article>
                        <a href="{{ $thread->path() }}">
                            <h4>{{ $thread->title }}</h4>
                        </a>
                        <a href="#">{{ $thread->creator->name }}</a> posted {{ $thread->created_at->diffForHumans() }}

                        <div>
                            {{$thread->replies->count()}} Replies
                        </div>
                        <div class="body">{{ str_limit($thread->body, 200) }}</div>
                    </article>

                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
