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
                        <input type="radio" name="test" value="monthly" @if($test_form->test == "monthly") checked @endif>&nbsp;月１テスト&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="test" value="yearly" @if($test_form->test == "yearly") checked @endif>&nbsp;実力テスト&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="testday">実施日</label>
                    <div class="col-md-10">
                        <input type="date" name="testday" value="{{ $test_form->testday }}">
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
                        <input type="hidden" name="id" value="{{ $test_form->id }}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection