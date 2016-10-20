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
				<h2>編集</h2>
			</div>
			<div class="step well">
				<form method="post" action="/article/update/{{$article->id}}" class="form-horizontal">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-label col-xs-2">名前</label>
							<div class="col-xs-5">
								<input type="text" name="name" value="{{ old('name',$article->name) }}" class="form-control">
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">性別</label>
							<div class="col-xs-5">
									<labeL><input type="radio" name="sex" value="男" {{old('sex',$article->sex)=="男"?"checked":""}}><span>男</span></labeL>
									<labeL><input type="radio" name="sex" value="女" {{old('sex',$article->sex)=="女"?"checked":""}}><span>女</span></labeL>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">住所</label>
							<div class="col-xs-5">
								<input type="text" name="address" value="{{ old('address',$article->address) }}" class="form-control">
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">メールアドレス</label>
							<div class="col-xs-5">
								<input type="text" name="email" value="{{ old('email',$article->email) }}" class="form-control">
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-2">誕生日</label>
							<div class="col-xs-5">
								<input type="text" name="birthday" value="{{ old('birthday',$article->birthday) }}" class="form-control">
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
