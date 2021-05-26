@extends('layouts.admin')

@section('title', '生徒情報の編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 me-auto">
            <h2>生徒情報の編集</h2>
            <form action="{{ action('Admin\EccController@update') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) >0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="name">名前</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="gender">性別</label>
                    <div class="col-md-2">
                        <select name="gender" value="{{ $profile_form->gender }}">
                            <option value="男">男</option>
                            <option value="女">女</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">生年月日</label>
                    <div class="col-md-2">
                        <input type="date" name="birthday" value="{{ $profile_form->birthday }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">学校名</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="school" value="{{ $profile_form->school }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">郵便番号</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="zipcode" value="{{ $profile_form->zipcode }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">住所</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="address" value="{{ $profile_form->address }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">電話番号</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="tel" value="{{ $profile_form->tel }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">コース</label>
                    <div class="col-md-2">
                        <select name="corse" value="{{ $profile_form->corse }}">
                            <option value="3歳" @if($profile_form->corse == "3歳") selected @endif>3歳</option>
                            <option value="4歳" @if($profile_form->corse == "4歳") selected @endif>4歳</option>
                            <option value="5歳" @if($profile_form->corse == "5歳") selected @endif>5歳</option>
                            <option value="小1" @if($profile_form->corse == "小1") selected @endif>小1</option>
                            <option value="小2" @if($profile_form->corse == "小2") selected @endif>小2</option>
                            <option value="小3" @if($profile_form->corse == "小3") selected @endif>小3</option>
                            <option value="小4" @if($profile_form->corse == "小4") selected @endif>小4</option>
                            <option value="小5" @if($profile_form->corse == "小5") selected @endif>小5</option>
                            <option value="小6" @if($profile_form->corse == "小6") selected @endif>小6</option>
                            <option value="中1" @if($profile_form->corse == "中1") selected @endif>中1</option>
                            <option value="中2" @if($profile_form->corse == "中1") selected @endif>中2</option>
                            <option value="中3" @if($profile_form->corse == "中1") selected @endif>中3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">曜日</label>
                    <div class="col-md-2">
                        <select name="week" value="{{ $profile_form->week }}">
                            <option value="月" @if($profile_form->week == "月") selected @endif>月</option>
                            <option value="火" @if($profile_form->week == "火") selected @endif>火</option>
                            <option value="水" @if($profile_form->week == "水") selected @endif>水</option>
                            <option value="木" @if($profile_form->week == "木") selected @endif>木</option>
                            <option value="金" @if($profile_form->week == "金") selected @endif>金</option>
                            <option value="土" @if($profile_form->week == "土") selected @endif>土</option>
                            <option value="日" @if($profile_form->week == "日") selected @endif>日</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">時間</label>
                    <div class="col-md-2">
                        <input type="time" name="time" value="hh:mm" min="09:00" max="20:00" step="900">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">色</label>
                    <input type="radio" name="color" value="red" @if($profile_form->color == "red") checked @endif>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="yellow" @if($profile_form->color == "yellow") checked @endif>&nbsp;黄&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="pink" @if($profile_form->color == "pink") checked @endif>&nbsp;ピンク&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="green" @if($profile_form->color == "green") checked @endif>&nbsp;緑&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="purple" @if($profile_form->color == "purple") checked @endif>&nbsp;紫&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="orange" @if($profile_form->color == "orange") checked @endif>&nbsp;オレンジ&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="color" value="blue" @if($profile_form->color == "blue") checked @endif>&nbsp;青&nbsp;&nbsp;&nbsp;
                    
                </div>
                <div class="form-group row">
                    <label class="col-md-2">備考</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="remarks" rows="20">{{ $profile_form->remarks }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <input type="hidden" name="id" value="{{ $profile_form->id }}">
                        {{csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection