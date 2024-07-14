<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <header class="header">
        <h2>FashionablyLate</h2>
    </header>

    <div class="container">
        <div class="register-box">
            <h1>FashionablyLate</h1>
            <form method="POST" action="/register/users">
                @csrf
                <div class="form-group">
                    <label for="name">お名前</label>
                    <input type="text" name="name" id="name" placeholder="例：山田　太郎">
                    @error('name')
                        <p style="color: red">{{ $errors->first('name')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" id="email" placeholder="例：test@example.com">
                     @error('name')
                        <p style="color: red">{{ $errors->first('email')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" id="password" placeholder="例：coachtechn106">
                    @error('name')
                        <p style="color: red">{{ $errors->first('password')}}</p>
                    @enderror
                </div>
                <button type="submit">登録</button>
            </form>
            <a href="/login">Login</a>
        </div>
    </div>
</body>
</html>