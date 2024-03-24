<div class='col-sm-12 col-md-12 col-xl-6'> 
    <div class='block'>
        <div class='inblock'>
            <div>
                <h4>{{ $product['name'] ?? 'нет имени'}}</h4>

                @if (isset($product['description']))
                    <p class='p1'>{{ $product['description']}}</p>
                @endif


            </div>

            
            <b>{{ $product['price'] ?? 'не указана'}}</b>
        </div>                                                            
        <img src="{{ $product['img'] ?? 'img/image.jpg'}}"  alt="{{ $product['name'] ?? 'нет имени'}}">
    </div>    
</div>