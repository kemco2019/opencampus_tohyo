<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/CustomEase.min.js"></script>

<link rel="stylesheet" href="css/tohyo_shukei.css">
<script language="JavaScript">

 function OpenWin(){
  myWin = window.open( "tohyo_button.php",null, 'width=500,toolbar=yes,menubar=yes,scrollbars=yes')
 }
 window.addEventListener('load', OpenWin());
</script>

<!--下記にてAdobeフォントを追加-->
<script>
  (function(d) {
    var config = {
      kitId: 'ole4sqv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<script>
  (function(d) {
    var config = {
      kitId: 'ole4sqv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!--Adobeフォント追加ここまで-->

<?php

$lines = file("data_test.csv");
$line = $lines[0];
$data = explode(",", $line);
$nums = ['<span style="color:#D2392D;">文学部</span>'=>$data[0], '<span style="color:#E5943C;">商学部</span>'=>$data[1], '<span style="color:#E9BE43;">経済学部</span>'=>$data[2], '<span style="color:#97B944;">法学部</span>'=>$data[3], '<span style="color:#3E8D5E;">総合政策学部<br>環境情報学部</span>'=>$data[4], '<span style="color:#5DA0C2;">医学部<br>看護医療学部</span>'=>$data[5], '<span style="color:#3D6FAB;">理工学部</span>'=>$data[6], '<span style="color:#663C85;">薬学部</span>'=>$data[7]];
arsort($nums);
$line2 = implode("," , $data);
?>
<body>
  
  <div class="shukei_title">
    <img src="images/shukei_title.png" class="shukei_title">
  </div>
    <div class="vote_container">
        <div class="ranking">
            <?php
                for($i = 0 ; $i < 8 ; $i++){
            ?>
            <div class="rank">
                <!--<img src="images/one.png" >-->
                <div class="dept"><?php echo array_keys($nums)[$i];?></div>
                <div class="num"><?php echo $nums[array_keys($nums)[$i]];?></div>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="piechart">
            <img src="tohyo_button.php?image=yes" onclick="audio1();">
        </div>
    </div>
    <div class="modal">
        
        <img src="popup.png" class="popupimg">
        <audio id="btn_audio1">
            <source src="ohira_yaruna.mp3" type="audio/mp3">
        </audio>
    </div>
</body>

<script type="module" src="js/gsap-shockingly-green/src/MorphSVGPlugin.js"></script>

<script type="text/javascript" src="js/tohyo_shukei_other.js"></script>
