// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=CRUD", "root", "");

// Vérification de la présence de l'identifiant de l'utilisateur à mettre à jour dans l'URL
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

// Vérification de la soumission du formulaire de mise à jour
    if (!empty($_POST)) {
        // Récupération des nouvelles valeurs du formulaire
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $ddn = $_POST['datenaissance'];
        $classe = $_POST['classe'];
        $groupe = $_POST['groupe'];
        $sexe = $_POST['sexe'];
        $telephone = $_POST['telephone'];
        $passwd = $_POST['passwd'];
