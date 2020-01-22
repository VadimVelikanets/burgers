<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
	<?php 
 
	$link = mysqli_connect('127.0.0.1', 'root', '', 'users')
	    or die("Ошибка " . mysqli_error($link)); 
    //Users
	$query ="SELECT * FROM users";
 
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
	    $rows = mysqli_num_rows($result); // количество полученных строк
	    echo "<h3>Список пользователей</h3>"; 
	    echo "<table border='1'><tr><th>Id пользователя</th><th>Email</th><th>Имя</th><th>Телефон</th></tr>";
	    for ($i = 0 ; $i < $rows ; ++$i)
	    {
	        $row = mysqli_fetch_row($result);
	        echo "<tr>";
	            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	     
	    // очищаем результат
	    mysqli_free_result($result);
	}
	//Orders
		$query2 ="SELECT * FROM orders";
 
	$result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link)); 
	if($result2)
	{
	    $rows2 = mysqli_num_rows($result2); // количество полученных строк
	    echo "<h3>Информация о заказах</h3>"; 
	    echo "<table border='1'><tr><th>Id заказа</th><th>Id пользователя</th><th>Улица</th><th>Дом</th><th>Корпус</th><th>Квартира</th><th>Этаж</th><th>Комментарий</th></tr>";
	    for ($i = 0 ; $i < $rows2 ; ++$i)
	    {
	        $row2 = mysqli_fetch_row($result2);
	        echo "<tr>";
	            for ($j = 0 ; $j < 8 ; ++$j) echo "<td>$row2[$j]</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	     
	    // очищаем результат
	    mysqli_free_result($result2);
	}
	mysqli_close($link);

	?>

	
</body>
</html>