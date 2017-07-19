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
        <br>
        <br>   
        <br>
        <?php
$host = "localhost";
if (!$conn = mysqli_connect($host, "72k1", "Obake<72")){
    die("データベース接続エラー.<br />");
}
mysqli_select_db($conn, "opac");
mysqli_set_charset($conn, "utf8");

if($_GET["text"] == ""){
    print("<br><br>値を入力してください<br>");

}else{
    $text = mysqli_escape_string($conn, $_GET["text"]);
    $text = str_replace("%", "\%", $text);

// 検索のカウント                                                               
    print("<br><font size=\"5\">\" ".$text." \"</font><br>");
    ?>
    <?php
  		$rss = simplexml_load_file('http://iss.ndl.go.jp/books.rss?ar=4e1f&except_repository_nos[]=R100000038&except_repository_nos[]=R100000049&except_repository_nos[]=R100000073&filters[]=3_国立国会図書館&any='.$_GET["text"].'');
		echo '<ol>';
		foreach($rss->channel->item as $item){
        	$title = $item->title;
        	$date = date("Y年 n月 j日", strtotime($item->pubDate));
        	$link = $item->link;
        	$description = mb_strimwidth (strip_tags($item->description), 0 , 110, "…Read More", "utf-8");
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