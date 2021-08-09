@extends('layouts.app')
@section('content')
  <div class="card-body">
    
    

    @include('common.errors')

    <form action="{{ url('books/update') }}" method="POST"
    class="form-horizontal">
      @csrf

      <div class="form-group">
        <div class="card-title">
          本のタイトル
        </div>
        <div class="col-sm-6">
          <input type="text" name="item_name" class="form-control" value="{{ $book->item_name }}">
        </div>
        <div class="card-title">
          画像
        </div>
        <div class="col-sm-6">
          <input type="file" name="item_img" class="form" value="{{ $book->item_img }}">
        </div>
        <div class="card-title">
          冊数
        </div>
        <div class="col-sm-6">
          <input type="integer" name="item_number" class="form-control" value="{{ $book->item_number }}">
        </div>
        <div class="card-title">
          金額
        </div>
        <div class="col-sm-6">
          <input type="price" name="item_amount" class="form-control" value="{{ $book->item_amount }}">
        </div>
        <div class="card-title">
          本公開日(年月日時分秒か年月日)
        </div>
        <div class="col-sm-6">
          <input type="day" name="published" class="form-control" value="{{ $book->published }}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-list">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
        <input type="hidden" name="id" value="{{ $book->id }}">
      </div>

    </form>
  </div>
@endsection  