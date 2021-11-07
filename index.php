<?php
$user = 'root';
$pass = '';
$db = 'testhtml';

$db = new mysqli('localhost', $user, $pass, $db) or die("blad");

$wynik = $db->query("select * from klienci");
?>

<!doctype html>

<html>

<head>
<meta charset="utf-8">

</head>

<body>

<table align="center" border="1px" style="width: 600px; line-height:40px;">
    <tr>
        <th colspan="6"><h2>Klienci</h2></th>
</tr>
<t>
    <th> ID </th>
    <th> Imie </th>
    <th> Nazwisko </th>
    <th> Adres </th>
    <th> Nr_telefonu </th>
    <th> Email </th>
</t>

<?php
    while($wiersz = $wynik->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $wiersz['id']; ?></td>
        <td><?php echo $wiersz['imie']; ?></td>
        <td><?php echo $wiersz['nazwisko']; ?></td>
        <td><?php echo $wiersz['adres']; ?></td>
        <td><?php echo $wiersz['nr_telefonu']; ?></td>
        <td><?php echo $wiersz['email']; ?></td>
    </tr>
<?php
    }
?>
</table>

</body>

</html>