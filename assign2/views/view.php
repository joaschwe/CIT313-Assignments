<?php
/**
 * Created by PhpStorm.
 * User: joanna_schweiger
 * Date: 2/25/18
 * Time: 7:11 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Schweiger-Model View Controller</title>
</head>

<body>
    <h1>Hello from my view!</h1>

<?php
    echo '<ul> 
        <li>UserID: ' . $userID . '</li>
        <li>First Name: ' . $firstname . '</li>
        <li>Last Name: ' . $lastname . '</li>
        <li>Email: ' . $email . '</li>
        <li>Role: ' . $role . '</li>
        </ul>';


?>

</body>

</html>