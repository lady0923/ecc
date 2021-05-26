@extends('layouts.admin')

@section('title', 'テスト結果入力')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8" mx-auto>
            <h2>テスト結果入力</h2>
            <form action="{{ action('Admin\EcctestController@create') }}" method="post" enctype="multipart/form-data">
                
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">テスト種別</label>
                    <div class="col-md-10">
                        <input type="radio" name="test" value="monthly">&nbsp;月１テスト&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="test" value="yearly">&nbsp;実力テスト&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">実施日</label>
                    <div class="col-md-10">
                        <input type="date" name="testday" value="{{ old('testday') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">点数</label>
                    <div class="col-md-10">
                        <input type="number" name="score" value="{{ old('score') }}">
                    </div>
                </div>
                {{csrf_field() }}
                <input type="submit" class="btn btn-primary" value="登録"> 
            </form>
        </div>
    </div>
</div>
@endsection