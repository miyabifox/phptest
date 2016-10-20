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
			@section('content')
			<div class="container">
			<div class="page-header">
				<h2>ユーザ一覧</h2>
			</div>
			<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>名前</th>
						<th>性別</th>
						<th>住所</th>
						<th>誕生日</th>
						<th>メールアドレス</th>
						<th>作成日</th>
						<th>更新日</th>
						<th>オプション</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr>
						<td>{{ $article->name }}</td>
						<td>{{ $article->sex }}</td>
						<td>{{ $article->address }}</td>
						<td>{{ $article->birthday }}</td>
						<td>{{ $article->email }}</td>
						<td>{{ $article->created_at }}</td>
						<td>{{ $article->updated_at }}</td>
						<td>
							<button type="button" class="btn btn-primary" onClick="location.href='/article/edit/{{$article->id}}'"><span class="glyphicon glyphicon-pencil""></span></button>
							<button type="button" class="btn btn-danger" onClick="location.href='/article/delete/{{$article->id}}'"><span class="glyphicon glyphicon-trash""></span></button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div style="text-align:center;">
			<button type="button" class="btn btn-success btn-lg" onClick="location.href='/article/create'"><span class="glyphicon glyphicon-plus""></span>追加</button>
			</div>
			@endsection
            </div>
    </body>
</html>
