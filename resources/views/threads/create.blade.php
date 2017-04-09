@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>

                <div class="panel-body">
                <form action="/threads" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="body">Message:</label>
                        <textarea type="text" name="body" class="form-control" placeholder="Message" rows="8"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection