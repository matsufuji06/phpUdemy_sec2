<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample20</title>
</head>
<body>
  <!-- ↓送信側のメソッドがpostの時は$_POSTが安全性の観点から無難 -->
  <?php if(!empty($_REQUEST['my_name'])): ?>
    <!-- index.htmlのname属性に一致 -->
    <p>お名前：<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
  <?php endif; ?>
</body>
</html>