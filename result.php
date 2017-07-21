<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/T
R/html4/frameset.dtd">

<html>
<head>
      <title>検索結果</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <div id="container">
    <div id="boxA">
        <br>
        <br>
        <br>
        <br>
    </div>

    <div id="boxB">
b
    </div>

    <div id="boxC">
        <a href="./">home</a>
        <br>
        <br>   
        <br>
        <?php

$text = $_GET["text"];
if($text == ""){
    print("<br><br>値を入力してください<br>");

}else{

// 検索のカウント                                                               
    print("<br><font size=\"5\">\" ".$text." \"</font><br>");
    ?>
   <?php
                $rss = simplexml_load_file('http://iss.ndl.go.jp/books.rss?ar=4e1f&except_repository_nos[]=R100000038&except_repository_nos[]=R100000049&except_repository_nos[]=R100000073&filters[]=3_国立国会図書館&any='.$text.'');
                echo '<ol>';
                foreach($rss->channel->item as $item){
                $title = $item->title;
                $link = $item->link;
        ?>
        <li><a href="<?php echo $link; ?>" target="_blank">
            <span class="title"><?php echo $title; ?></span>

        </a></li>
        <?php }  echo '</ol>';
  }
        ?>
	

    </div>

    <div id="boxD">
      <form style="display: inline" method="GET" action="result.php">
        <input type="text" name="text" style="width:150px;height:10px;">
        <input id="bo" type="submit" value="検索">
        </form>
    </div>

    <div id="line">
     <br>
    </div> 

    <div id="boxE">
     <br>
     <br>
    </div>
  </div>

    <br>
   
</body>
</html>