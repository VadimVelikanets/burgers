<?php 

	$connection = mysqli_connect('localhost', 'root', '', 'users');

	$select_db = mysqli_select_db($connection, 'users');

	//Отменяем повторную отправку формы при перезагрузке страницы
	if (!empty($_POST))
	{


		if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['street']) && isset($_POST['home']) && isset($_POST['part']) && isset($_POST['appt']) && isset($_POST['floor']) && isset($_POST['comment']))
		{

			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];

			$street = $_POST['street'];
			$home = $_POST['home'];
			$part = $_POST['part'];
			$appt = $_POST['appt'];
			$floor = $_POST['floor'];
			$comment = $_POST['comment'];

			$result = mysqli_query($connection, "SELECT email FROM users WHERE email = '$email'");

		//Проверяем поле email на совпадение, если есть совпадение регистрируем пользователя в users, иначе запролняем только таблицу orders
			if(mysqli_num_rows($result) <= 0)
			{
				$result = mysqli_query($connection, "INSERT INTO users (email) VALUES ($email)");
				$query = "INSERT INTO users (name, email, phone) VALUES ('$name' ,  '$email' ,  '$phone')";
				$result = mysqli_query($connection, $query);
				$last_id = mysqli_insert_id($connection);
				if($result)
				{
					$success = 'Ваш заказ успешно принят! Ваши данные регистрированны!';
				} else{
					$error = 'Произошла ошибка, повторите попытку!';
				}
			}
			else
			{
				//Определяем id уже зарегистрированного пользователя
				$id = mysqli_query($connection, "SELECT id_users FROM users WHERE email = '$email'");
				$res = mysqli_fetch_array($id);
				$last_id = $res['id_users'];
				if($result)
				{
					$success = 'Вы уже зарегистрированны! Спасибо за заказ!';
				} else{
					$error = 'Произошла ошибка, повторите попытку!';
				}

			}

			$query2 = "INSERT INTO orders (id_users, street, home, part, appt, floor, comment) VALUES ('$last_id', '$street' ,  '$home',  '$part', '$appt', '$floor', '$comment')";
			$result2 = mysqli_query($connection, $query2);
			//определяем кол-во заказов одним пользователем
			$cout_user = mysqli_query($connection, "SELECT id_users FROM orders WHERE id_users = '$res[id_users]'");
			//echo mysqli_num_rows($cout_user);
			$countOrders = mysqli_num_rows($cout_user);
			// Номер заказа
			$max_order = mysqli_query($connection, "SELECT MAX(id_order) FROM orders");
			$id_order = mysqli_fetch_array($max_order);
			$numb_order = $id_order['MAX(id_order)'];


				if($countOrders > 1 )
				{
					$thanks = "Спасибо! Это уже $countOrders заказ";
				}
				else{
					$thanks = 'Спасибо - это ваш первый заказ';
				};

				$message = "
                    <html>
                        <head>
                            <title>Заказ доставки</title>
                        </head>
                        <body>
                            Заказ - $numb_order <br>
								Ваш заказ будет доставлен по адресу: Улица $street, дом $home, корпус  $part, квартира $appt, этаж $floor <br>
								DarkBeefBurger за 500 рублей, 1 шт, <br>
								 $thanks

                        </body>
                    </html>"; //Текст нащего сообщения можно использовать HTML теги
                 $headers = "Content-type: text/html; charset=utf-8 \r\n"; 
    			$headers .= "From: Velikanets <velikanets@mail.ru>\r\n"; 
				mail($email, "Заказ доставки", $message, $headers);
		};

		header("Location: /burgers");
		echo "$to";
	}
?>
