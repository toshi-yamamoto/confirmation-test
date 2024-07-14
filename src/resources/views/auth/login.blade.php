<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <h1 class="header-title">FashionablyLate</h1>
            <a href="{{ route('register') }}" class="header-link">register</a>
        </div>
    </header>
    <main class="main">
        <section class="login-section">
            <h2 class="section-title">Login</h2>
            <form action="/login" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="test@example.com" required>
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="coachtech1106" required>
                </div>
                <a href="/admin"><button type="submit" class="btn">ログイン</button></a>
            </form>
        </section>
    </main>
</body>
</html>