@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="breadcrumb">
                <a href="{{ route('index') }}">← back to overview</a>
            </div>

            @include('errors.errors')
            @include('delete_confirm')
            @include('success')

            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    Edit comment
                    <a href="{{ route('delete_comment', ['comment' => $comment->id]) }}" class="btn btn-danger btn-xs pull-right">
                        <i class="fa fa-btn fa-trash" title="delete"></i> delete comment
                    </a>
                </div>
                
                <div class="panel-content">
                    <!-- New Task Form -->
                    <form action="{{ route('update_comment', ['comment' => $comment->id]) }}" method="POST" class="form-horizontal">
                    	{{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <!-- Comment data -->
                        <div class="form-group">
                            <label for="comment-title" class="col-sm-3 control-label">Comment</label>

                            <div class="col-sm-6">
                                <textarea class="form-control" id="body" name="body">{{ $comment->body }}</textarea>
                            </div>
                        </div>

                        <!-- Add Comment Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-pencil-square-o"></i> Edit Comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
