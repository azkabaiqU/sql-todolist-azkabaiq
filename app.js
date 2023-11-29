document.addEventListener('DOMContentLoaded', function () {
    displayTasks();
});

function displayTasks() {
    const content = document.getElementById('content');
    content.innerHTML = '';


    // isi
    fetch('back.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(tasks => {

                const card = document.createElement('div');
                card.classList.add('card');

                const cardlist = document.createElement('div');
                cardlist.classList.add('card-list');

                const todoTEXT = document.createElement('p');
                todoTEXT.textContent = tasks.task_name;





                const areaCardDelete = document.createElement('div');
                areaCardDelete.classList.add('area-card-deleted');

                const cardDeleteCek = document.createElement('div');
                cardDeleteCek.classList.add('card-delete-cek');

                const btnArea = document.createElement('div');
                btnArea.classList.add('btn-area');

                const btnDelete = document.createElement('div');
                btnDelete.classList.add('btn-delete');
                btnDelete.innerHTML = `<button type="submit" onclick="btnDel(${tasks.id})" class="btn-delete"> <img src="x.png" alt="x"> </button>`



                const btnCheck = document.createElement('div');
                btnCheck.classList.add('btn-check');
                btnCheck.innerHTML = `<button type="submit" onclick="toggleChecked(${tasks.id})" class="btn-check"> <img src="chek.png" alt="√"></button>`


                content.appendChild(card);
                card.appendChild(cardlist);
                cardlist.appendChild(todoTEXT);

                card.appendChild(areaCardDelete);

                areaCardDelete.appendChild(cardDeleteCek);
                cardDeleteCek.appendChild(btnArea);
                btnArea.appendChild(btnDelete);
                btnArea.appendChild(btnCheck);
            });
        })
}


function addTask() {
    const taskInput = document.getElementById('task');
    const task = taskInput.value.trim();
    if (task !== '') {
        fetch('back.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    task
                }),
            })
            .then(() => {
                taskInput.value = '';
                displayTasks();
            });
    }
}

// menghapus

function btnDel(id) {
    fetch(`back.php?id=${id}`, {
            method: 'DELETE',
        })
        .then(() => displayTasks())
}


function toggleChecked(id) {
    fetch(`back.php?id=${id}`, {
            method: 'PUT',
        })
        .then(() => displayTasks())
}