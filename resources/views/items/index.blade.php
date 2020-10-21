@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>部材一覧画面</h3>
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
                        <th>発注数</th>
                        <th>入庫数</th>
                        <th>割当数</th>
                        <th>割当残数</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td><h3>{{$item->item_name}}</h3></td>
                            <td>
                                <?php $total_num = 0 ?>
                                @foreach($item->purchases as $purchase)
                                    <?php @$total_num = $total_num + $purchase->num ?>
                                @endforeach
                                {{ $total_num }}
                            </td>
                            <td>
                                <?php $total_num2 = 0 ?>
                                @foreach($item->receipts as $receipt)
                                    <?php @$total_num2 = $total_num2 + $receipt->num ?>
                                @endforeach
                                {{ $total_num2 }}
                            </td>
                            <td>
                                <?php $total_num3 = 0 ?>
                                @foreach($item->allocates as $allocate)
                                    <?php @$total_num3 = $total_num3 + $allocate->num ?>
                                @endforeach
                                {{ $total_num3 }}
                            </td>
                            <td>
                                <?php $total_num4 = $total_num2 - $total_num3 ?>
                                {{ $total_num4 }}
                            </td>
                            <td><a href="{{ route('purchase.create', ['id' => $item->id]) }}">発注へ</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection