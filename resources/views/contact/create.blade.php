@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    createです
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        氏名
                        <input type="text" name="your_name">
                        <br>
                        件名
                        <input type="text" name="title">
                        <br>
                        メールアドレス
                        <input type="email" name="email">
                        <br>
                        ホームページ
                        <input type="url" name="url">
                        <br>
                        性別
                        <input type="radio" name="gender" value="0">男性</input>
                        <input type="radio" name="gender" value="1">女性</input>
                        <br>
                        <select name="age">
                            <option value="">選択してください</option>
                            <option value="1">〜19</option>
                            <option value="2">20〜29</option>
                            <option value="3">30〜39</option>
                            <option value="4">40〜49</option>
                            <option value="5">50〜59</option>
                            <option value="6">60歳〜</option>
                        </select>
                        <br>
                        お問い合わせ内容
                        <br>
                        <textarea name="contact" cols="30" rows="10"></textarea>
                        <input type="checkbox" name="caution" value="1">注意事項に同意する
                        </input>
                        <br>
                        <input type="submit" class="btn btn-info" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
