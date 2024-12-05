<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $details = htmlspecialchars(trim($_POST['details']));
    
    $to = "your_email@example.com"; // Замените на ваш e-mail
    $subject = "Новая заявка на монтаж кондиционера";
    $message = "Имя: $name\nТелефон: $phone\nДетали заказа: $details";
    $headers = "From: byclimat@yandex.by"; // Замените на ваш адрес

    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо, $name! Ваша заявка отправлена.";
    } else {
        echo "Ошибка при отправке заявки. Пожалуйста, попробуйте еще раз.";
    }
} else {
    echo "Некорректный запрос.";
}
?>