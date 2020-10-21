@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>部材発注一覧</h3>
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
                        <th>発注日</th>
                        <th>発注個数</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchases as $purchase)
                        <tr>
                            <td>{{ $purchase->item->item_name }}</td>
                            <td>{{ $purchase->created_at }}</td>
                            <td>{{ $purchase->num }}</td>
                            <td><a href="{{route('receipt.create', ['id' => $purchase->item->id])}}">入庫入力へ</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection