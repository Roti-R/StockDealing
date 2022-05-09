<?php

require 'vendor/autoload.php';
//require 'DateInfo.php';

use Symfony\Component\DomCrawler\Crawler;

function convertCommaTextToNumber(string $text) : float
{
    $b = str_replace( ',', '', $text );
    if( is_numeric( $b ) ) { $text = $b; }
    return (float)$text;
}

$url = "http://www.cophieu68.vn/historyprice.php?id=%5Evnindex";    //Init a Crawler
$html = file_get_contents($url);
$crawler = new Crawler($html);


$listDateInfo = [];
$crawler->filter('div#snapshot div#content table tr')->each(function (Crawler $tr, $i = 0) use (&$listDateInfo){   //Crawl the data from website

    if($i <= 50) {
        $listTd = $tr->filter('td');
        $DateInfo = [
            'date' => $listTd->eq(1)->text(),
            'price' => $listTd->eq(5)->text(),
            'openPrice' => $listTd->eq(7)->text(),
            'highPrice' => $listTd->eq(8)->text(),
            'lowPrice' => $listTd->eq(9)->text(),
            'weight' => $listTd->eq(6)->text(),
            'changePercent' => $listTd->eq(4)->text(),
        ];
        $listDateInfo[] = $DateInfo;
    }

});
array_splice($listDateInfo,0,1);

$listDateInfolength = count($listDateInfo); //Convert data to integer
for($i = 0; $i < $listDateInfolength; $i++)
{
    $listDateInfo[$i]['price'] = convertCommaTextToNumber($listDateInfo[$i]['price']);
    $listDateInfo[$i]['openPrice'] = convertCommaTextToNumber($listDateInfo[$i]['openPrice']);
    $listDateInfo[$i]['highPrice'] = convertCommaTextToNumber($listDateInfo[$i]['highPrice']);
    $listDateInfo[$i]['lowPrice'] = convertCommaTextToNumber($listDateInfo[$i]['lowPrice']);
    $listDateInfo[$i]['weight'] = convertCommaTextToNumber($listDateInfo[$i]['weight']);
    $listDateInfo[$i]['changePercent'] = convertCommaTextToNumber($listDateInfo[$i]['changePercent']);
}

print_r($listDateInfo);


?>