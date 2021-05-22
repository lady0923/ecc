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
                    <label class="col-md-2">苗字</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">名前</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-2">
                        <select name="gender" value="{{ old('gender') }}">
                            <option value="選択肢1">男</option>
                            <option value="選択肢2">女</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">生年月日</label>
                    <div class="col-md-2"><nobr>
                        <select name="year" value="{{ old('year') }}">
                            <option value="選択肢1">2005</option>
                            <option value="選択肢2">2006</option>
                            <option value="選択肢3">2007</option>
                            <option value="選択肢4">2008</option>
                            <option value="選択肢5">2009</option>
                            <option value="選択肢6">2010</option>
                            <option value="選択肢7">2011</option>
                            <option value="選択肢8">2012</option>
                            <option value="選択肢9">2013</option>
                            <option value="選択肢10">2014</option>
                            <option value="選択肢11">2015</option>
                            <option value="選択肢12">2016</option>
                            <option value="選択肢13">2017</option>
                            <option value="選択肢14">2018</option>
                            <option value="選択肢15">2019</option>
                            <option value="選択肢16">2020</option>
                            <option value="選択肢17">2021</option>
                            <option value="選択肢18">2022</option>
                            <option value="選択肢19">2023</option>
                            <option value="選択肢20">2024</option>
                            <option value="選択肢21">2025</option>
                            <option value="選択肢22">2026</option>
                            <option value="選択肢23">2027</option>
                            <option value="選択肢24">2028</option>
                            <option value="選択肢25">2029</option>
                            <option value="選択肢26">2030</option>
                        </select>
                        年
                        <select name="month" value="{{ old('month') }}">
                            <option value="選択肢1">1</option>
                            <option value="選択肢2">2</option>
                            <option value="選択肢3">3</option>
                            <option value="選択肢4">4</option>
                            <option value="選択肢5">5</option>
                            <option value="選択肢6">6</option>
                            <option value="選択肢7">7</option>
                            <option value="選択肢8">8</option>
                            <option value="選択肢9">9</option>
                            <option value="選択肢10">10</option>
                            <option value="選択肢11">11</option>
                            <option value="選択肢12">12</option>
                        </select>
                        月
                        <select name="day" value="{{ old('day') }}">
                            <option value="選択肢1">1</option>
                            <option value="選択肢2">2</option>
                            <option value="選択肢3">3</option>
                            <option value="選択肢4">4</option>
                            <option value="選択肢5">5</option>
                            <option value="選択肢6">6</option>
                            <option value="選択肢7">7</option>
                            <option value="選択肢8">8</option>
                            <option value="選択肢9">9</option>
                            <option value="選択肢10">10</option>
                            <option value="選択肢11">11</option>
                            <option value="選択肢12">12</option>
                            <option value="選択肢13">13</option>
                            <option value="選択肢14">14</option>
                            <option value="選択肢15">15</option>
                            <option value="選択肢16">16</option>
                            <option value="選択肢17">17</option>
                            <option value="選択肢18">18</option>
                            <option value="選択肢19">19</option>
                            <option value="選択肢20">20</option>
                            <option value="選択肢21">21</option>
                            <option value="選択肢22">22</option>
                            <option value="選択肢23">23</option>
                            <option value="選択肢24">24</option>
                            <option value="選択肢25">25</option>
                            <option value="選択肢26">26</option>
                            <option value="選択肢27">27</option>
                            <option value="選択肢28">28</option>
                            <option value="選択肢29">29</option>
                            <option value="選択肢30">30</option>
                            <option value="選択肢31">31</option>
                        </select>
                        日
                    </div></nobr>
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
                            <option value="選択肢1">3歳</option>
                            <option value="選択肢2">4歳</option>
                            <option value="選択肢3">5歳</option>
                            <option value="選択肢4">小1</option>
                            <option value="選択肢5">小2</option>
                            <option value="選択肢6">小3</option>
                            <option value="選択肢7">小4</option>
                            <option value="選択肢8">小5</option>
                            <option value="選択肢9">小6</option>
                            <option value="選択肢10">中1</option>
                            <option value="選択肢11">中2</option>
                            <option value="選択肢12">中3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">曜日</label>
                    <div class="col-md-2">
                        <select name="week" value="{{ old('week') }}">
                            <option value="選択肢1">月</option>
                            <option value="選択肢2">火</option>
                            <option value="選択肢3">水</option>
                            <option value="選択肢4">木</option>
                            <option value="選択肢5">金</option>
                            <option value="選択肢6">土</option>
                            <option value="選択肢7">日</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">時間</label>
                    <div class="col-md-2">
                        <select name="time" value="{{ old('time') }}">
                            <option value="選択肢1">15:00</option>
                            <option value="選択肢2">15:30</option>
                            <option value="選択肢3">16:00</option>
                            <option value="選択肢4">16:30</option>
                            <option value="選択肢5">17:00</option>
                            <option value="選択肢6">17:30</option>
                            <option value="選択肢7">18:00</option>
                            <option value="選択肢8">18:30</option>
                            <option value="選択肢9">19:00</option>
                            <option value="選択肢10">19:30</option>
                            <option value="選択肢11">20:00</option>
                            <option value="選択肢12">20:30</option>
                            <option value="選択肢13">21:00</option>
                        </select>
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
                        <texyarea class="form-control" name="remarks" rows="20">{{ old('remarks') }}</texyarea>
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="登録" >
            </form>
        </div>
    </div>
</div>
@endsection