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
				<h2>削除</h2>
			</div>
			<div class="step well" style="text-align:center;">
				<p>名前：{{ $article->name }}</p>
				<p>性別：{{ $article->sex }}</p>
				<p>住所：{{ $article->address }}</p>
				<p>誕生日：{{ $article->birthday }}</p>
				<p>メールアドレス：{{ $article->email }}</p>
				<p>作成日：{{ $article->created_at }}</p>
				<p>更新日：{{ $article->updated_at }}</p>
				<form action="/article/destroy" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{$article->id}}">
				<input type="submit" value="削除する" class="btn btn-danger">
				</form>
			</div>
            </div>
    </body>
</html>
