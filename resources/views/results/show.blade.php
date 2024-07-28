<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainig Menu</title>
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}?v={{ time() }}">
    <link rel="icon" href="{{ secure_asset('images/favicon.webp') }}" type="image/webp">


</head>
<body class="result-bg">
        <div class="result-area">
        <h2 class="result-h1">TRAINING MENU</h2>
        <textarea name="" class="training-text" id="">
        {{ $result->response_text }}
        </textarea>
        <br><br>
        <a href="{{ route('results.mypage') }}">Back to My Page</a>
    </div>
</body>
</html>
