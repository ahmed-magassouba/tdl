<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- lien css -->
    <link rel="stylesheet" href="Css/todolist.css">

    <!-- lien UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- lien script js -->
    <script src="Js/todolist.js"></script>
</head>

<body>
    <!-- ========================== HEADER ========================= -->

    <header>

    </header>


    <!-- ========================== Main ========================= -->
    <main>

        <!-- ======= formulaire ======= -->
       
            <input type="text" name="text" id="text" placeholder="Ajouter une tache...">
            <div class="priority">
                <label for="prio">
                    <input type="radio" name="grade" id="prio">
                    Prioritaire
                </label>

                <label for="op">
                    <input type="radio" name="grade" id="op">
                    Optionnel
                </label>

                <button id="addButton">Ajouter</button>
            </div>
      
        <!-- ======= liste des taches ======= -->
        <div class="container">

            <!-- ======= section des nouvelles taches ======= -->
            <section class="newTask">
                <h3>Nouvelle tâche</h3>
                <ol class="newTaskList">
                    <!-- <li>
                        tache
                       <button><i class="uil uil-trash-alt supp"></i></button> 
                       <button> <i class="uil uil-check-circle valid"></i></button>
                    </li> -->
                </ol>
            </section>


            <!-- ======= section des taches non complete ======= -->
            <section class="taskNotComp">
                <h3>Tâche en cours</h3>
                <ol class="taskNotCompList">
                    <!-- <li>
                        tache
                        <i class="uil uil-trash-alt supp"></i>
                        <i class="uil uil-check-circle valid"></i>
                    </li> -->
                </ol>
            </section>

            <!-- ======= section des taches complete ======= -->
            <section class="taskComp">
                <h3>Tâche complète</h3>
                <ol class="taskCompList">
                    <!-- <li>
                        tache
                        <i class="uil uil-trash-alt supp"></i>
                    </li> -->
                </ol>
            </section>

        </div>

    </main>

    <!-- ==========================FOOTER========================= -->
    <footer>

    </footer>
</body>

</html>