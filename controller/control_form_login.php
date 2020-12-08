
<?php 
/*
switch ($x){
    case 'email':
        ?><script>alert('Invalit email')</script>;<?php 
        break; 
    case 'password':
        ?><script>alert('Invalit password')</script>;<?php 
        break; 
    default: 
        break;
}
*/

    if (isset($_SESSION['user_id'])) {
        include __DIR__.'/../views/login_result.php';
    } else {
        include __DIR__.'/../views/login_form.php';
    }
?>



