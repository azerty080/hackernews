@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-10 col-md-offset-1">

                <div class="breadcrumb">
                    <a href="{{ route('index') }}">← back to overview</a>
                </div>


                @include('errors.errors')



                <div class="panel panel-default">
                    <div class="panel-heading">Add article</div>
                    <div class="panel-content">
                        <form class="form-horizontal" method="POST" action="{{ route('store_article') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label">Title (max. 255 characters)</label>

                                <div class="col-sm-6">
                                    <input class="form-control" id="title" name="title" type="text" maxlength="255" value="{{ old('title') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url" class="col-sm-3 control-label">URL</label>

                                <div class="col-sm-6">
                                    <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-primary">
                                        Add Article
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
