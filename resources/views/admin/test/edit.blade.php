@extends('layouts.admin')
@section('title', 'テスト結果の編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>テスト結果の編集</h2>
            <form action="{{ action('Admin\EcctestController@update') }}" method="post" enctype="multipart/formdata">
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="test">テスト種別</label>
                    <div class="col-md-10">
                        <input type="radio" name="test_sbt" value="月１テスト" @if($test_form->test == "月１テスト") checked @endif>&nbsp;月１テスト&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="test_sbt" value="実力テスト" @if($test_form->test == "実力テスト") checked @endif>&nbsp;実力テスト&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="test_date">実施日</label>
                    <div class="col-md-10">
                        <input type="date" name="test_date" value="{{ $test_form->test_date }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="cal-md-2" for="score">点数</label>
                    <div class="col-md-10">
                        <input type="number" name="score" value="{{ $test_form->score }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10"> 
                        <input type="hidden" name="profile_id" value="{{ $test_form->profile_id }}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection