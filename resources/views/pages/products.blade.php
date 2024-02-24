@extends('layer')

@section('contents')<!-- вывод содержимого секции-->
             
                    <div class='windWhapper'> 
                        <div class='container'>  
                        <div class='restaurant'>
                            <h1 class ='rect1'>Трактир «Пушкин»</h1>
                            <br>
                            <p class='p1'>₽₽₽ • Европейская</p>
                            <div class='blockOval'>
                                <p class='time'>40 - 50 мин</p>
                            </div>
                        </div>
                        </div>
                        <div class='wrapper'>
                        </div>            
                    </div>
                <div class="box-shadow">
                <style>
                 h2:first-child { color: green;}
                </style>
                <div class='container'>
                    <nav class='menuTop'>          
                        <h2>Закуски</h2>
                        <h2>Салаты</h2>
                        <h2>Супы</h2>
                        <h2>Горячие блюда</h2>
                        <h2>Гарниры</h2>
                        <h2>Десерты</h2>
                    </nav>
                </div>
                </div>
                <div class='container'>   
                <h3>Закуски</h3> 
                </div>                
                    <div class='container'>
                        <div class='menu'>
                        <div class='row'>

                            @php
                             $products = [
                                    [
                                        'name' => 'Сельдь на бородинском хлебе',
                                        'description' => 'С яйцом и огурцом',
                                        'price' => 240,
                                        'img' => 'img/UBER/photo16.png'
                                    ],[
                                        'name' => 'Название продукта 2',
                                        'description' => 'Описание продукта 2',
                                        'price' => 2000,
                                        'img' => 'img/UBER/photo15.png'
                                    ],[
                                        'name' => 'Название продукта 3',
                                        'description' => 'Описание продукта 3',
                                        'price' => 3000,
                                        'img' => 'img/UBER/photo14.png'
                                    ],
                                ];   
                            @endphp
                            
                            @foreach ($products as $product)
                                @include('components.miniProduct', ['product'=>$product])
                            @endforeach    

                                    <div class='col-sm-12 col-md-12 col-xl-6'> 
                                        <div class='block'>
                                            <div class='inblock'>
                                                <div>
                                                    <h4>Сельдь на бородинском хлебе</h4>
                                                    <p class='p1'>С яйцом и огурцом</p>

                                                </div>
                                                <b>240 ₽</b>
                                            </div>                                                            
                                            <img src="img/UBER/photo16.png" alt="photo1" max-widtx=100%
                                            height=100%>
                                        </div>    
                                    </div>

                                    <div class='col-sm-12 col-md-12 col-xl-6'> 
                                        <div class='block'>
                                            <div class='inblock'>
                                                <h4>Соленья ассорти</h4>
                                                <b>320 ₽</b>
                                            </div>                                                            
                                            <img src="img/UBER/photo15.png" alt="photo1" max-widtx=100%
                                            height=100%>
                                        </div>    
                                    </div>

                                    <div class='col-sm-12 col-md-12 col-xl-6'> 
                                        <div class='block'>
                                            <div class='inblock'>
                                                <h4>Грибы маринованные</h4>
                                                <b>300 ₽</b>
                                            </div>                                                            
                                            <img src="img/UBER/photo14.png" alt="photo1" max-widtx=100%
                                            height=100%>
                                        </div>    
                                    </div>

                                    <div class='col-sm-12 col-md-12 col-xl-6'> 
                                        <div class='block'>
                                            <div class='inblock'>
                                                <h4>Сало домашнее с горчицей</h4>
                                                <b>320 ₽</b>
                                            </div>                                                            
                                            <img src="img/UBER/photo13.png" alt="photo1" max-widtx=100%
                                            height=100%>
                                        </div>    
                                    </div>

                                    <div class='col-sm-12 col-md-12 col-xl-6'> 
                                        <div class='block'>
                                            <div class='inblock'>
                                                <h4>Малосольная семга</h4>
                                                <b>390 ₽</b>
                                            </div>                                                            
                                            <img src="img/UBER/photo12.png" alt="photo1" max-widtx=100%
                                            height=100%>
                                        </div>    
                                    </div>

                                    <div class='col-sm-12 col-md-12 col-xl-6'> 
                                        <div class='block'>
                                            <div class='inblock'>
                                                <h4>Язык говяжий с хреном</h4>
                                                <b>350 ₽</b>
                                            </div>                                                            
                                            <img src="img/UBER/photo11.png" alt="photo1" max-widtx=100%
                                            height=100%>
                                        </div>    
                                    </div>


                                    
                        </div>  
                    </div>            
                </div>
@endsection