<?php
$color = array(
  array('赤', 255, 0, 0),
  array('黄', 255, 255, 0),
  array('緑', 0, 255, 0),
  array('水', 0, 255, 255),
  array('青', 0, 0, 255),
  array('紫', 255, 0, 255),
);
$lines = file("data_test.csv");
$line = $lines[0];
$data = explode(",", $line);

// 画像表示時の処理
if ($_GET['image'] == 'yes') {
  $sum = 0;
  for ($i = 0; $i < count($color); $i++) $sum +=$data[$i];
  $ad = 0;
  $deg = array(270);
  for ($i = 0; $i < count($color); $i++) {
    $ad += $data[$i];
    $deg[$i + 1] = (int)(($ad / $sum) * 360) + 270;
  }
  header("Content-Type: image/png");
  $img = imagecreate(200, 200);
  imagecolorallocate($img, 255, 255, 255);
  for ($i = 0; $i < count($color); $i++) {
    $c = $color[$i];
    $col = imagecolorallocate($img, $c[1], $c[2], $c[3]);
    imagefilledarc($img, 100, 100, 190, 190, $deg[$i], $deg[$i + 1], $col, IMG_ARC_PIE);
  }
  imagepng($img);
  exit();
}

// 投票時の処理
if ($_POST['submit']) {
  $data[$_POST['cn']]++;
  $fp = fopen('gdenq.txt', 'w');
  for ($i = 0; $i < count($color); $i++) {
    fwrite($fp, $data[$i] . "\n");
  }
  fclose($fp);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>アンケート</title>
</head>
<body>
<form method="post" action="test.php">
あなたが好きな色は？<br><br>
<?php
for ($i = 0; $i < count($color); $i++) {
  print "<input type='radio' name='cn' value='$i'>{$color[$i][0]}<br>\n";
}
?>
<br>
<input type="submit" name="submit" value="投票">
</form>
<img src="test.php?image=yes"><br>
<?php
for ($i = 0; $i < count($color); $i++) {
  print "{$color[$i][0]} {$data[$i]} 票<br>\n";
}
?>
</body>
</html>