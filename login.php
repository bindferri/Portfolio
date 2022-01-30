<?php require_once "include/header-form.php";

 $user = new User();
 if (isset($_POST['login'])){
     $username = $_POST['login_name'];
     $password = $_POST['login_password'];


     if (!empty($username) && !empty($password)){
         if ($user->verifyLogIn($username,$password)){
             $currentUser = $user->fetchSingleByUsername($username);
             $_SESSION['id'] = $currentUser->user_id;
             $_SESSION['username'] = $username;
             $session->login(true);
             redirect("admin/index.php");
         }else{
             echo "NO";
         }
     }
 }
?>

<section class="register login-page">
    <form class="form-contact" method="post" enctype="multipart/form-data">
        <h4>Log In</h4>
        <input type="text" name="login_name" placeholder="Username">
        <input type="password" name="login_password" placeholder="Password">
        <input type="submit" class="btn form-contact__btn" value="Log In" name="login">
    </form>
</section>

<?php require_once "include/footer.php" ?>
