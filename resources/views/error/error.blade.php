<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ZeroPoint') }}</title>
    <link rel="icon" href="images/favico.ico">
    <style>
        .error {
            width: 100%;
            text-align: center;
        }
        .content {

        }
        .content>span {
            color: #ccc;
            font-size: 40px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 500;
            line-height: 400px;
        }
    </style>
</head>
<body>
<div class="error">
    <div class="content">
        <span>当前访问的页面不存在</span>
    </div>
</div>

</body>
</html>
