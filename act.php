  <?php session_start() ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <style>
        .blue {
          background: blue;
        }
      </style>
    </head>
    <body>
      <div class="blue">Логотип</div>
      <?php 
      if (!isset($_SESSION['a'])){
      ?>
      <form method="POST" action="http://localhost/a.php" >
        <label>Имя <br>
      <input type="text" name="name" placeholder="name">
    </label>
    <br>
    <label>Фамилия <br>
      <input type="text" name="surname" placeholder="surname">
      </label>
      <br>
      <label>отчество <br>
      <input type="text" name="patronymic" placeholder="patronymic">
      </label>
      <br>
      <button type="submit">Отправить</button>
      </form>
      <?php }
      else{
        echo $_SESSION['Добро пожалавать'];
      };
      ?>
    </body>
  </html>
