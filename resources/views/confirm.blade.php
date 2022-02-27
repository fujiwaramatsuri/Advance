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
  <script>
    /**
     * 前画面に戻る
     */
    function goBack(){
        document.forms.form.action = '{{route('path.create')}}';
        document.forms.form._method.value = 'get';
        document.forms.form.submit();
    }
</script>
(中略)
{{Form::open(['name'=>'form','url'=>route('path.store')])}}
{{Form::hidden('_method','post')}}    {{--goBack()で書き換えに使用する--}}
(中略)
{{old('message')}}
{{Form::hidden('message',old('message'))}}
(中略)
{{Form::button('前に戻る',['onclick'=>'goBack();'])}}
{{Form::button('登録する',['type'=>'submit','name'=>'action','value'=>'submit'])}}
(後略) 

<table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
          </tbody>
        </table>


</body>
</html>