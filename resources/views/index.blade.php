<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Главная</title>
    <a href="http://localhost/contacts" target="_blank">Контакты</a>
    <a href="http://localhost/test" target="_blank">Тест</a>
    @vite(['resources/css/app.css'])
    
    <p  
    id="season1" class="lead text-muted">Зима́ — одно из четырёх времён года</p> <!--добавляем соответствующий id элементу-->
  
    <img src="img/image.jpg" width = '200' height = '400' alt="...">
    
        <h1 class='bar'>Связаться с нами!</h1>
   
    <div class='page'>
    <p>
        Как писал Пелевин:
    </p>
        <div class='quote'>
            <p>
                Человек привык видеть дьявола везде, кроме зеркала и телевизора.
            </p>
    </div>
    </div>
    <form id="feedback">
Фамилия: <br>
        <input type="text" name="lastname" id="lastname"><br> 
Имя: <br>
        <input type="text" name="firstname" id="firstname"><br>
 Отчество<br>
        <input type="text" name="patronymic" id="patronymic"><br>       
 <select name="topic" id="topic">
     <option value="1">Предложение</option>
     <option value="2">Проблема</option>
     <option value="3">Жалоба</option>
        </select>
 <br>     
 <input type="checkbox" name="email" id="email">Получить ответ по e-mail<br>  
<input type="submit" id="send" value="Отправить сообщение"> 
<input type="reset" id="clear" value="Очистить Форму">        
    </form>    

</html>