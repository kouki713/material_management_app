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
                        <th>未入庫数</th>
                        <th>割当数</th>
                        <th>割当残数</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td><h3>{{$item->item_name}}</h3></td>
                            <td>
                                <!-- 発注数 -->
                                <?php $total_num = 0 ?>
                                @foreach($item->purchases as $purchase)
                                    <?php $total_num = $total_num + $purchase->num ?>
                                @endforeach
                                {{ $total_num }}
                                <p><a href="{{ route('purchase.create', ['id' => $item->id]) }}">発注へ</a></p>
                            </td>
                            <td>
                                <!-- 入庫数 -->
                                <?php $total_num2 = 0 ?>
                                @foreach($item->receipts as $receipt)
                                    <?php $total_num2 = $total_num2 + $receipt->num ?>
                                @endforeach
                                {{ $total_num2 }}
                                <?php $total_num3 = $total_num - $total_num2 ?>
                                @if ($total_num3 != 0 )
                                    <p><a href="{{ route('receipt.create', ['id' => $item->id]) }}">入庫へ</a></p>
                                @endif
                            </td>
                            <td>
                                <!-- 未入庫数 -->
                                {{ $total_num3 }}
                            </td>
                            <td>
                                <!-- 割当数 -->
                                <?php $total_num4 = 0 ?>
                                @foreach($item->allocates as $allocate)
                                    <?php $total_num4 = $total_num4 + $allocate->num ?>
                                @endforeach
                                {{ $total_num4 }}
                                <?php $total_num5 = $total_num2 - $total_num4 ?>
                                @if ($total_num5 != 0 )
                                    <p><a href="{{ route('allocate.create', ['id' => $item->id]) }}">割当へ</a></p>
                                @endif
                            </td>
                            <td>
                                <!-- 割当残数 -->
                                {{ $total_num5 }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection