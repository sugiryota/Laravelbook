@extends('layouts.app')
@section('content')
  <div class="card-body">
    <div class="card-title">
      本のタイトル
    </div>

    @include('common.errors')

    <form action="{{ url('books') }}" method="POST"
    class="form-horizontal">
      @csrf

      <div class="form-group">
        <div class="col-sm-6">
          <input type="text" name="item_name" class="form-control">
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
        <table class="table table-striped task-table">
          <thead>
            <th>本一覧　　{{ '全部で'.count($books).'冊あります。' }}</th>
            <th>&nbsp;</th>
          </thead>
          <tbody>
            @foreach($books as $book)
            <tr>
              <td class="table-text">
                <div>{{ $book->item_name }}</div>
              </td>
            </tr>
            @endforeach
          </tbody>     
        </table>
      </div>
    </div>
  @else 
  <div class="card-body">
    <div class="card-body">
      <table class="table table-striped task-table">
        <thead>
          <th>本一覧　　{{ '全部で'.count($books).'冊あります。' }}</th>
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