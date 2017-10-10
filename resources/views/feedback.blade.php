@extends('layouts.site')
{{--Обратная связь--}}
@section('content')
    <!-- Форма обратной связи -->
    <div class="container">
        <div class="row centered">
            <form class="form-horizontal fback" action="" method="post">
                <h3>Связь с администрацией!</h3>
                <div class="form-group">
                    <label class='control-label col-xs-offset-2 col-xs-2'>Введите Имя </label>
                    <div class="col-xs-4">
                        <input type="text" class='form-control' name="name" value='' placeholder="Введите имя">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class='control-label col-xs-offset-2 col-xs-2'>Введите Email </label>
                    <div class="col-xs-4">
                        <input type="email" class='form-control' name="from" value='' placeholder="Введите Email">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class='control-label col-xs-offset-2 col-xs-2'>Тема сообщения </label>
                    <div class="col-xs-4">
                        <input type="text" class='form-control' name="subject" value='' placeholder="Тема сообщения">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class='control-label col-xs-offset-2 col-xs-2'>Введите сообщение </label>
                    <div class="col-xs-4">
                        <textarea name="message" class='form-control' placeholder="Сообщение"></textarea>
                        <span></span>
                    </div>
                </div>
                <input type="submit" class='btn btn-default reg' name="feed" value="Отправить">
            </form>
        </div>
    </div>
@endsection