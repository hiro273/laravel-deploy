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

                    editです
                    <form action="{{ route('contact.update',['id' => $contact->id]) }}" method="POST">
                        @csrf
                        氏名
                        <input type="text" name="your_name" value="{{ $contact->your_name }}">
                        <br>
                        件名
                        <input type="text" name="title" value="{{ $contact->title }}">
                        <br>
                        メールアドレス
                        <input type="email" name="email" value="{{ $contact->email }}">
                        <br>
                        ホームページ
                        <input type="url" name="url" value="{{ $contact->url }}">
                        <br>
                        性別
                        <input type="radio" name="gender" value="0" @if ($contact->gender === 0) checked @endif>男性</input>
                        <input type="radio" name="gender" value="1" @if ($contact->gender === 1) checked @endif>女性</input>
                        <br>
                        <select name="age">
                            <option value="">選択してください</option>
                            <option value="1" @if ($contact->age === 1) selected @endif>〜19</option>
                            <option value="2" @if ($contact->age === 2) selected @endif>20〜29</option>
                            <option value="3" @if ($contact->age === 3) selected @endif>30〜39</option>
                            <option value="4" @if ($contact->age === 4) selected @endif>40〜49</option>
                            <option value="5" @if ($contact->age === 5) selected @endif>50〜59</option>
                            <option value="6" @if ($contact->age === 6) selected @endif>60歳〜</option>
                        </select>
                        <br>
                        お問いあわせ内容
                        <br>
                        <textarea name="contact" cols="30" rows="10">{{ $contact->contact }}</textarea>
                        <input type="submit" class="btn btn-info" value="更新する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
