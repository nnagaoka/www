<?
$src = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:opensearch="http://a9.com/-/spec/opensearch/1.1/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dcterms="http://purl.org/dc/terms/" xmlns:dcndl="http://ndl.go.jp/dcndl/terms/" version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
  <channel>
    <title>少女マンガ - 国立国会図書館サーチ RSS</title>
    <link>http://iss.ndl.go.jp/books?ar=4e1f&amp;any=%E5%B0%91%E5%A5%B3%E3%83%9E%E3%83%B3%E3%82%AC&amp;except_repository_nos[]=R100000038&amp;except_repository_nos[]=R100000049&amp;except_repository_nos[]=R100000073</link>
    <description>NDL Search</description>
    <language>ja</language>
    <ttl>1440</ttl>
    <atom:link rel="self" href="http://iss.ndl.go.jp/books.rss?ar=4e1f&amp;any=%E5%B0%91%E5%A5%B3%E3%83%9E%E3%83%B3%E3%82%AC&amp;except_repository_nos[]=R100000038&amp;except_repository_nos[]=R100000049&amp;except_repository_nos[]=R100000073"/>
    <atom:link rel="alternate" href="http://iss.ndl.go.jp/books"/>
    <atom:link type="application/opensearchdescription+xml" rel="search" href="http://iss.ndl.go.jp/api/opensearch_description"/>
    <item>
      <title>『美少女戦士セーラームーン』研究論集 : 少女マンガの表象研究会研究報告書</title>
      <link>http://iss.ndl.go.jp/books/R100000002-I026280179-00</link>
<description>
<![CDATA[<p>少女マンガの表象研究会,2015</p>
<ul><li>タイトル： 『美少女戦士セーラームーン』研究論集 : 少女マンガの表象研究会研究報告書</li>
<li>タイトル（読み）： 『 ビショウジョ センシ セーラームーン 』 ケンキュウ ロンシュウ : ショウジョ マンガ ノ ヒョウショウ ケンキュウカイ ケンキュウ ホウコクショ</li>
<li>責任表示： 少女マンガの表象研究会 編,</li>
<li>NDC(9)： 726.101</li>
</ul>]]>
</description>
      <author>少女マンガの表象研究会 編,</author>
      <category>児童書</category>
      <guid isPermaLink="true">http://iss.ndl.go.jp/books/R100000002-I026280179-00</guid>
      <pubDate>Thu, 23 Apr 2015 09:00:00 +0900</pubDate>
      <dc:title>『美少女戦士セーラームーン』研究論集 : 少女マンガの表象研究会研究報告書</dc:title>
      <dcndl:titleTranscription>『 ビショウジョ センシ セーラームーン 』 ケンキュウ ロンシュウ : ショウジョ マンガ ノ ヒョウショウ ケンキュウカイ ケンキュウ ホウコクショ</dcndl:titleTranscription>
      <dc:creator>少女マンガの表象研究会 編</dc:creator>
      <dc:publisher>少女マンガの表象研究会</dc:publisher>
      <dcndl:publicationPlace>JP</dcndl:publicationPlace>
      <dc:date>2015</dc:date>
      <dcterms:issued xsi:type="dcterms:W3CDTF">2015</dcterms:issued>
      <dc:extent>88p ; 26cm</dc:extent>
      <dc:identifier xsi:type="dcndl:NDLBibID">026280179</dc:identifier>
      <dc:identifier xsi:type="dcndl:JPNO">22555485</dc:identifier>
      <dc:subject>美少女戦士セーラームーン (漫画)</dc:subject>
      <dc:subject xsi:type="dcndl:NDLC">KC486</dc:subject>
      <dc:subject xsi:type="dcndl:NDC9">726.101</dc:subject>
      <dcterms:description>執筆: 大城さゆりほか</dcterms:description>
      <rdfs:seeAlso rdf:resource="http://id.ndl.go.jp/bib/026280179"/>
    </item>
      </channel>
</rss>
XML;
$xml = simplexml_load_string($src);
$item = $xml->channel->item[0];
print_r($item);
$ndc9 = $item->xpath('dc:subject[@xsi:type="dcndl:NDC9"]');
print((string)$ndc9[0]);
?>