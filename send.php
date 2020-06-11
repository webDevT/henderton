<?php
    /*ПОМЕЩАЕМ ДАННЫЕ ИЗ ПОЛЕЙ В ПЕРЕМЕННЫЕ*/
    $name = $_POST["name"];
    $company = $_POST["company"];
    $text_comment = $_POST["text_comment"];
    $howhear = $_POST["how-hear"];
    $email = $_POST["email"];
    $phone = $_POST["tel1"];
    $phone2 = $_POST["tel2"];
    $phone3 = $_POST["tel3"];
    

    /*ЗДЕСЬ ПРОВЕРЯЕМ ЕСЛИ ХОТЯ БЫ ОДНО ИЗ ПОЛЕЙ НЕ ЗАПОЛНЕНО МЫ ВОЗВРАЩАЕМ СООБЩЕНИЕ*/
    if($name=="" or $email=="" or $text_comment==""){ 
        echo "<div>Please fill in all fields.</div>";
    }


    else{
        /*ЕСЛИ ВСЕ ПОЛЯ ЗАПОЛНЕНЫ НАЧИНАЕМ СОБИРАТЬ ДАННЫЕ ДЛЯ ОТПРАВКИ*/
        $to = "karinadesyatnik27@gmail.com"; /* Адрес, куда отправляем письма*/
        $subject = "Henderton"; /*Тема письма*/
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: <henderton>\r\n";/*ОТ КОГО*/
        

        /*ВО ВНУТРЬ ПЕРЕМЕННОЙ $message ЗАПИСЫВАЕМ ДАННЫЕ ИЗ ПОЛЕЙ */
        $message .= "Name: ".$name. "\n"."<br/>"; 
        $message .= "Company: ".$company."\n"."<br/>"; 
        $message .= "Project: ".$text_comment."\n"."<br/>"; 
        $message .= "How did you hear about Henderton? ".$howhear."\n"."<br/>"; 
        $message .= "Email: ".$email."\n"."<br/>"; 
        $message .= "Phone: ".$phone."\n";
        $message .= "".$phone2."\n"; 
        $message .= "".$phone3."\n"; 
        


        /*ДЛЯ ОТЛАДКИ ВЫ МОЖЕТЕ ПРОВЕРИТЬ ПРАВИЛЬНО ЛИ ЗАПИСАЛИCM ДАННЫЕ ИЗ ПОЛЕЙ*/ 

        $send = mail($to, $subject, $message, $headers);

        /*ЕСЛИ ПИСЬМО ОТПРАВЛЕНО УСПЕШНО ВЫВОДИМ СООБЩЕНИЕ*/
        if ($send == "true")
        {
            echo "Thank! Your message has been sent.\r\n";
        }
        /*ЕСЛИ ПИСЬМО НЕ УДАЛОСЬ ОТПРАВИТЬ ВЫВОДИМ СООБЩЕНИЕ ОБ ОШИБКЕ*/
        else
        {
            echo "Failed to send, try again!";
        }
    }

?>