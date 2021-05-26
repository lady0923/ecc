@extends('layouts.admin')
@section('title', '生徒一覧')

@section('content')
<div class="container">
    <div class="row">
        <h2>生徒一覧</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ action('Admin\EccController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <div class="col-md-8">
            <form action="{{ action('Admin\EccController@index') }}" method="get">
                <div class="form-group row">
                    <label class="col-md-2">名前</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                    </div>
                    <div class="col-me-2">
                        {{csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="list-profile col-md-12 mx-auto">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="10%">名前</th>
                            <th width="5%">年齢</th>
                            <th width="5%">性別</th>
                            <th width="10%">学校名</th>
                            <th width="10%">郵便番号</th>
                            <th width="15%">住所</th>
                            <th width="10%">電話番号</th>
                            <th width="5%">コース</th>
                            <th width="5%">曜日</th>
                            <th width="5%">時間</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $profile)
                        <tr>
                            <th>{{ $profile->id }}</th>
                            <td>{{ \Str::limit($profile->name, 100) }}</td>
                            <td>{{ \Str::limit($profile->birthday, 100) }}</td>
                            <td>{{ \Str::limit($profile->gender, 100) }}</td>
                            <td>{{ \Str::limit($profile->school, 100) }}</td>
                            <td>{{ \Str::limit($profile->zipcode, 100) }}</td>
                            <td>{{ \Str::limit($profile->address, 100) }}</td>
                            <td>{{ \Str::limit($profile->tel, 100) }}</td>
                            <td>{{ \Str::limit($profile->corse, 100) }}</td>
                            <td>{{ \Str::limit($profile->week, 100) }}</td>
                            <td>{{ \Str::limit($profile->time, 100) }}</td>
                            <td>
                                <div>
                                    <a href="{{ action('Admin\EccController@edit', ['id' => $profile->id]) }}">編集</a>
                                </div>
                                <div>
                                    <a href="{{ action('Admin\EccController@delete', ['id' => $profile->id]) }}">削除</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection