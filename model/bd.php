<?php

  $mysqli = @new mysqli('localhost', 'root', 'pro100vlad', 'shared_future');

  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }