document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Предотвращаем перезагрузку страницы

    const formData = new FormData(this); // Создаем FormData объект

    fetch('send_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('response-message').innerText = data;
        this.reset(); // Очистка формы
    })
    .catch(error => {
        document.getElementById('response-message').innerText = "Ошибка при отправке заявки.";
        console.error('Ошибка:', error);
    });
});