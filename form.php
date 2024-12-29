<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="form.php" method="POST">

Email: <input name="login_email" type="email"/>
Password: <input name="login_password" type="password"/>

<button type="submit">Submit</button>
</form>

</body>
</html>

<?php
if (isset($_POST['login_email'])) {
    print_r($_POST);
}
// if (isset($_GET)) {
//     print_r($_GET);
// }
?>