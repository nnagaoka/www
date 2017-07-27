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
        <a href="./index1.html">home</a>
        <?php

          $text= $_GET["text"];
          if($text == ""){
            print("<br><br>値を入力してください<br>");

          }else{


// 検索のカウント                                                               
            print("<br><font size=\"5\">\" ".$text." \"</font><br>");
        ?>
      <?php
            $rss_url = file_get_contents('http://iss.ndl.go.jp/books.rss?ar=4e1f&except_repository_nos[]=R100000038&except_repository_nos[]=R100000049&except_repository_nos[]=R100000073&filters[]=3_国立国会図書館&any='.$text.'');
            $rss_data  = preg_replace( "/<([^>]+?):(.+?)>/", "<$1_$2>", $rss_data );
            $rss_array =array();
            $i         = 0;
            $rss = simplexml_load_string($rss_url, "SimpleXMLElement", LIBXML_NOCDATA);
            foreach ($rss->xpath('//channel/item') as $item) {
              
              $rss_array[$i]['title'] = $item->title;
              $rss_array[$i]['id']  = $item->link;
              
              $rss_array[$i]['ndc9']  = $item->xpath('dc:subject[@xsi:type="dcndl:NDC9"]');

              print("<a href=\"".$rss_array[$i]['link']."\">".$rss_array[$i]['title']."</a><br>");
              print((string)$rss_array[$i]['ndc9'][0]."<br>");
              $i++;
            }
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