<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Контакты</title>
    @vite(['resources/css/app1.css'])
    <h1>Времена года</h1>

<h2>Оглавление</h2>

<а href="http://localhost#season1">Зима</а> <!--создаём якорь, указав #id элемента-->
<a href="#season2">Весна</a>
<a href="#season3">Лето</a>
<a href="#season4">Осень</a>
<a href="tel:+79999999999">3воните нам бесплатно по телефону (999) 999-9999</a>

<section>
  <h1>WWF</h1>
  <p>The World Wide Fund for Nature (WWF) is....</p>
</section>

<table border='1'>
    <caption>Пищевая ценность</caption>
  <tr>
    <th>Блюда</th>
    <th>Калории</th>
    <th>Жиры (г)</th>
  </tr>
  <tr>
    <td>Куриный бульон</td>
    <td>120</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Салат цезарь</td>
    <td>400</td>
    <td>26</td>
  </tr>
</table>
<div class="container">
<div class='left'>
  <p id="season2">Весна́ — одно из четырёх времён года, переходный сезон между зимой и летом. Слово имеет древнюю
     индоевропейскую основу и сродни лит. vasarà — «лето», латыш. pavasaris, др.-инд. vasantás — «весна», vasar — «рано».</p>
  
  <p id="season3">Лето - одно из четырёх времён года, между весной и осенью, характеризующееся наиболее высокой 
    температурой окружающей среды. Состоит из трёх месяцев: в Северном полушарии — июня, июля и августа, в Южном
     — декабря, января и февраля.</p>
  
  <p id="season4">Осень — одно из четырёх времен года, между <sub>Текст</sub> летом и зимой. Осень — переходный 
  сезон, когда заметно уменьшение светового дня, и постепенно понижается температура окружающей среды.</p>    
</div>
</div>
<img src="img/image.jpg" width = '200' alt="...">
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