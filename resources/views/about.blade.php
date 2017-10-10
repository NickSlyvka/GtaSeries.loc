@extends('layouts.site')
{{--Страница о нас--}}
@section('content')
    <!-- Контент странички О-нас -->
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="tabs etabs">
                    <ul class='nav nav-tabs' id='etabs'>
                        <li><a href='#tab1' data-toggle='tab'>Информация</a></li>
                        <li><a href='#tab2' data-toggle='tab'>Контакты</a></li>
                        <li><a href='#tab3' data-toggle='tab'>Вопросы и предложения</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id='tab1'>
                            <h3>GTA Series</h3>
                            <p>
                                Добро пожаловать на GTA Series! Мы одно из крупнейших русскоязычных сообществ, посвященных серии GTA и качественным игровым модификациям.
                                Здесь ценителей ждут свежие новости и статьи, огромная коллекция новейших модов и, разумеется, общение на игровые и не только темы.
                                Присоединяйтесь!
                            </p>
                        </div>
                        <div class="tab-pane fade" id='tab2'>
                            <p>
                            <address>
                                <strong>Rikz, Inc.</strong><br>
                                Fail Str, 123<br>
                                Springfield, SP 73028<br>
                                <abbr title="Phone">P:</abbr> (555) 401-3625 <br><br>
                                <strong>Rikz Network</strong><br>
                                <a href="mailto:#">RikzGT@gmail.com</a>
                            </address>
                            </p>
                        </div>
                        <div class="tab-pane fade" id='tab3'>
                            <p>
                                Прежде чем обращаться к администрации сайта, пожалуйста, прочитайте пункты, приведенные ниже. Возможно, они уже станут ответом на ваши вопросы.
                            <ol id='tab_li'>
                                <li>На письма, содержащие технические вопросы по игре, ответы не даем! Это не техподдержка, все вопросы задаются и решаются на форуме!</li>
                                <li>Если вы хотите разместить на нашем сайте вашу ссылку, кнопку или баннер или, наоборот, рассказать о нас на вашем ресурсе, обратите внимание на правую колонку – «Наши друзья» и «Наша кнопка».</li>
                                <li>Если вы хотите купить наш сайт, он не продается. Даже если ваш сосед Петрович сказал, что продается. Похоже, Петрович задумал вас надуть. Лучше вам с ним не связываться.</li>
                                <li>Если все-таки вопрос остался, связаться с администратором можно с помощью <a href="feedback.php">формы обратной связи</a></li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection