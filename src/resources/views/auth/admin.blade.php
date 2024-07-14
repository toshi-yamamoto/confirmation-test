<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>FashionablyLate Admin</h1>
        <form method="GET" action="/admin/search">
            <input type="text" name="name" placeholder="名前">
            <input type="email" name="email" placeholder="メールアドレス">
            <select name="gender">
                <option value="">性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
            </select>
            <select name="query_type">
                <option value="">お問い合わせ種類</option>
                <option value="exchange">商品の交換について</option>
                <option value="other">その他</option>
            </select>
            <input type="date" name="date" placeholder="日付">
            <button type="submit">検索</button>
            <button type="reset">リセット</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->query_type }}</td>
                        <td><a href="{{ route('admin.details', $user->id) }}">詳細</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</body>
</html>