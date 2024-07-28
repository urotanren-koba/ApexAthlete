<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Consulting</title>
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}?v={{ time() }}">
    <link rel="icon" href="{{ secure_asset('images/favicon.webp') }}" type="image/webp">


</head>
<body class="consulting-bg">
    <header class="page-header">
        <h1>
            <a href="{{ url('/home') }}">
                <img class="logo" src="{{ secure_asset('images/logo.webp') }}" alt="ホーム">
            </a>
        </h1>
    </header>
    <div class="consulting">
            <form method="POST" action="{{ url('/consulting') }}">
            <h2 class="result-h1">YOUR TRAINING CONSULTING</h2>
                @csrf
                <input type="text" class="consulting-text"  name="sentence" placeholder="メニューを作って欲しい種目など、詳細を入力してください。例（100mの練習メニューを作成してください。週に5日練習できます。自己ベストは11秒50です。）" value="{{ isset($sentence) ? $sentence : '' }}"  >
                <br><br>
                <button type="submit">CONSULTING</button>
                <br><br>
            </form>
            {{-- 結果の表示と保存フォーム --}}
            <form method="POST" action="{{ route('save-result') }}">
                @csrf
                <textarea name="response_text"  placeholder="ここにメニューを表示します。" class="result-text" id=""  >
                {{-- 結果 --}}
                {{ isset($response_text) ? $response_text : '' }}
                </textarea>
                <br><br>
                <button type="submit">保存</button>
                <br><br>

                <a href="{{ route('results.mypage') }}">Back to My Page</a>

            </form>
        {{-- フィードバックメッセージの表示 --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    </div>
</body>
</html>

