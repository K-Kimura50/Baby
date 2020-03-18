@extends('layout')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-offset-3 col-md-6">
          <div class="card">
            <div class="card-header">
              投稿フォーム
            </div>
            <div class="card-body">
              @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $message)
                    <p>{{ $message }}</p>
                  @endforeach
                </div>
              @endif
              <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">タイトル</label>
                  <input type="text" class="form-control" name="title" id="title" />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">本文</label>
                  <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
               </div>

                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <button type="submit" class="btn btn-primary">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
