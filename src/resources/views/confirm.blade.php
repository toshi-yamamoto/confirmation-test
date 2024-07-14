<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <div class="container">
        <h1>FashionablyLate</h1>
        <h2>Confirm</h2>
        <form class="form" action="/contacts" method="post">
          @csrf
        <table class="confirmation-table">
            <tr>
                <th>お名前</th>
                <td>
                  <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                  <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                  <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                  <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                  <input type="text" name="tell" value="{{ $contact['tell'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>
                  <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>
                  <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                </td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>商品の交換について</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                  <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                </td>
            </tr>
        </table>
        <div class="buttons">
            <button type="button" onclick="window.history.back();">修正</button>
            <button type="submit">送信</button>
        </div>
        </form>
    </div>
</body>
</html>