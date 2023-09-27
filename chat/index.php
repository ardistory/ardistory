<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <h1 class="judul">Chat V1.0</h1>
    <div class="container">
        <div class="chat-box">
            <div class="new-message">
                <div class="photo-and-message">
                    <img src="freya.jpg" class="photo-profile">
                    <span class="name-user">Freya</span>
                    <span class="message">Hay.. Selamat Datang 😊</span>
                </div>
            </div>
        </div>
        <form method="POST">
            <input class="input-message" id="inputNewMessage" placeholder="Masukan pesan..."></input>
            <button id="submit">Send</button>
        </form>

    </div>

    <script>
        const submit = document.getElementById('submit');
        const inputNewMessage = document.querySelector('input.input-message');
        const chatBox = document.querySelector('div.new-message');
        const scrollan = document.querySelector('div.chat-box');
        submit.addEventListener('click', function(e) {
            e.preventDefault();
            const div = document.createElement('div');
            const span1 = document.createElement('span');
            const span2 = document.createElement('span');
            const img = document.createElement('img');

            div.setAttribute('class', 'photo-and-message');
            span1.setAttribute('class', 'name-user');
            span1.textContent = 'You';
            span2.setAttribute('class', 'message');
            span2.textContent = inputNewMessage.value;
            img.setAttribute('src', 'profile.gif');
            img.classList.add('photo-profile');

            div.appendChild(img);
            div.appendChild(span1);
            div.appendChild(span2);
            chatBox.appendChild(div);

            inputNewMessage.value = '';
            scrollan.scrollTop = scrollan.scrollHeight;
        });
    </script>

</body>

</html>