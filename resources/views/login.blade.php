<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('css/semantic.min.css')}}">
    <script src="{{asset('js/jquery-2.1.4.minjs')}}"></script>
    <script src="{{asset('js/semantic,minjquery-2.1.4.minjs')}}"></script>
</head>
<body>
<div class="ui grid">
    <div class="row">
    <div class="three wide column"></div>
    <div class="ten wide column"><form class="ui form">
            <div class="field">
                <label>Username</label>
                <input name="username" type="text" placeholder="Username">
            </div>
            <div class="field">
                <label>Password</label>
                <input name="password" type="password" placeholder="Password">
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form></div>
    <div class="three wide column">
    </div>
    </div>
</div>


</body>
</html>