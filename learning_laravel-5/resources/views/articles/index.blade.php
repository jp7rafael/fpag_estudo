@extends('app')


@section('content')
  <div class="panel-heading">Articles</div>

  <div class="panel-body">
  <a  href="{{ action('ArticlesController@create') }}" >New article</a>
    @foreach ($articles as $article)
      <article> 
        <h2>
          <a href="{{ action('ArticlesController@show', [$article->id]) }}" > {{ $article->title }} </a>
        </h2>
        <p>{{ $article->body }} </p>
      </article>
    @endforeach
  </div>
@endsection