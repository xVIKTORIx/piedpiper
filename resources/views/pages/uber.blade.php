@extends('layer')

@section('contents')<!-- вывод содержимого секции-->
    

            <div class='container'>
                <input class="form__input" type="search" placeholder=" Поиск по ресторанам и кухням">
          
                <h3>Рестораны в Москве</h3>
                <div class='row'> 

                @php
                $restaurant = [
                       [
                           'name' => 'Макдоналдс — Газетный',
                           'price' => '₽₽ • Бургеры',
                           'img' => 'img/UBER/photo1.png',
                           'time'=> '25 - 35 мин'

                       ],[
                           'name' => 'DimSum & Co — ЦДМ',
                           'price' => '₽ • Японская • Китайская • Азиатская',
                           'img' => 'img/UBER/photo2.png',
                           'time'=> '40 - 50 мин'
                       ],[
                           'name' => 'ДвижОК — Манежная',
                           'price' => '₽ • Американская • Европейская',
                           'img' => 'img/UBER/photo3.png',
                           'time'=> '35 - 45 мин'
                       ],[
                           'name' => 'НЯ — NHA',
                           'price' => '₽₽ • Вьетнамская',
                           'img' => 'img/UBER/photo4.png',
                           'time'=> '30 - 40 мин'
                       ],[
                           'name' => 'Точка Дзы — Цветной',
                           'price' => '₽₽ • Вьетнамская',
                           'img' => 'img/UBER/photo5.png',
                           'time'=> '40 - 50 мин'
                       ],[
                           'name' => 'Cinnabon',
                           'price' => '₽ • Выпечка • Десерты • Капкейки',
                           'img' => 'img/UBER/photo6.png',
                           'time'=> '25 - 35 мин'
                       ],[
                           'name' => 'PIZZELOVE',
                           'price' => '₽₽ • Пицца',
                           'img' => 'img/UBER/photo7.png',
                           'time'=> '15 - 25 мин'
                       ],[
                           'name' => 'Zю кафе — Тверская',
                           'price' => '₽₽ • Японская',
                           'img' => 'img/UBER/photo8.png',
                           'time'=> '25 - 35 мин'
                       ],[
                           'name' => 'Bar BQ Cafe — Манежная',
                           'price' => '₽₽ • Европейская',
                           'img' => 'img/UBER/photo9.png',
                           'time'=> '30 - 40 мин'
                       ],[
                           'name' => 'Трактир «Пушкин»',
                           'price' => '₽₽ • Европейская',
                           'img' => 'img/UBER/photo10.png',
                           'time'=> '40 - 50 мин'
                       ]
                
                
                   ];   
               @endphp
               
               @foreach ($restaurant as $restaurant)
                   @include('components.minirestaurant', ['restaurant'=>$restaurant])
               @endforeach 


                                   <!-- <div class='col-sm-12 col-md-6 col-xl-4'>   
                                            <img src="img/UBER/photo10.png" alt="photo10" width=100%>
                                            <h4><a href="http://localhost/uber10" target="_blank">Трактир «Пушкин»</a></h4>
                                            <p class='p1'>₽₽₽ • Европейская</p>
                                            <p class='p2'>40 - 50 мин</p>
                                    </div>-->

                                </div>     
                 </div>
@endsection
