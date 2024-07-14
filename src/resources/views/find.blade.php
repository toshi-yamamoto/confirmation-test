<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <div class="container">
        <h1>FashionablyLate</h1>
        <h2>Admin</h2>
        <form class="form" action="/find" method="post">
        @csrf
        <div class="search-section">
            <input type="text" name="input" placeholder="名前やメールアドレスを入力してください">
            <select>
                <option value="">性別</option>
            </select>
            <select>
                <option value="">お問い合わせの種類</option>
            </select>
            <select>
                <option value="">年/月/日</option>
            </select>
            <input type="submit" value="検索">
            <button>リセット</button>
        </div>
        </form> 
        <button class="export-button">エクスポート</button>
        
        <table>
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              @foreach($contacts as $contact)
                <tr>
                    <!-- <td>山田 太郎</td>
                    <td>男性</td>
                    <td>test@example.com</td>
                    <td>商品の交換について</td> -->
                    <td>{{ $item->last_name}}</td>
                    <td>{{ $item->gender}}</td>
                    <td>{{ $item->email}}</td>
                    <td>商品の交換について</td>
                    <!-- <td>{{ $contact->detail}}</td> -->
                    <td><button class="detail-button">詳細</button></td>
                </tr>
               @endforeach 
                <!-- Repeat the above <tr> as needed -->
            </tbody>
        </table>
          {{ $contacts->links() }}
    </div>
</body>
</html>