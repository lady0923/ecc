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
                    <div class="col-md-2"><nobr>
                        <select name="year" value="{{ old('year') }}">
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                        年
                        <select name="month" value="{{ old('month') }}">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        月
                        <select name="day" value="{{ old('day') }}">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
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
                        <select name="time" value="{{ old('time') }}">
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
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