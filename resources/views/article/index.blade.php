<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
			@extends('layout')
			@section('content')
            <div class="content">
				<h2>ユーザ一覧</h2>
				@foreach($articles as $article)
				<p>名前：{{ $article->name }}</p>
				<p>性別：{{ $article->sex }}</p>
				<p>住所：{{ $article->address }}</p>
				<p>誕生日：{{ $article->birthday }}</p>
				<p>メールアドレス：{{ $article->email }}</p>
				<p>作成日：{{ $article->created_at }}</p>
				<p>更新日：{{ $article->updated_at }}</p>
				
			@endforeach
			@endsection
            </div>
    </body>
</html>
