@extends('layout')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-offset-3 col-md-6">
          <div class="card">
            <div class="card-header">
              コメント
            </div>
            <div class="card-body">
              @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $message)
                    <p>{{ $message }}</p>
                  @endforeach
                </div>
              @endif
              <form action="{{ route('comments.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">コメント</label>
                  <textarea class="form-control" id="content" rows="5" name="comment"></textarea>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="post_id" value="{{ $post_id }}">

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">コメントする</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
