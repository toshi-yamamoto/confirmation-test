<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <div class="container">
        <h1>FashionablyLate</h1>
        <h2>Contact</h2>
        <form class="contact-form" action="/confirm" method="post">
          @csrf
            <div class="form-group">
                <label for="last_name">お名前 <span class="required">*</span></label>
                <input type="text" id="last_name" name="last_name" placeholder="例: 山田">
                @error('last_name')
                  <p style="color: red">{{ $errors->first('last_name')}}</p>
                @enderror
                <input type="text" id="first_name" name="first_name" placeholder="例: 太郎">
                @error('first_name')
                  <p style="color: red">{{ $errors->first('first_name')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">性別 <span class="required">※</span></label>
                <div>
                    <input type="radio" id="male" name="gender" value="1" checked>
                    <label for="male">男性</label>
                    <input type="radio" id="female" name="gender" value="2">
                    <label for="female">女性</label>
                    <input type="radio" id="other" name="gender" value="3">
                    <label for="other">その他</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス <span class="required">※</span></label>
                <input type="email" id="email" name="email" placeholder="例: test@example.com">
                @error('email')
                  <p style="color: red">{{ $errors->first('email')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone1">電話番号 <span class="required">※</span></label>
                <div class="phone-group">
                    <input type="text" id="phone1" name="tell" placeholder="080" pattern="\d{3}">
                    <input type="text" id="phone2" name="tell" placeholder="1234" pattern="\d{4}">
                    <input type="text" id="phone3" name="tell" placeholder="5678" pattern="\d{4}">
                     @error('tell')
                      <p style="color: red">{{ $errors->first('tell')}}</p>
                     @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="address">住所 <span class="required">※</span></label>
                <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                @error('address')
                  <p style="color: red">{{ $errors->first('address')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101">
            </div>
            <div class="form-group">
                <label for="category">お問い合わせの種類 <span class="required">※</span></label>
                <select id="category" name="category">
                    <option value="">選択してください</option>
                    @foreach($categories as $category)
                      <option value="{{ $category['id'] }}">{{ $category['content']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="detail">お問い合わせ内容 <span class="required">※</span></label>
                <textarea id="detail" name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                @error('detail')
                  <p style="color: red">{{ $errors->first('detail')}}</p>
                @enderror
            </div>
            <button type="submit">確認画面</button>
            <p id="formMessage" role="alert"></p>
        </form>
    </div>
</body>
</html>