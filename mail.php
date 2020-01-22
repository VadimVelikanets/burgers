<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['phone'])&&_POST['phone']!='')) {
    $to = 'velikanets@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Обратный звонок'; //Загаловок сообщения
    $message = '
                    <html>
                        <head>
                            <title>' . $subject . '</title>
                        </head>
                        <body>
                            <p>Name: ' . $name. '</p>
                            <p>Email: ' . $email . '</p>   
                            <p>Phone: ' . $phone . '</p>                      
                            <p>Request: ' . $comment. '</p> 
                            <p>Заказ: ' . $countOrders . '</p>
                        </body>
                    </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
    }
?>