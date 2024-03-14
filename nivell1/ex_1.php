<?php
// VARIABLES SUPERGLOBALS: $_POST, $_GET, $_REQUEST, $_SESSION, $_COOKIE, $_FILES, $_SERVER, $_ENV

// Creem les variables i les inicialitzem a un valor buit, al fer refresh de la pàgina tornen a estar buides.
$username = "";
$mail = "";
// No és necessari el if statement en aquest cas, però és bona pràctica per controlar el fluxe del programa.
// Per comprovar si el formulari s'ha enviat, d'aquesta manera també ens estalviem el warning que es genera al intentar accedir a una variable que pot no existir.
if (!empty($_POST)) {
    // Com el formulari envia les dades amb el mètode POST, les dades es poden recollir amb la variable $_POST
    $username = $_POST['username'];
    $mail = $_POST['mail'];
}
/*
Una altre manera de comprovar si s'ha enviat el formulari.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $mail = $_POST['mail'];
}*/

echo "El teu nom d'usuari és: " . $username . "<br>";
echo "El teu correu electrònic és: " . $mail . "<br>";
?>

<!-- Utilitzem el mètode POST per enviar les dades del formulari -->
<form action="ex_1.php" method="post">
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
// Es pot posar més codi PHP aquí, aquest codi s'executarà després del formulari.
?>