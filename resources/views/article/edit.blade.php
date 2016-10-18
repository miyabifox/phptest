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
				<h1>編集</h1>
				<hr>
				<form action="/article/store" method="POST">
				{{ csrf_field() }}
				<input type="text" name="name" value="{{ old('name',$article->name) }}"><br>
				<input type="text" name="sex" value="{{ old('sex',$article->sex) }}"><br>
				<input type="text" name="address" value="{{ old('address',$article->address) }}"><br>
				<input type="text" name="email" value="{{ old('email',$article->email) }}"><br>
				<input type="text" name="birthday" value="{{ old('birthday',$article->birthday) }}"><br>
				<input type="submit" value="変更する">
				</form>

            </div>
    </body>
</html>
