<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['phone'])&&_POST['phone']!='')) {
    $to = 'velikanets@mail.ru'; //����� ����������, ����� ������� ����� ������� ������� ������ �������
    $subject = '�������� ������'; //��������� ���������
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
                            <p>�����: ' . $countOrders . '</p>
                        </body>
                    </html>'; //����� ������ ��������� ����� ������������ HTML ����
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //��������� ������
    $headers .= "From: ����������� <from@example.com>\r\n"; //������������ � ����� �����������
    mail($to, $subject, $message, $headers); //�������� ������ � ������� ������� mail
    }
?>