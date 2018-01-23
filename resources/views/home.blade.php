@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Article Overview</div>

                <div class="panel-content">
                    <ul class="article-overview">
                        @foreach ($articles as $article)
                            <li>
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
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
