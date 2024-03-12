<?php

if (is_null(@$_POST["num"])){

} else {
    $num=@$_POST["num"];
    $lines = file("data_test.csv");
    $line = $lines[0];
    $data = explode(",", $line);
    
    if ($num=="1"){
        $data[0]++;
    }elseif($num=="2"){
        $data[1]++;
    }elseif($num=="3"){
        $data[2]++;
    }elseif($num=="4"){
        $data[3]++;
    }elseif($num=="5"){
        $data[4]++;
    }elseif($num=="6"){
        $data[5]++;
    }elseif($num=="7"){
        $data[6]++;
    }elseif($num=="8"){
        $data[7]++;
    }
    $line2 = implode("," , $data);
    $fp=fopen("data_test.csv","w");
    fputs($fp,$line2);
    fclose($fp);
}
$color = array(
    array('文学部', 210, 57, 47),
    array('商学部', 229, 148, 60),
    array('経済学部', 233, 190, 67),
    array('法学部', 151, 185, 68),
    array('SFC', 62, 141, 94),
    array('医学部', 93, 160, 195),
    array('理工学部', 62, 111, 171),
    array('薬学部', 102, 60, 133)
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
    $img = imagecreate(1000, 1000);
    imagecolorallocatealpha($img, 255, 255, 255, 127);
    for ($i = 0; $i < count($color); $i++) {
      $c = $color[$i];
      $col = imagecolorallocate($img, $c[1], $c[2], $c[3]);
      imagefilledarc($img, 500, 500, 980, 980, $deg[$i], $deg[$i + 1], $col, IMG_ARC_PIE);
    }
    imagepng($img);
    exit();
  }
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/tohyo_button.css">
</head>
<body>
<div id="gradient">
	<br>
<div style="text-align:center;">
<div class="wrap">
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form1">
        <input type="hidden" value="1" name="num">
        <img src="images/1.png" onclick="submit1()">
      </form>
    </div>
  </div>
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form6">
        <input type="hidden" value="6" name="num">
        <img src="images/5.png" onclick="submit6()">
      </form>
    </div>
  </div>
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form2">
        <input type="hidden" value="2" name="num">
        <img src="images/4.png" onclick="submit2()">
      </form>
    </div>
  </div>
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form7">
        <input type="hidden" value="7" name="num">
        <img src="images/6.png" onclick="submit7()">
      </form>
    </div>
  </div>
    <div class="item">
      <img src="images/instruction.png">
    </div>
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form4">
        <input type="hidden" value="4" name="num">
        <img src="images/3.png" onclick="submit4()">
      </form>
    </div>
  </div>
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form3">
        <input type="hidden" value="3" name="num">
        <img src="images/2.png" onclick="submit3()">
      </form>
    </div>
  </div>
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form5">
        <input type="hidden" value="5" name="num">
        <img src="images/7.png" onclick="submit5()">
      </form>
    </div>
  </div>
  <div class="item">
    <div class="forms">
      <form action="tohyo_button.php" method="post" name="Form8">
        <input type="hidden" value="8" name="num">
        <img src="images/8.png" onclick="submit8()">
      </form>
    </div>
  </div>
</body>

<script language="JavaScript">
    function submit1(){
        document.forms["Form1"].submit();
        myWin = window.opener.clicked1();
    }
    function submit2(){
        document.forms["Form2"].submit();
        myWin = window.opener.clicked1();
    }
    function submit3(){
        document.forms["Form3"].submit();
        myWin = window.opener.clicked1();
    }
    function submit4(){
        document.forms["Form4"].submit();
        myWin = window.opener.clicked1();
    }
    function submit5(){
        document.forms["Form5"].submit();
        myWin = window.opener.clicked1();
    }
    function submit6(){
        document.forms["Form6"].submit();
        myWin = window.opener.clicked1();
    }
    function submit7(){
        document.forms["Form7"].submit();
        myWin = window.opener.clicked1();
    }
    function submit8(){
        document.forms["Form8"].submit();
        myWin = window.opener.clicked1();
    }
</script>
</div>


<div id="footer">
    Copyright © 2023 KeMCo Reserved.
</div>


</body>


</html>
