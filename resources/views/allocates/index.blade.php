@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>部材割当履歴一覧</h3>
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
                        <th>割当先名</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allocates as $allocate)
                        <tr>
                            <td>{{ $allocate->item->item_name }}</td>
                            <td>{{ $allocate->created_at }}</td>
                            <td>{{ $allocate->num }}</td>
                            <td>{{ $allocate->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection