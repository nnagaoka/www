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