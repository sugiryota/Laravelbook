@extends('layouts.app')
@section('content')
  <div class="card-body">
    
    

    @include('common.errors')

    <form  enctype="multipart/form-data" action="{{ url('books') }}" method="POST"
    class="form-horizontal">
      @csrf

      <div class="form-group">
        <div class="card-title">
          本のタイトル
        </div>
        <div class="col-sm-6">
          <input type="text" name="item_name" class="form-control">
        </div>
        <div class="card-title">
          画像
        </div>
        <div class="col-sm-6">
          <input type="file" name="item_img" class="form">
        </div>
        <div class="card-title">
          冊数
        </div>
        <div class="col-sm-6">
          <input type="integer" name="item_number" class="form-control">
        </div>
        <div class="card-title">
          金額
        </div>
        <div class="col-sm-6">
          <input type="price" name="item_amount" class="form-control">
        </div>
        <div class="card-title">
          本公開日(年月日時分秒か年月日)
        </div>
        <div class="col-sm-6">
          <input type="day" name="published" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-list">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>

    </form>
  </div>
  

  @if (count($books) > 0)
    <div class="card-body">
      <div class="card-body">
        @if (session('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @endif  
        <table class="table table-striped task-table">
          <thead>
            <th>本一覧　　{{ '全部で'.count($books).'タイトルあります。' }}</th>
            <th>&nbsp;</th>
          </thead>
          <tbody>
            @foreach($books as $book)
            <tr>
              <td class="table-text">
                <div>{{ $book->item_name }}</div>
                <div><img src= "/upload/{{ $book->item_img }}" width="100"> </div>
              </td>
              <td>
                <form action="{{ url('book/'.$book->id) }}" method="post">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger">
                    削除
                  </button>
                </form>
              </td>
              <td>
                <form action="{{ url('booksedit/'.$book->id) }}" method="POST">
                  @csrf

                  <button type="submit" class="btn btn-primary">
                    更新
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>     
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 offset-md-4">
        {{ $books->links('pagination::bootstrap-4') }}
      </div>
    </div>
  @else 
  <div class="card-body">
    <div class="card-body">
      <table class="table table-striped task-table">
        <thead>
          <th>本一覧　　{{ '全部で'.count($books).'タイトルあります。' }}</th>
          <th>&nbsp;</th>
        </thead>
        <tbody>
          <tr>
            <td class="table-text">
              <div>本が全くありません<div>
            </td>
          </tr>
        </tbody>     
      </table>
    </div>
  </div>
  
    
  @endif  
  


@endsection