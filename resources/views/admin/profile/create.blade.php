@extends('layouts.admin')

@section('title', '生徒登録')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>生徒登録</h2>
            <form action="{{ action('Admin\EccController@create') }}" method="post" enctype="multipart/form-data">
                
                @if (count($errors) >0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="form-group row">
                    <label class="col-md-2">名前</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-2">
                        <select name="gender" value="{{ old('gender') }}">
                            <option value="男">男</option>
                            <option value="女">女</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">生年月日</label>
                    <div class="col-md-2">
                        <input type="date" name="birthday" value="{{ old('birthday') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">学校名</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="school" value="{{ old('school') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">郵便番号</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">住所</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">電話番号</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">コース</label>
                    <div class="col-md-2">
                        <select name="corse" value="{{ old('corse') }}">
                            <option value="3歳">3歳</option>
                            <option value="4歳">4歳</option>
                            <option value="5歳">5歳</option>
                            <option value="小1">小1</option>
                            <option value="小2">小2</option>
                            <option value="小3">小3</option>
                            <option value="小4">小4</option>
                            <option value="小5">小5</option>
                            <option value="小6">小6</option>
                            <option value="中1">中1</option>
                            <option value="中2">中2</option>
                            <option value="中3">中3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">曜日</label>
                    <div class="col-md-2">
                        <select name="week" value="{{ old('week') }}">
                            <option value="月">月</option>
                            <option value="火">火</option>
                            <option value="水">水</option>
                            <option value="木">木</option>
                            <option value="金">金</option>
                            <option value="土">土</option>
                            <option value="日">日</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">時間</label>
                    <div class="col-md-2">
                        <input type="time" name="time" value="hh:mm" min="09:00" max="20:00" step="900"  value="{{ old('time') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">色</label>
                    <input type="radio" name="color" value="red">&nbsp;赤
                    <div class="box"></div>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="yellow">&nbsp;黄&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="pink">&nbsp;ピンク&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="green">&nbsp;緑&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="purple">&nbsp;紫&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="orange">&nbsp;オレンジ&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="blue">&nbsp;青&nbsp;&nbsp;&nbsp;
                    
                </div>
                <div class="form-group row">
                    <label class="col-md-2">備考</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="remarks" rows="20">{{ old('remarks') }}</textarea>
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="登録" >
            </form>
        </div>
    </div>
</div>
@endsection