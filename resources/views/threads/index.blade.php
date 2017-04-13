@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                    @foreach ($threads as $thread)
                    <article>
                        <div class="level">
                        <h4 class="flex">
                            <a href="{{ $thread->path() }}">
                                {{ $thread->title }}
                            </a>
                        </h4>

                        <a href="{{ $thread->path() }}">
                            {{ $thread->replies_count }} {{ str_plural('Reply', $thread->replies_count) }}
                        </a>
                        </div>

                        <div class="body">{{ str_limit($thread->body, 200) }}</div>
                    </article>

                    <hr>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="http://placehold.it/330x500">
                </div>
            </div>        
        </div>

        <div class="col-md-4 right">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="http://placehold.it/330x500">
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection
