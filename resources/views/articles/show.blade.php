@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            
            <div class="breadcrumb">
                
                <a href="{{ route('index') }}">← back to overview</a>

            </div>

            <!-- Display Validation Errors -->
            <!-- resources/views/common/errors.blade.php -->

            
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        Article: {{ $article->title }}

                        @if ($article->user_id == Auth::id())
                            <a href="{{ route('delete_article', ['article' => $article->id]) }}" class="btn btn-danger btn-xs pull-right">
                                <i class="fa fa-btn fa-trash" title="delete"></i> delete article
                            </a>
                        @endif
                    </div>




                    <div class="panel-content">
                        <div class="vote">

                            @if (Auth::guest())
                                <div class="form-inline upvote">
                                    <i class="fa fa-btn fa-caret-up disabled upvote" title="you need to be logged in to upvote"></i>
                                </div>
                                <div class="form-inline upvote">
                                    <i class="fa fa-btn fa-caret-down disabled downvote" title="you need to be logged in to downvote"></i>
                                </div>
                            @else                                     
                                <form action="{{ route('upvote_article', ['article' => $article->id]) }}" method="POST" class="form-inline upvote">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}

                                    <button>
                                        <i class="fa fa-btn fa-caret-up" title="upvote"></i>
                                    </button>
                                </form>

                                <form action="{{ route('upvote_article', ['article' => $article->id]) }}" method="POST" class="form-inline downvote">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}

                                    <button>
                                        <i class="fa fa-btn fa-caret-down" title="downvote"></i>
                                    </button>
                                </form>
                            @endif

                        </div>


                           
                        <div class="url">
                            <a href="{{ url($article->url) }}" class="urlTitle">{{ $article->title }}</a>
                                 @if ($article->user_id == Auth::id())
                                    <a href="{{ route('edit_article', ['article' => $article->id]) }}" class="btn btn-primary btn-xs edit-btn">edit</a>
                                @endif
                        </div> 
                        
                        
                        <div class="info">
                            {{ $article->points }} points | posted by {{ $article->user->name }} | <a href="{{ route('show_article', ['article' => $article->id]) }}">{{ $article->comments->count() }} comments</a>
                        </div>









                        <div class="comments">
                            @if ($article->comments->count() > 0)
                                <ul>
                                    @foreach ($article->comments->reverse() as $comment)
                                        <li>
                                            <div class="comment-body">
                                                {{ $comment->body }}
                                            </div>

                                            <div class="comment-info">
                                                Posted by {{ $comment->user->name }} on {{ $comment->created_at }}
                                                    @if ($comment->user_id == Auth::id())
                                                        <a class="btn btn-primary btn-xs edit-btn" href="{{ route('edit_comment', ['comment' => $comment->id]) }}">edit</a>
                                                        <a class="btn btn-danger btn-xs edit-btn" href="{{ route('delete_comment', ['comment' => $comment->id]) }}">
                                                            <i class="fa fa-btn fa-trash" title="delete"></i>delete
                                                        </a>
                                                    @endif
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <div>
                                    <p>No comments yet</p>
                                </div>
                            @endif

                        </div>

                            
                        @if (Auth::guest())
                            <div>
                                <p>You need to be <a href="{{ url('/login') }}">logged in</a> to comment</p>
                            </div>
                        @else
                            <!-- New Task Form -->
                            <form action="{{ route('store_comment', ['article' => $article->id]) }}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}

                                <!-- Comment data -->
                                <div class="form-group">
                                    <label for="body" class="col-sm-3 control-label">Comment</label>

                                    <div class="col-sm-6">
                                        <textarea type="text" name="body" id="body" class="form-control">
                                            {{ old('body') }}
                                        </textarea>
                                    </div>
                                </div>

                                <!-- Add comment -->
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-plus"></i> Add comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
