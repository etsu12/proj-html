<?php
$user = 'root';
$pass = '';
$db = 'testhtml';

$db = new mysqli('localhost', $user, $pass, $db) or die("blad");

$wynik = $db->query("select * from ksiazki");
?>

<!doctype html>

<html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" href="mystyle.css">

<title>Strona główna</title>
</head>

<div id="logo">
  <a href="main.html">
    <img src="logo-placeholder.png" alt="Strona główna" style="width:500px;height:100px;">
  </a>
</div>
<div>
<ul>
  <li><a class="aktywny" href="#home">Strona główna</a></li>
  <li><a href="aktualnosci.html">Aktualności</a></li>
  <li><a href="galeria.html">Galeria</a></li>
  <li><a href="kontakt.html">Kontakt</a></li>
</ul>
</div>

<div id="inside">
  <div id="content">
    <br>
    <b><font size="6">Rezerwacja książki</font></b>
    <hr>
    <form action="" method="post">
        <div class="elem">
            <label for="dane">Imię i nazwisko</label>
            <input type="text" id="dane" name="dane_klienta" placeholder="Jan Kowalski" required>
        </div>
        <div class="elem">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email_klienta" placeholder="jan.kowalski@email.com" required></input>
        </div>
        <div class="elem">
            <label for="nr_telefonu">Numer telefonu</label>
            <input type="tel" id="nr_tel" placeholder="123-456-789" required>
        </div>
        <div class="elem">
            <label for="data_zwrotu">Data zwrotu</label>
            <input type="date" id="data_zwrotu" name="zwrot" style="width: 300px;" required>
        </div>
        <div class="elem">
            <label for="ksiazka">Wybierz książkę</label>
            <select id="ksiazka" name="ksiazka" required>
                <?php
                while($rows = mysqli_fetch_assoc(@$wynik)) {
                    ?>
                <option value=<?php echo $rows['tytul'];?>"><?php echo $rows['tytul'];?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="elem">
            <label for="message">Uwagi</label>
            <textarea id="uwagi" name="uwagi" placeholder="Opcjonalne uwagi do rezerwacji"></textarea>
        </div>
        <button type="submit">Rezerwuj</button>
    </form>
    <br>
  </div>
</div>
</body>

</html>