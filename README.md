# 2023オープンキャンパス用投票ページ
# 概要
- tohyo_shukei.php: 集計用
- tohyo_button.php: 投票用
- 3d1, 3d2, post1, post2, post3.php: 景品表示用
- data_test.csv: 集計データ保持用

# 使い方
## 投票方法
浮世絵の投票と同じ

リセットするときは data_test.csvを全部1にする。0にすると多分壊れるのでダメ。

## 確率変更方法
js/tohyo_shukei/others.js内の以下の部分を変更
```
function pagejump() {
    var rand = getRandomInt(20);
  if (rand>=19){
    location.href='https://studio.kemco.keio.ac.jp/opencampus/tohyo/3d1.php';
  } else if(rand>=18){
    location.href='https://studio.kemco.keio.ac.jp/opencampus/tohyo/3d2.php';
  } else if(rand>=12){
    location.href='https://studio.kemco.keio.ac.jp/opencampus/tohyo/post1.php';
  } else if(rand>=6){
    location.href='https://studio.kemco.keio.ac.jp/opencampus/tohyo/post2.php';
  } else if(rand>=0){
    location.href='https://studio.kemco.keio.ac.jp/opencampus/tohyo/post3.php';
  }
    
}
```
