<?php
$title = "Movies | Login";

require "../src/Connection/Connection.php";
require_once "../layouts/header.php";

$pdo = Connection::getPDO();

if (isset($_POST['username'], $_POST['password']) && (!empty($_POST['username']) && $_POST['password'])) {
    echo 'yes';
}
?>

<div class="login content">
    <form action="login.php" method="POST">
        <div class="form-group">
            <input type="text" name="username" placeholder="username" class="form-control" value="">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="password" class="form-control" value="">
        </div>
        <div class="form-flex">
            <button type="submit" class="btn">Accedi</button>
            <span>non ancora registrato?
                <a href="signin.php">Registrati</a>
            </span>
        </div>
    </form>
</div>

<?php require_once "../layouts/footer.php";  ?>