<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}?v={{ time() }}">
    <link rel="icon" href="{{ secure_asset('images/favicon.webp') }}" type="image/webp">
</head>
<body class="app-bg">
    <nav class="navbar">
        <a href="{{ url('/home') }}">
            <img class="logo" src="{{ secure_asset('images/logo.webp') }}" alt="ホーム">
        </a>
        <ul class="nav-links">
            <li><a href="{{ route('consulting')}}">Menu Consulting</a></li>
            <li>
                <a class="dropdown-item" href="{{ url('/home') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Log out
                </a>
            </li>
        </ul>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <div class="container">
        <section class="profile-section">
            <h2>これまで作成したメニュー</h2>
            <div>
                <a href="{{ route('results.mypage', ['sort' => 'asc']) }}">昇順</a> | <a href="{{ route('results.mypage', ['sort' => 'desc']) }}">降順</a>
            </div>
            <ul>
                @foreach ($results as $result)
                    <li>
                        <p>作成日時: {{ $result->created_at->format('Y年m月d日 H:i') }}</p> <!-- 作成日時を表示 -->
                        <p>{{ Str::limit($result->response_text, 300) }} <a href="{{ route('result.show', $result->id) }}">続きを読む</a></p>
                        <br><br>
                    </li>
                @endforeach
            </ul>
            <a id="back-btn" href="#">TOPに戻る</a>
        </section>
    </div>
</body>
</html>