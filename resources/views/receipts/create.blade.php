
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">部材入庫画面</div>
                <div class="card-body">
                    <form method="POST" action="{{route('receipt.store')}}">
                    @csrf
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>{{ $item->item_name }}</th>
                                <td><input type="number" name="num" style="width:80%;" min="1" max="1000"> 個</td>
                                <td>未入庫　{{ $num }} 個</td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="item_id" value="{{ $item->id }}">

                    <input type="submit" class="btn btn-info text-right" value="入庫">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-6">
            <h3>入庫履歴</h3>
        </div>
    </div>
</div>
<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>部材名</th>
                        <th>入庫日</th>
                        <th>入庫個数</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item->receipts as $receipt)
                        <tr>
                            <td>{{ $receipt->item->item_name }}</td>
                            <td>{{ $receipt->created_at }}</td>
                            <td>{{ $receipt->num }} 個</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection