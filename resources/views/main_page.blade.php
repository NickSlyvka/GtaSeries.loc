@extends('layouts.site')
{{--Главная страница--}}
@section('content')
<!-- Тело документа -->
<div class="about">
  <div class="container centered">
    <h1>Gta Series</h1>
    <p>Добро пожаловать на <b>GTA Series!</b> Мы одно из крупнейших русскоязычных сообществ, посвященных серии GTA и качественным игровым модификациям.
Здесь ценителей ждут свежие новости и статьи, огромная коллекция новейших модов и, разумеется, общение на игровые и не только темы.
Присоединяйтесь! </p>
  </div>
</div>
<div class="news">
  <div class="container">
    <div class="row centered">
      <div class="col-md-4">
        <h3>GTA V</h3>
        <a href="/gtav_info"><img src="image/gta_v.jpg" alt=""></a>
      </div>
      <div class="col-md-4">
        <h3>GTA IV</h3>
        <a href="/gta4_info"><img src="image/gta_4.jpg" alt=""></a>
      </div>
      <div class="col-md-4">
        <h3>GTA ONLINE</h3>
        <a href="/gtao_info"><img src="image/gta_online.jpg" alt=""></a>
      </div>
    </div>
  </div>
</div>
@endsection
