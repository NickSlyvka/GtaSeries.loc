@extends('layouts.site')
{{--Регистрация--}}
@section('content')
  <!-- Форма регистрации -->
  <div class='container freg'>
    <div class="row centered">
      <h1>Регистрация на GTA SERIES</h1>
      <span></span>
      <form class="form-horizontal reg" role='form' action="" method="post">
        <div class="form-group">
          <label class="col-xs-offset-2 col-xs-2 control-label">Введите логин </label>
          <div class="col-xs-4">
            <input type="text" class='form-control rega' name="login" placeholder="Введите логин">
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-xs-offset-2 col-xs-2 control-label">Введите Email </label>
          <div class="col-xs-4">
            <input type="Email" class='form-control rega' name="email" placeholder="Введите Email">
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-xs-offset-2 col-xs-2 control-label">Введите пароль </label>
          <div class="col-xs-4">
            <input type="password" class='form-control rega' name="password1" placeholder="Введите пароль">
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-xs-offset-2 col-xs-2 control-label">Повторите пароль </label>
          <div class="col-xs-4">
            <input type="password" class='form-control rega' name="password2" placeholder="Повторите пароль">
            <span></span>
          </div>
        </div>
        <input type="submit" class='btn btn-default reg' name="reg" value="Регистрация">
      </form>
        <div class="reg_auth col-xs-offset-4 col-xs-4 centered">
          <p>Уже зарегестрированы?</p>
          <button type="button" class='btn btn-default'><a href="#" data-toggle='modal' data-target='#modal_auth'>Вход <i class='fa fa-sign-in'></i></a></button>
        </div>
    </div>
  </div>
@endsection
