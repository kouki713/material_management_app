@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>部材入庫履歴一覧</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>部材名</th>
                        <th>入庫日</th>
                        <th>入庫個数</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($receipts as $receipt)
                        <tr>
                            <td>{{ $receipt->item->item_name }}</td>
                            <td>{{ $receipt->created_at }}</td>
                            <td>{{ $receipt->num }}</td>
                            <td><a href="{{route('allocate.create', ['id' => $receipt->item->id])}}">割当入力へ</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
