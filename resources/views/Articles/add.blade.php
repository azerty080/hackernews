@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add article</div>

                <div class="panel-body">


                    <!--

                    ALS ER EEN ERROR IS

                    <div class="alert alert-danger">
                        <strong>Whoops! Something went wrong!</strong>

                        <br><br>

                        <ul>
                            <li>The title field is required.</li>
                            <li>The url field is required.</li>
                        </ul>
                    </div>

                    <div class="breadcrumb">
                        <a href="/">← back to overview</a>
                    </div>
                    -->




                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Title (max. 255 characters)</label>

                            <div class="col-sm-6">
                                <input id="title" type="text" class="form-control" name="title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="url" class="col-sm-3 control-label">URL</label>

                            <div class="col-sm-6">
                                <input id="url" type="text" class="form-control" name="url">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    Add Article
                                </button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
