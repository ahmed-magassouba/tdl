<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- lien css -->
    <link rel="stylesheet" href="Css/index.css">

    <!-- lien script js -->
    <script src="Js/index.js"></script>

    <!-- unicon link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <header></header>


    <main>


        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Connexion</span>

                    <form action="#">
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Entez votre email" required>
                            <i class="uil uil-envelope-alt icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" name="mdp"  placeholder="Entez votre mot de passe" required>
                            <i class="uil uil-lock-alt icon"></i>
                            <i class="uil uil-eye-slash showHide"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Se souvenir de moi</label>
                            </div>

                            <a href="" class="text">Mot de passe oublier</a>
                        </div>

                        <div class="input-field button">
                            <input type="button" value="Se connecter">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Pas encore inscris?
                            <a href="#" class="text signup-link">Inscris-toi</a>
                        </span>
                    </div>

                </div>

                <!-- =========== Inscription ========= -->

                <div class="form signUp">
                    <span class="title">Inscription</span>

                    <form action="#">
                        <div class="input-field">
                            <input type="text" name="firstName"  placeholder="Entez votre prénom" required>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" name="lastName"  placeholder="Entez votre nom" required>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Entez votre email" required>
                            <i class="uil uil-envelope-alt icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" name="mdp"  placeholder="Entez votre mot de passe" required>
                            <i class="uil uil-lock-alt icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" name="mdp2"  placeholder="Confirmez votre mot de passe" required>
                            <i class="uil uil-lock-alt icon"></i>
                            <i class="uil uil-eye-slash showHide"></i>
                        </div>
                        <div class="input-field button">
                            <input type="button" value="S'inscrire" id="email">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Déjà inscris?
                            <a href="#" class="text login-link">Se connecter</a>
                        </span>
                    </div>

                </div>

            </div>
        </div>

    </main>


    <footer></footer>
</body>

</html>