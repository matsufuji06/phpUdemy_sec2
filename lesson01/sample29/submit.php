<?php
$file = $_FILES['picture'];
if($file['type'] === 'image/jpeg' || $file['type'] === 'image/png') {
  $path = 'images/' . $file['name'];
  // ↓画像を表示する
  $success = move_uploaded_file($file['tmp_name'], $path); 
  
  if($success) {
    echo '成功しました';
  } else {
    echo '失敗しました';
  }

} else {
  echo 'ファイル形式が不正です';
}
// ↓情報を表示する
// var_dump($file);

?>