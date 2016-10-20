<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/css/app.css" rel="stylesheet">

        <title>Laravel</title>
    </head>
    <body>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
			@extends('layout')
			<div class="container">
			<div class="page-header">
				<h2>新規登録</h2>
			</div>
			<div class="step well">
				<form method="post" action="store" class="form-horizontal">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-label col-xs-2">名前</label>
							<div class="col-xs-5">
								<input type="text" name="name" class="form-control" placeholder="富士　ニフ太">
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">性別</label>
							<div class="col-xs-5">
									<labeL><input type="radio" name="sex" value="男"><span>男</span></labeL>
									<labeL><input type="radio" name="sex" value="女"><span>女</span></labeL>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">住所</label>
							<div class="col-xs-5">
								<input type="text" name="address" class="form-control" placeholder="東京都新宿区北新宿2-21-1">
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">メールアドレス</label>
							<div class="col-xs-5">
								<input type="text" name="email" class="form-control" placeholder="example@nifty.com">
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">誕生日</label>
							<div class="col-xs-5">
								<input type="text" name="birthday" class="form-control" placeholder="1986/2/4">
							</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10">
							<input type="submit" value="送信" class="btn btn-primary">
							<input type="reset" value="リセット" class="btn btn-default">
						</div>
					</div>
				</form>
			</div>
            </div>
    </body>
</html>
