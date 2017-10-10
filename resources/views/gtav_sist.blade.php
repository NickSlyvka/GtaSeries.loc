@extends('layouts.site')
{{--Gta 5 системные требования--}}
@section('content')
    {{--Основной контент--}}
    <div class="container centered">
        <div class="col-xs-offset-1 col-xs-10">
            <div class="carousel slide" id='carousel'>
                <ul class='carousel-indicators'>
                    <li class='active' data-target='#carousel' data-slide-to='0'></li>
                    <li data-target='#carousel' data-slide-to='1'></li>
                    <li data-target='#carousel' data-slide-to='2'></li>
                </ul>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class='img' src="image/gta5c1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class='img' src="image/gta5c2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class='img' src="image/gta5c3.jpg" alt="">
                    </div>
                </div>
                <a href="#carousel" class='left carousel-control' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
                <a href="#carousel" class='right carousel-control' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
            </div>
            <h2>Официальные системные требования ГТА 5 на ПК (PC)</h2>
            <p>
                С выходом GTA V на Xbox 360 и PS3, а потом уже обновленной версии на консолях нового поколения, игровые издания и многочисленные фанаты серии спорили о том, какими же будут требования игры к «персоналкам». Разумеется, со временем конфигурации росли, ведь сами представители Rockstar после улучшения графики и введения в игру режима от первого лица заявили, насколько это повысило запросы к системным ресурсам. Так или иначе, вот заявленные самими разработчиками требования на январь 2015 года:
            </p>
            <div class="panel-group" id='accordion'>
                <div class="panel panel-default">
                    <div class="panel-heading pan">
                        <h4 class='panel-title'>
                            <a href="#1" data-toggle='collapse' data-parent='#accordion'>Минимальные системные требования:</a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id='1'>
                        <div class="panel-body pan1">
                            <p>
                            <table class='table-bordered'>
                                <tr>
                                    <td>Процессор:</td>
                                    <td>Intel Core 2 Quad CPU Q6600 2.40ГГц (4 ядра) / AMD Phenom 9850 Quad-Core Processor 2.5ГГц (4 ядра)</td>
                                </tr>
                                <tr>
                                    <td>Видеокарта:</td>
                                    <td>NVidia 9800 GT 1ГБ / AMD HD 4870 1ГБ (DirectX 10, 10.1, 11)</td>
                                </tr>
                                <tr>
                                    <td>Звуковая карта:</td>
                                    <td>полностью совместимая с DirectX 10</td>
                                </tr>
                                <tr>
                                    <td>Оперативная память:</td>
                                    <td>4ГБ</td>
                                </tr>
                                <tr>
                                    <td>Свободное место на диске:</td>
                                    <td>65ГБ</td>
                                </tr>
                                <tr>
                                    <td>Операционная система (64 бита):</td>
                                    <td>Windows Vista (SP2, причем для нее рекомендуется видеокарта производства NVidia), Windows 7 (SP1),      Windows 8, Windows 8.1</td>
                                </tr>
                                <tr>
                                    <td>DVD-привод</td>
                                    <td></td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading pan">
                        <h4 class='panel-title'><a href="#2" data-toggle='collapse' data-parent='#accordion'>Рекомендуемые системные требования:</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id='2'>
                        <div class="panel-body pan1">
                            <p>
                            <table class='table-bordered'>
                                <tr>
                                    <td>Процессор:</td>
                                    <td>Intel Core i5 3470 3.2ГГц (4 ядра) / AMD X8 FX-8350 4ГГц (8 ядер)</td>
                                </tr>
                                <tr>
                                    <td>Видеокарта:</td>
                                    <td>NVidia GTX 660 2ГБ / AMD HD 7870 2ГБ</td>
                                </tr>
                                <tr>
                                    <td>Звуковая карта:</td>
                                    <td>полностью совместимая с DirectX 10</td>
                                </tr>
                                <tr>
                                    <td>Оперативная память:</td>
                                    <td>8ГБ</td>
                                </tr>
                                <tr>
                                    <td>Свободное место на диске:</td>
                                    <td>65ГБ</td>
                                </tr>
                                <tr>
                                    <td>Операционная система (64 бита):</td>
                                    <td>Windows 7 (SP1), Windows 8, Windows 8.1</td>
                                </tr>
                                <tr>
                                    <td>DVD-привод</td>
                                    <td></td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Дополнительные требования:</h2>
            <p>
                В отличие от основных, дополнительные требования по установке и настройке игры на ПК вполне стандартные:
            </p>
            <ul>
                <li>Для активации и онлайн-игры требуется подключение к Интернет</li>
                <li>Установка и игра требуют подключения к учетной записи Social Club</li>
                <li>Каждая копия игры привязывается к учетной записи и не может быть перенесена на другую (допускается привязывать не более одной игры к одной учетной записи)</li>
                <li>Помимо игры будет установлено дополнительное ПО, в том числе проверяющее подлинность версии игры (собираются данные об аппаратном обеспечении)</li>
                <p>
                    Также обратите внимание, что со временем (в том числе с выходом дополнений и обновлений) системные требования могут измениться.
                </p>
            </ul>
        </div>
    </div>
@endsection 