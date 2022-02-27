<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
.name ul li {
    width: auto;
    float: left;
    margin: 0 3px 0 0;
    padding: 0;
    height: 35px;
    line-height: 35px;
};
    </style>
</head>
<body>
 <div class="container">
    <div class="card">
      <p class="title mb-15">お問い合わせ</p>
      <table>
        <form action="/Advance/confirm" method="POST">
    @csrf
      <dl class="cf">
    <dt class="title">
        @csrf
        <!-- name -->
        <tr>
        <th>名前</th>
        <td>
          <input type="text" name="fullname">
        </td>
      </tr>
        <!-- お名前<span class="need">＊</span> -->
        <!-- <span class="caution">フルネームを全角でご記入ください</span> -->
    <!-- </dt> -->
    <!-- <dd class="data name">CSSの設定でclass名が必要です -->
        <!-- <ul class="cf"> -->
            <!-- <span><input class="input $errorInputColor:●●●$" maxlength="32" name="●●●" type="text" name="fullname" value="$●●●$" style="margin-right: 10px; "/></li> -->
            <!-- <span><input class="input $errorInputColor:●●●$" maxlength="32" name="●●●" type="text" name="fullname" value="$●●●$" /></li> -->
        <!-- </ul> -->
        <!-- <span class="msg">$error:●●●$</span><span class="msg">$error:●●●$</span> -->
    <!-- </dd> -->
<!-- </dl> -->
<!-- 性別 -->
        <p><b>性別</b></p>
        <div class="radio-inline">
            <label>
            男<input type="radio" name="gender" value="1">

            女<input type="radio" name="gender" value="2">
            </label>
        </div>
         <div class="form-group @if(!empty($errors->first('gender'))) has-error @endif">
            <span class="help-block">{{$errors->first('gender')}}</span>
        </div>
<!-- メールアドレス -->
     <tr>
        <th>メール</th>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
<!-- 郵便番号 -->
    <tr>
        <th>郵便番号</th>
        <td>
          <input type="text" name="postcode" pattern="\d{3}-?\d{4}">
        </td>
      </tr>
<!-- 住所 -->
<tr>
        <th>住所</th>
        <td>
          <input type="text" name="address" >
        </td>
      </tr>
<!-- 建物 -->
<tr>
        <th>建物名</th>
        <td>
          <input type="text" name="building_name" >
        </td>
      </tr>
<!-- ご意見 -->
<tr>
            <th class="hissu"><label>ご意見</label></th>
            <td><textarea name="opinion"></textarea></td>
        </tr>
</table>
@csrf
<input type="submit" formaction="/Advance/create" value="確認">
<a href=" {{ url('/resources/views/welcome.blade.php') }}">back</a>
@csrf
</from>

<form action="/complete" method="get">
    <a href="/complete">back</a>
</body>
</html>
