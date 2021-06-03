@extends('layouts.admin')

@section('title', 'テスト結果一覧')

@section('content')
<div class="container">
    <div class="row">
        <h2>テスト結果一覧</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
          <a href="{{ action('Admin\EcctestController@add') }}" role="button" class="btn btn-primary">新規登録</a>
        </div>
     </div>
     <br>
     <div class="row">
        <div class="list-tet col-md-12" mx-auto>
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="20%">テスト種別</th>
                            <th width="20%">実施日</th>
                            <th width="20%">点数</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tests as test)
                        {{ $test->profile->profile_id." ".$test->id }}
                        <tr>
                            <th>{{ $test->id }}</th>
                            <td>{{ \Str::limit($test->test_sbt, 100) }}</td>
                            <td>{{ \Str::limit($test->test_date, 100) }}</td>
                            <td>{{ \Str::limit($test->score, 100) }}</td>
                            <td>
                                <div>
                                    <a href="{{ action('Admin\EcctestController@edit', ['id' => $test->id]) }}">編集</a>
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