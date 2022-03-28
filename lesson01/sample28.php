<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample28</title>
</head>
<body>
  <?php
  $ramdom = rand(0, 1);
  // echo $ramdom;
  if($ramdom === 0) {
    echo 'ハズレです';
  } else {
    echo '当たりです';
  }

  ?>
</body>
</html>