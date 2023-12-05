document.addEventListener('DOMContentLoaded', function(){
    displayTask();
});

function displayTask(){
    const todoList = document.getElementById('list-data');
    todoList.innerHTML = ''

    fetch('backend.php')
        .then(response => response.json())
        .then(data =>{
            console.log(data)
            data.forEach(tasks => {
                const cardList = document.createElement('div');
                cardList.classList.add('card-list');

                const listArea = document.createElement('div');
                listArea.classList.add('list-area');
                
                const listText = document.createElement('p');

                if (tasks.completed === '1'){
                    listText.style.color = '#0088cc';
                }
                listText.textContent = tasks.task_name;


                // button
                const btnArea = document.createElement('div');
                btnArea.classList.add('btn-area');

                const btnCheck = document.createElement('div');
                btnCheck.innerHTML = `<button type="submit" onclick="toggleComplete(${tasks.id})" class="btn-check">Check</button>`;

                const btnDelete = document.createElement('div');
                btnDelete.innerHTML = `<button type="submit" onclick="toggleDelete(${tasks.id})" class="btn-delete">delete</button>`;




                todoList.appendChild(cardList);
                cardList.appendChild(listArea);
                listArea.appendChild(listText);
                cardList.appendChild(btnArea);
                btnArea.appendChild(btnCheck);
                btnArea.appendChild(btnDelete);
            });
        })
}

function addTask(){
    const taskInput = document.getElementById('task');
    const task = taskInput.value.trim();
    if(task !== ''){
        fetch('backend.php', {
            method: 'POST',
            headers: {
                'content-Type' : 'application/json',
            },
            body: JSON.stringify({
                task
            }),
        })
        .then(()=>{
            taskInput.value = '';
            displayTask();
        });
    }
}

function toggleDelete(id) {
    fetch(`backend.php?id=${id}`, {
        method: 'DELETE',
    })
    .then(() => displayTask());
}

function toggleComplete(id) {
    fetch(`backend.php?id=${id}`, {
        method: 'PUT',
    })
    .then(() => displayTask());
}