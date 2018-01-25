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
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    Edit article
                    <a href="{{ route('delete_article', ['article' => $article->id]) }}" class="btn btn-danger btn-xs pull-right">
                        <i class="fa fa-btn fa-trash" title="delete"></i> delete article
                    </a>
                </div>

                <div class="panel-content">
                    <!-- New Task Form -->
                    <form action="{{ route('update_article', ['article' => $article->id]) }}" method="POST" class="form-horizontal">
                    	{{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <!-- Article data -->
                        <div class="form-group">
                            <label for="article-title" class="col-sm-3 control-label">Title (max. 255 characters)</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="article-title" class="form-control" value="{{ $article->title }}">
                            </div>
                        </div>

                        <!-- Article url -->
                        <div class="form-group">
                            <label for="article-url" class="col-sm-3 control-label">URL</label>

                            <div class="col-sm-6">
                                <input type="text" name="url" id="article-url" class="form-control"  value="{{ $article->url }}" maxlength="1000">
                            </div>
                        </div>

                        <!-- Add Article Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-pencil-square-o"></i> Edit Article
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
