<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>山田早紀子 制作実績</title>
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>

<!-- Head[Start] -->
<header>
  <div class="a">
    <p class="text-center1">
    児童書の編集・ライティング
    </p>

    <h1 class="text-center2">
    山田　早紀子
    </h1>

    <p class="text-center3">
    子ども向けの文章のライティングや、イラストや写真を用いて<br>
    楽しくわかりやすく説明する紙面構成の提案を得意としています
    </p>
    
    <div class="center"><img src ="top_book.jpg" alt="本"></div>
  </div>


  <!--
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="select.php">
        <img src="icon.jpg" alt="本">
          <p class="text-center">
          WORK LIST<br>
          制作実績
          </p>
        </a>
      </div>
    </div>
  </nav>
  -->

  <div class="b">
    <p class="text-center4">WORK LIST</p>
    <p class="text-center5">制作実績</p>
  </div>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<p class="jisseki">制作実績を登録する</p>

<div class="c">
  <form method="post" action="insert.php">
    <div class="jumbotron">
    <!--<fieldset>-->
      <!--<legend>フリーアンケート</legend>-->
      <div class="p_iptxt">
        <label><input type="text" name="publisher" placeholder="出版社"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
         <label><input type="text" name="title" placeholder="書名"></label><br>
         <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
        <label><input type="date" name="date" placeholder="発行日"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
        <label><input type="text" name="kanshu" placeholder="スタッフ　監修"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
        <label><input type="text" name="soutei" placeholder="スタッフ　装丁"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      
      <div class="p_iptxt">
        <label><input type="text" name="design" placeholder="スタッフ　本文デザイン"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>
      
      <div class="p_iptxt">
        <label><input type="text" name="illust" placeholder="スタッフ　イラスト"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
        <label><input type="text" name="photo" placeholder="スタッフ　撮影"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
        <label><input type="text" name="writer" placeholder="執筆協力"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
        <label><input type="text" name="other" placeholder="備考"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>

      <div class="p_iptxt">
        <label><input type="file" name="file" placeholder="表紙画像"></label><br>
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>
    
      <input type="submit" value="送信">
    <!--</fieldset>-->
    </div>
  </form>
</div>
<!-- Main[End] -->

</body>
</html>
