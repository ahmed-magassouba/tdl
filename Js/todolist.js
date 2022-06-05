document.addEventListener("DOMContentLoaded", function () {

    const task = document.querySelector('#text');
    console.log(task);
    const add = document.querySelector('#addButton');
    console.log(add);



    /* ========== CREATION NOUVELLE TACHE =========== */
    add.addEventListener("click", addList);

    task.addEventListener("keyup", (e) => {
            (e.keyCode === 13 ? addList(e) : null);
    })

    function addList(e) {
        const newTask = document.querySelector(".newTaskList");
        const notCompleted = document.querySelector(".taskNotCompList");
        const completed = document.querySelector(".taskCompList");

        let date = new Date();
        let dateLocale = date.toLocaleString('fr-FR', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        });


        const newList = document.createElement('li');

        const valid = document.createElement('button');
        valid.innerHTML = '<i class="uil uil-check-circle valid"></i>';

        const supp = document.createElement('button');
        supp.innerHTML = '<i class="uil uil-trash-alt supp"></i>';

        const creationDate = document.createElement('span')

        creationDate.classList.add("creationDate");
        creationDate.innerHTML = "Créée le " + dateLocale;

        if (task.value !== '') {
            newList.textContent = task.value;
            task.value = '';
            newTask.appendChild(newList);
            newList.appendChild(supp);
            newList.appendChild(valid);
            newList.appendChild(creationDate);
        }

        valid.addEventListener("click", function () {
            const parent = this.parentNode;
            console.log(parent)
            parent.remove();
            notCompleted.appendChild(parent);

            valid.addEventListener("click", function () {
                const parent = this.parentNode;
                console.log(parent)
                parent.remove();
                completed.appendChild(parent);
                valid.remove();

                let dateFin = new Date();
                let dateLocaleFin = dateFin.toLocaleString('fr-FR', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: 'numeric',
                    minute: 'numeric',
                    second: 'numeric'
                });

                const endDate = document.createElement('span')

                endDate.classList.add("endDate");
                endDate.innerHTML = "Finis le " + dateLocaleFin;
                newList.appendChild(endDate);
            })

        })






        supp.addEventListener("click", function () {
            const parent = this.parentNode;
            console.log(parent)
            parent.remove();
        })




    }













})