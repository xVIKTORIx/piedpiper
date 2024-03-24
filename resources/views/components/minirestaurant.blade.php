           
    <div class='col-sm-12 col-md-6 col-xl-4'
    >  
        <figure class="card__restaurant">
    
            <img src="{{ $restaurant['img'] ?? 'img/image.jpg'}}" 
            style="width: 100%; height: 256px;" alt="Пример 1" />
            <figcaption>
                <h4>{{ $restaurant['name'] ?? 'нет имени'}}</h4>
                <p>{{ $restaurant['price'] ?? 'не указан'}}</p>
                <p>{{ $restaurant['time'] ?? 'не указано'}}</p>
            </figcaption>
        </figure>                                                           
    </div>
    <!-- как вставить ссылку и source -->