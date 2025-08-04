<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $postnom = htmlspecialchars($_POST['postnom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $nationalite = htmlspecialchars($_POST['nationalite']);
    $ville = htmlspecialchars($_POST['ville']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);

    // Format d'enregistrement (CSV)
    $ligne = "$nom,$postnom,$prenom,$sexe,$nationalite,$ville,$email,$telephone\n";
    file_put_contents('donnees.txt', $ligne, FILE_APPEND);

    // Message de succès et redirection
    echo "<script>alert('Message envoyé avec succès'); window.location.href='index.php';</script>";
    exit();
} else {
    echo "Invalid request method.";
}
?>