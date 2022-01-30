<?php require_once "include/header-form.php";
$user = new User();

if (isset($_POST['create_user'])){
    $user_username = $_POST['user_username'];
    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $error = ['signup_username'=>'','signup_password'=>'','signup_firstname'=>'','signup_surname'=>'','signup_email'=>''];

    if (strlen($user_username) < 4){
        $error['signup_username'] = "Username need to be longer than 4 characters";
    }
    if ($user_username == ''){
        $error['signup_username'] = "Username cannot be empty";
    }
    if ($user->usernameExists($user_username)){
        $error['signup_username'] = "Username already exists";
    }
    if (strlen($user_password) < 8){
        $error['signup_password'] = "Password need to be longer than 8 characters";
    }
    if ($user_password == ''){
        $error['signup_password'] = "Password cannot be empty";
    }
    if ($user_email == ''){
        $error['signup_email'] = "Email cannot be empty";
    }
    if ($user->emailExists($user_email)){
        $error['signup_email'] = "Email already exists";
    }
    if ($user_name == ''){
        $error['signup_firstname'] = "Firstname cannot be empty";
    }
    if ($user_surname == ''){
        $error['signup_surname'] = "Lastname cannot be empty";
    }

    foreach ($error as $key => $value){
        if (empty($value)){
            unset($error[$key]);
        }
    }

    if (empty($error)){
        $user->createUser($user_username,$user_name,$user_surname,$user_password,$user_email);
        redirect("admin/index.php");
    }
}
?>


<section class="register">
<form class="form-contact" action="" method="post" enctype="multipart/form-data">
    <h4>Register</h4>
    <input type="text" name="user_username" placeholder="Username">
    <p class="register__fail"><?php echo isset($error['signup_username']) ? $error['signup_username'] : '' ?></p>
    <input type="text" name="user_name" placeholder="Name">
    <p class="register__fail"><?php echo isset($error['signup_firstname']) ? $error['signup_firstname'] : '' ?></p>
    <input type="text" name="user_surname" placeholder="Surname">
    <p class="register__fail"><?php echo isset($error['signup_surname']) ? $error['signup_surname'] : '' ?></p>
    <input type="email" name="user_email" placeholder="Email">
    <p class="register__fail"><?php echo isset($error['signup_email']) ? $error['signup_email'] : '' ?></p>
    <input type="password" name="user_password" placeholder="Password">
    <p class="register__fail"><?php echo isset($error['signup_password']) ? $error['signup_password'] : '' ?></p>
    <input type="submit" class="btn form-contact__btn" value="Create" name="create_user">
</form>
</section>

<?php require_once "include/footer.php" ?>
