<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
            <div class="content">
				<h2>ユーザー登録</h2>
				<form method="post" action="store">
					{{csrf_field()}}
					<p>名前：<input type="text" name="name"></p>
					<p>メールアドレス：<input type="text" name="email"></p><br>
				    <input type="submit" value="送信">
				    <input type="reset" value="リセット">
				</form>
            </div>
    </body>
</html>
