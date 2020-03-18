@extends('layout')

@section('content')
<section class="jumbotron text-center">
   <div class="container">
     <h1>Baby</h1>
     <p class="lead text-muted">赤ちゃんの写真を共有しよう</p>
   </div>
 </section>

 <div class="album py-5 bg-light">
   <div class="container">
     <div class="row">
  @if(count($posts) > 0)
      @foreach($posts as $post)
      <div class="col-md-4">
          <div class="card mb-4 shadow-sm" style="width: 18rem;">
            <img src="{{ asset('storage/image'.$post->image) }}" class="card-img-top" alt="投稿画像">
            <div class="card-body">
              <h4><a href="{{ route('post.show',['post' => $post]) }}" class="card-title">{{ $post->title }}</a></h4>
              <p class="card-text">
                投稿者:
                <a href="{{ route('users.show', $post->user_id) }}">
                 {{ $post->user->name }}
                </a>
              </p>
              <p class="card-text">{{ $post->content }}</p>
            </div>
          </div>
        </div>
      @endforeach
  {{ $posts->links() }}
  @else
    <div>投稿記事がありません</div>
  @endif
      </div>
   </div>
</div>

@endsection
