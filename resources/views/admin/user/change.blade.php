@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">ユーザ情報編集</h1>
        <div class="mb-2">
            <form method="POST" action="">
                @csrf
                <div class="row mb-2">
                    <label for="user_id" class="col-md-2">ユーザID</label>
                    <input type="text" id="user_id" name="user_id" class="form-control d-inline col-md-7">
                </div>
                <div class="row mb-2">
                    <label for="username" class="col-md-2">ユーザ名</label>
                    <input type="text" id="username" name="username" class="form-control d-inline col-md-7">
                </div>
                <div class="row mb-2">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-7">
                        <div class="d-inline">
                            <input type="radio" name="sex" id="man" value="man" checked required>
                            <label class="form-check-label" for="man">男</label>
                        </div>
                        <div class="d-inline">
                            <input type="radio" name="sex" id="woman" value="woman" required>
                            <label class="form-check-label" for="woman">女</label>
                        </div>
                        <div class="d-inline">
                            <input type="radio" name="sex" id="other" value="other" required>
                            <label class="form-check-label" for="other">その他</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="address" class="col-md-2">住所</label>
                    <input type="text" id="address" name="address" class="form-control d-inline col-md-7">
                </div>
                <div class="row mb-2">
                    <label for="age" class="col-md-2">年齢</label>
                    <input type="number" id="age" name="age" class="form-control d-inline col-md-7">
                </div>
                <div class="row mb-2">
                    <label for="email" class="col-md-2">メールアドレス</label>
                    <input type="email" id="email" name="email" class="form-control d-inline col-md-7">
                </div>
            </form>
            <div>
                <button class="btn btn-success">ユーザ情報変更</button>
            </div>
        </div>
        <div>
            <a href="{{ url('/admin/user') }}">< 戻る</a>
        </div>
    </div>
@endsection