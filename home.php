<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP DE MBEMBE IWULA EGIDE</title>
    <link rel="shortcut icon" href="./Assets/icon.jpg" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1, h2, h3, h4 {
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 15px;
            background-color: #2889a7ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="reset"] {
            background-color: #dc3545;
        }
        button:hover {
            opacity: 0.9;
        }
        button[type="reset"]:hover {
            opacity: 0.8;
        }
        div {
            margin-bottom: 20px;
        }
        h1 {
            color: #007bff;
        }
        h2 {
            color: #6c757d;
        }
        h4 {
            color: #343a40;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }
        @media (max-width: 600px) {
            form {
                width: 100%;
                padding: 15px;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                width: calc(100% - 18px);
            }
        }
        @media (max-width: 400px) {
            button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
        @media (max-width: 300px) {
            h1, h2, h4 {
                font-size: 1.2em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.9em;
            }
        }
        @media (max-width: 200px) {
            h1, h2, h4 {
                font-size: 1em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.8em;
            }
        }
        @media (max-width: 100px) {
            h1, h2, h4 {
                font-size: 0.8em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.7em;
            }
        }
        @media (max-width: 50px) {
            h1, h2, h4 {
                font-size: 0.6em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.5em;
            }
        }
        @media (max-width: 25px) {
            h1, h2, h4 {
                font-size: 0.5em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.4em;
            }
        }
        @media (max-width: 10px) {
            h1, h2, h4 {
                font-size: 0.4em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.3em;
            }
        }
        @media (max-width: 5px) {
            h1, h2, h4 {
                font-size: 0.3em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.2em;
            }
        }
        @media (max-width: 2px) {
            h1, h2, h4 {
                font-size: 0.2em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.1em;
            }
        }
        @media (max-width: 1px) {
            h1, h2, h4 {
                font-size: 0.1em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.05em;
            }
        }
        @media (max-width: 0.5px) {
            h1, h2, h4 {
                font-size: 0.05em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.02em;
            }
        }
        @media (max-width: 0.1px) {
            h1, h2, h4 {
                font-size: 0.02em;
            }
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select {
                font-size: 0.01em;
            }
        }

    </style>
</head>
<body>
<div>
    <h1>BAC -3 USCITECH</h1>
    <h4>Noms: MBEMBE IWULA EGIDE AUGUSTIN</h4>
    <h4>Téléphone: +243973822614</h4>
    <h4>Mail: augustinmbe18@gmail.com</h4>
</div>

<div>
    <h2>FORMULAIRE D'INSCRIPTION</h2>
    <form action="traitement.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

         <label for="postnom">Postnom:</label>
        <input type="text" id="postnom" name="postnom" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="sexe">Votre Genre</label>
        <select id="sexe" name="sexe" required>
            <option value="Masculin">Masculin</option>
            <option value="Féminin">Féminin</option>
            <option value="Autre">Autre</option>
        </select><br><br>

        <label for="nationalite">Nationalité:</label>
        <input type="text" id="nationalite" name="nationalite" required><br><br>

        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telephone">Téléphone:</label>
        <input type="tel" id="telephone" name="telephone" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>
    <form method="get" style="text-align:center; margin-top:10px;">
        <button type="submit" name="afficher" value="1">Afficher</button>
    </form>
    <br><br><br><br>

    <!-- Affichage des données enregistrées -->
    <?php if (isset($_GET['afficher']) || isset($_POST['afficher'])): ?>
    <div style="max-width: 800px; margin: auto; background: #fff; padding: 20px; border-radius: 5px; margin-bottom: 30px;">
        <h2>Liste des inscrits</h2>
        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr style="background: #1a99ddff; color: #fff;">
                <th>ID</th>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Nationalité</th>
                <th>Ville</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
            <?php
            if (file_exists('donnees.txt')) {
                $lignes = file('donnees.txt');
                $id = 1;
                foreach ($lignes as $ligne) {
                    $infos = explode(',', trim($ligne));
                    if (count($infos) === 8) {
                        echo '<tr>';
                        echo '<td>' . $id . '</td>';
                        foreach ($infos as $info) {
                            echo '<td>' . htmlspecialchars($info) . '</td>';
                        }
                        echo '</tr>';
                        $id++;
                    }
                }
            }
            ?>
        </table>
    </div>
    <?php endif; ?>
</div>
</body>
</html>