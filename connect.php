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


				$to = 'velikanets@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
				$subject = 'Обратный звонок'; //Загаловок сообщения
				$message = '
                    <html>
                        <head>
                            <title>' . $subject . '</title>
                        </head>
                        <body>
                            <p>Name: "$res[id_users]"</p>

                        </body>
                    </html>'; //Текст нащего сообщения можно использовать HTML теги
				$headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
				$headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
				mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
		};

		header("Location: /burgers");
		echo "$to";
	}
?>
