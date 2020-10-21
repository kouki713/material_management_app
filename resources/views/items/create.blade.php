@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">部材新規登録</div>
                <div class="card-body">
                    <form method="POST" action="{{route('item.store')}}">
                    @csrf
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>部材名</th>
                                <td><input type="text" name="item_name" style="width:100%;"></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-info" value="登録する">
                    </form>
                </div>
            </div>
            <a href="{{route('item.index')}}">部材一覧へ</a>
        </div>
    </div>
</div>
@endsection