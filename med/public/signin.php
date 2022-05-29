<?php
$title = "Movies | Registrati";

require "../src/Connection/Connection.php";
require_once "../layouts/header.php";


$pdo = Connection::getPDO();

$error = false;
if (
    isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['passwordConfirm'])
    && (!empty($_POST['username']) && $_POST['password'])
) {

    if ($_POST['password'] === $_POST['passwordConfirm']) {
        $query = $pdo->prepare("SELECT email FROM user WHERE email = :email");
        $query->execute([$_POST['email']]);
        $exit = $query->fetch();
        if ($exit) {
            $error = 'Utente Già esistente!';
        } else {
            $query = $pdo->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
            $well = $query->execute([
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]);
            if ($well) {
                header('Location: index.php');
            }
        }
    } else {
        $error = 'Le due password non corrispondono!';
    }
}

?>

<div class="login content">
    <?php if ($error) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
    <?php endif ?>
    <form action="signin.php" method="POST">
        <div class="form-group">
            <input type="text" name="username" placeholder="username" class="form-control" value="">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="email" class="form-control" value="">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="password" class="form-control" value="">
        </div>
        <div class="form-group">
            <input type="password" name="passwordConfirm" placeholder="conferma password" class="form-control" value="">
        </div>
        <div class="form-flex">
            <button type="submit" class="btn">Iscriviti</button>
            <span>sei già registrato?
                <a href="login.php">Accedi</a>
            </span>
        </div>
    </form>
</div>

<?php require_once "../layouts/footer.php";  ?>