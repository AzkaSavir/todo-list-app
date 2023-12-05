<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
    <style>
        #welcome-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 20vh;
        }

        #welcome-container button {
            margin-top: 20px;
            width: 500px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        #background-video {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translateX(-50%) translateY(-50%);
            z-index: -1;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        h1 {
            text-align: center;
            color: rgb(91, 91, 91);
        }

        #task-container {
            display: flex;
            margin-bottom: 20px;
        }

        #task-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        li button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        li button:hover {
            background-color: #c82333;
        }

        li input[type="checkbox"] {
            margin-right: 10px;
        }

        #music-controls {
            position: fixed;
            bottom: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
        }

        #music-controls button {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #music-controls button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container" id="welcome-container">
        <h1>to do list app</h1>
        <button onclick="showTodoApp()">Mulai</button>
        <audio id="background-music" loop>
            <source src="lagu.mp3" type="audio/mp3">
            Your browser does not support the audio tag.
        </audio>
    </div>

    <div class="video-container" id="todo-container" style="display: none;">
        <video autoplay muted loop id="background-video">
            <source src="meditating-samurai-moewalls-com.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <h1>To-Do List</h1>
            <div id="task-container">
                <input type="text" id="task-input" placeholder="Tambahkan tugas baru">
                <button onclick="addTask()">Tambah</button>
            </div>
            <ul id="task-list"></ul>
        </div>
        <div id="music-controls">
            <button onclick="toggleMusic()">hentikan Lagu</button>
        </div>

    </div>


    <script>
        function showTodoApp() {
            var welcomeContainer = document.getElementById("welcome-container");
            var todoContainer = document.getElementById("todo-container");
            var backgroundMusic = document.getElementById("background-music");

            welcomeContainer.style.display = "none";
            todoContainer.style.display = "block";

            // Play background music
            backgroundMusic.play();
        }

        function addTask() {
            var taskInput = document.getElementById("task-input");
            var taskList = document.getElementById("task-list");

            if (taskInput.value.trim() !== "") {
                var li = document.createElement("li");
                li.innerHTML = '<input type="checkbox">' + taskInput.value +
                    ' <button onclick="removeTask(this)">Hapus</button>';
                taskList.appendChild(li);
                taskInput.value = "";
            }
        }

        function removeTask(element) {
            var li = element.parentElement;
            li.parentNode.removeChild(li);
        }

        var isMusicPlaying = false;
        var backgroundMusic = document.getElementById("background-music");
        var musicButton = document.querySelector("#music-controls button");

        function toggleMusic() {
            if (isMusicPlaying) {
                backgroundMusic.play();
                musicButton.textContent = "hentikan Lagu";
            } else {
                backgroundMusic.pause();
                musicButton.textContent = "putar Lagu";
            }
            isMusicPlaying = !isMusicPlaying;
        }
    </script>
</body>

</html> -->











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }

        
        body {
            width: 100vw;
            display: flex;
            justify-content: center;
            background-color: cornsilk;
        }

        .container {
            width: 40vw;
            height: auto;
        }

        .card {
            width: 90%;
            margin: 20px;
            background-color: wheat;
            border-radius: 8px;
            box-shadow: 0px 0px 5px #aeaeae;
        }

        .card-header {
            width: 100%;
            background: #0088cc60;
            margin: 0;
            padding: 10px;
        }

        .text-title p {
            font-size: 1.5em;
        }

        .card-body {
            width: 100%;
            box-sizing: border-box;
        }

        .input-group {
            width: 100%;
            display: grid;
            grid-template-columns: 80% 20%;
            box-sizing: border-box;
            grid-gap: 5px;
            padding: 10px;
        }

        .input-task,
        .btn-add {
            padding: 10px;
        }

        .btn-add {
            background-color: #525252;
            color: #ffff;
            border: none;
        }

        .card-list {
            padding: 10px;
            border-bottom: 1px solid #aeaeae;
            display: grid;
            grid-template-columns: 80% 20%;
        }

        .btn-delete {
            background: #ff000070;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            color: #ffff;
            margin: 5px;
        }

        .text-red{
            color: red;
        }

        .btn-check {
            background: #00a653;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            color: #ffff;
            margin: 5px;
        }

        @media screen and (max-width: 480px) {
            .container{
                width: 95vw;
            }
            .input-group {
                grid-template-columns: auto;
            }
            .card-list {
                grid-template-columns: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <p>Todo List App</p>
                </div>
            </div>
            <div class="card-body">
                <div class="input-group">
                    <input type="task" id="task" class="input-task" placeholder="Masukan task ....">
                    <button type="submit" onclick="addTask()" class="btn-add"><b>+</b></button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <p>List Task</p>
                </div>
            </div>
            <div class="card-body" id="list-data">
                <!-- <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem velit, asperiores odio
                            quisquam unde ab maiores est dicta rerum rem.</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque optio, delectus placeat
                            nulla sequi perferendis esse ab fugit totam reprehenderit quasi quibusdam. Animi earum nobis
                            architecto et ipsa nemo perspiciatis accusamus exercitationem delectus in sunt,
                            necessitatibus deserunt itaque distinctio adipisci illum fuga enim aliquam laborum eaque
                            dolor reiciendis. Mollitia, optio.</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
            </div> -->
        </div>
    </div>
</body>

<script src="app.js"></script>


</html>