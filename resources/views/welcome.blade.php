<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

    <div id="app">
        <div id="nav">
          
        </div>
        <router-view/>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script> 
</body>
</html>