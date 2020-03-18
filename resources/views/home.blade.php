@extends('layout')

@section('content')
<section class="jumbotron text-center">
   <div class="container">
     <h1>Baby</h1>
     <p class="lead text-muted">赤ちゃんの写真を共有しよう</p>
   </div>
 </section>
 <div class="text-center">
   <a href="{{ route('post.index') }}" class="btn btn-secondary my-2">投稿一覧へ</a>
 </div>
@endsection
