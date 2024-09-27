<?php
session_start();
// remove all session variables
//session_unset();
// destroy the session
//session_destroy();

// Creem les variables i les inicialitzem a un valor buit, al fer refresh de la pàgina tornen a estar buides.
$username = "";
$mail = "";
// No és necessari el if statement en aquest cas, però és bona pràctica per controlar el fluxe del programa.
// Per comprovar si el formulari s'ha enviat, d'aquesta manera també ens estalviem el warning que es genera al intentar accedir a una variable que pot no existir.
if (!empty($_POST)) {
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    // Guardem les dades a la sessió per poder-les utilitzar en altres pàgines.
    $_SESSION['username'] = $username;
    $_SESSION['mail'] = $mail;
}

echo "El teu nom d'usuari és: " . $username . "<br>";
echo "El teu correu electrònic és: " . $mail . "<br>";
?>

<!-- Utilitzem el mètode POST per enviar les dades del formulari -->
<form action="ex_2.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="mail" name="mail">
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>


<?php
// Impremeix les dades de la sessió, en aquest cas un array amb les dades dels usuaris.
print_r($_SESSION);
?>