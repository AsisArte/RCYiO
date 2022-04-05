<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Госучереждения, Бухгалтерский учет, Кадровый учет, управленческий учет, Удмуртская Республика">
    <link rel="shortcut icon" href="img/LOGO.png" type="image/x-icon">
    <title>  @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }} >
    @yield('label-css')
</head>

<body>
    <header>
    <div class="head">
            <a href="/" class="logo">КУ УР РЦУиО</a>
                <div class="left">
                    <a href="/">Главная</a>
                    <a href="/onas">О нас</a>
                    <a href="/kontact">Контакты</a>
                </div>
                <div class="right">
            <!-- Если пользователь гость -->
            @if(!Auth::user())
                <a href="/login">Вход</a>
                <p class="logindevider">|</p>
                <a href="register">Регистрация</a>
            @endif

            <!-- Если пользователь авторизован -->
            @if(Auth::user())

                    <a href="/dashboard">Личный кабинет</a>

                <p class="logindevider">|</p>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выход') }}
                            </x-dropdown-link>
                        </form>

            @endif
            </div>
    </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="foot">
            <a href="/" class="logo">КУ УР РЦУиО</a>
            <p>Казенное учреждение Удмуртской Республики "Республиканский центр учета и отчетности"</p>
        </div>
    </footer>

</body>

</html>