@extends('layout')

@section('content')

  @if($post !== '')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-offset-3 col-md-8">
          <div class="card">
            <img src="{{ asset('storage/image'.$post->image) }}" class="card-img-top" alt="投稿画像">
            <div class="card-body">
              <h2 class="card-title">{{ $post->title }}</h2>
              <h4 class="card-text">{{ $post->content }}</h4>
              <div class="text-right">
                <p class="card-text">{{ $post->created_at }}</p>
                </form>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="text-center">
              <h5 class="card-title">コメント</h5>
            </div>
            @foreach($post->comments as $comment)
            <div class="card">
              <div class="card-body">
                <p class="card-text">{{ $comment->comment }}</p>
                <p class="card-text">
                  投稿者:
                  <a href="{{ route('users.show', $comment->user->id) }}">
                    {{ $comment->user->name }}
                  </a>
                </p>
              </div>
            </div>
            @endforeach
            <div class="text-center">
              <a href="{{ route('comments.create', ['post_id' => $post->id]) }}" class="btn btn-primary">コメントする</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif

@endsection('content')
