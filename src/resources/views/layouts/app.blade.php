<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <!--asset関数はlaravelのpublicフォルダから見た時に、どこにあるのかを引数として指定する必要がある。-->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    Todo
                </a>
                <nav>
                    <ul class="header-nav"> <!--塊＝block-->
                        <li class="header-nav__item"> <!--要素＝element-->
                            <a class="header-nav__link" href="/categories">カテゴリ一覧</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>