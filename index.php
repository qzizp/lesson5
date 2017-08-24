<?php 
  $jsonData = file_get_contents(__DIR__ . "./address_book.json"); 
  $data = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link href="https://fonts.googleapis.com/css?family=Neucha&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Домашнее задание №5</title>
</head>
<body>

  <div class="wrapper">
  <table class="address-book-table">
    <tr class="t-header">
      <td>Фамилия</td>
      <td>Адрес</td>
      <td>Палочка</td>
      <td>Питомец</td>
    </tr>
    <?php foreach ($data as $cell) : ?>
    <tr>
      <td><?php echo $cell["lastName"]; ?></td>
      <td><?php echo $cell["address"]; ?></td>
      <td><?php echo $cell["magicWand"]; ?></td>
      <td><?php echo $cell["petName"]; ?></td>
    </tr>
    <?php endforeach; ?>  
  </table>
  <audio src="./decor/soundtrack.mp3" controls="controls" autoplay="autoplay" loop="loop">Тег audio не поддерживается вашим браузером, поэтому саундтрек, к сожалению не слышно.</audio>
  </div>
</body>
</html>