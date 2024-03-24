@extends('layer')

@section('contents')<!-- вывод содержимого секции-->

                    <div class='windWhapper'> 
                        <div class="container">
                            <div class='restaurant'>
                                <h1 class ='rect1'>Трактир «Пушкин»</h1>
                                <br>
                                <p class='p1'>₽₽₽ • Европейская</p>
                                <div class='blockOval'>
                                    <p class='time'>40 - 50 мин</p>
                                </div>
                            </div>  
                        </div>                                     
                                    <picture>
                                        <source srcset= 'img/UBER/photoSM.png' media='(max-width: 391px)' height='255' width='100%' >
                                        <source srcset= 'img/UBER/photoMD.png' media='(max-width: 767px)' height='364' width='100%'>
                                        <source srcset= 'img/UBER/photoXL.png' media='(max-width: 100%)' height='364' width='100%'>
                                        <img src='img/UBER/photoXL.png' alt='фоновая картинка' width='100%' height="364">
                                    </picture>
                        </div>
                        
                        <!--<div class='wrapper'>/div>-->            
                  
                <div class="box-shadow2">
                <div class='container'>
                    <nav class='menuTop'> 
                        <ul class="menuTop__list">
                           <li><a href="#">Закуски</a></li>
                           <li><a href="#">Салаты</a></li>  
                           <li><a href="#">Супы</a></li> 
                           <li><a href="#">Горячие блюда</a></li> 
                           <li><a href="#">Гарниры</a></li> 
                           <li><a href="#">Десерты</a></li>
                        </ul>
                    </nav>
                </div>
                </div>
                <div class='container'>   
                <h3>Закуски</h3> 
                <div class="underline">
                </div>
                </div>                
                    <div class='container'>
                        <div class='menu'>
                        <div class='row'>

                            @php
                             $products = [
                                    [
                                        'name' => 'Сельдь на бородинском хлебе',
                                        'description' => 'С яйцом и огурцом',
                                        'price' => '240 ₽',
                                        'img' => 'img/UBER/photo16.png'
                                    ],[
                                        'name' => 'Соленья ассорти',
                                        'description' => '',
                                        'price' => '320 ₽',
                                        'img' => 'img/UBER/photo15.png'
                                    ],[
                                        'name' => 'Грибы маринованные',
                                        'description' => '',
                                        'price' => '300 ₽',
                                        'img' => 'img/UBER/photo14.png'
                                    ],[
                                        'name' => 'Сало домашнее с горчицей',
                                        'description' => '',
                                        'price' => '320 ₽',
                                        'img' => 'img/UBER/photo13.png'
                                    ],[
                                        'name' => 'Малосольная семга',
                                        'description' => '',
                                        'price' => '390 ₽',
                                        'img' => 'img/UBER/photo12.png'
                                    ],[
                                        'name' => 'Язык говяжий с хреном',
                                        'description' => '',
                                        'price' => '350 ₽',
                                        'img' => 'img/UBER/photo11.png'
                                    ]

                                ];   
                            @endphp
                            
                            @foreach ($products as $product)
                                @include('components.miniProduct', ['product'=>$product])
                            @endforeach    
                                 
                        </div>  
                    </div>            
                </div>
@endsection