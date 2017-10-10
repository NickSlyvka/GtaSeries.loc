{{--Главная страница--}}
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $title }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('image/favicon.ico') }}" rel='shortcut icon' type='image/x-icon'>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class='navbar-toggle' data-toggle='collapse' data-target='#header-menu'>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a href="/" class='navbar-brand'>GTA series</a>
        </div>
        <div class="navbar-collapse collapse" id='header-menu'>
          <ul class='nav navbar-nav'>
            <li class='dropdown'>
              <a href="#" class='dropdown-toggle' data-toggle='dropdown'>GTA V <b class='caret'></b></a>
              <ul class='dropdown-menu'>
                <li><a href="/gtav_info">Информация</a></li>
                <li class='divider'></li>
                <li><a href="/gtav_city">Город</a></li>
                <li class='divider'></li>
                <li><a href="/gtav_sist">Системные требования</a></li>
              </ul>
            </li>
            <li class='dropdown'>
              <a href="#" class='dropdown-toggle' data-toggle='dropdown'>GTA IV <b class='caret'></b></a>
              <ul class='dropdown-menu'>
                <li><a href="/gta4_info">Информация</a></li>
                <li class='divider'></li>
                <li><a href="/gta4_pers">Персонажи</a></li>
                <li class='divider'></li>
                <li><a href="/gta4_eflc">GTA IV: Episodes From LC</a></li>
              </ul>
            </li>
            <li class='dropdown'>
              <a href="#" class='dropdown-toggle' data-toggle='dropdown'>GTA ONLINE <b class='caret'></b></a>
              <ul class='dropdown-menu'>
                <li><a href="/gtao_info">Информация</a></li>
                <li class='divider'></li>
                <li><a href="/gtao_pers">Прокачка персонажей</a></li>
                <li class='divider'></li>
                <li><a href="/gtao_heist">Прохождение Heists</a></li>
              </ul>
            </li>
            <li class='dropdown'>
              <a href="#" class='dropdown-toggle' data-toggle='dropdown'>Сайт <b class='caret'></b></a>
              <ul class='dropdown-menu'>
                <li><a href="/about">О нас</a></li>
                <li class='divider'></li>
                <li><a href="/feedback">Обратная связь <i class='fa fa-envelope-o'></i></a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right" action="" method="post">
            <button type="button" class='btn btn-default nav-but hidden-sm'><a href="/signin"><i class='fa fa-sign-in'></i> Вход</a></button>
            <button type="button" class='btn btn-default nav-but hidden-sm'><a href="/signup"><i class='fa fa-user-plus'></i> Регистрация</a></button>
            <button type="button" class='btn btn-default nav-but hidden-xs hidden-md hidden-lg show-sm'><a href="#" data-toggle='modal' data-target='#modal_auth'><i class='fa fa-sign-in'></i></a></button>
            <button type="button" class='btn btn-default nav-but hidden-xs hidden-md hidden-lg show-sm'><a href="reg.php"><i class='fa fa-user-plus'></i></a></button>
          </form>
        </div>

      </div>
    </div>
    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script>

</script>
</body>
</html>
