<?php
/**
 * Created by PhpStorm.
 * User: Flint
 * Date: 20.08.2018
 * Time: 16:29
 */
//function getWeather()
//{
//    $db = new PDO('mysql:host=192.168.1.105;dbname=bwttestbase', 'root', '');
//    $xml = simplexml_load_file("http://informer.gismeteo.ru/xml/34519_1.xml");
//
//
//    $cur_time = date('G');
//    $cur_date = date('d.m.Y');
//
//
//    switch ($cur_time) {
//        case  ($cur_time >= 3 && $cur_time < 9):
//            $tod = 1;
//            break;
//        case  ($cur_time >= 9 && $cur_time < 15):
//            $tod = 2;
//            break;
//        case  ($cur_time >= 15 && $cur_time < 21):
//            $tod = 3;
//            break;
//        case  (($cur_time >= 21 && $cur_time < 23) ||
//            ($cur_time >= 0 && $cur_time < 3)):
//            $tod = 0;
//            break;
//
//
//        default:
//            $tod = 0;
//    }
//
//
//    foreach ($xml->REPORT->TOWN->FORECAST as $forecast) {
//        $xml_date = $forecast["day"] . '.' . $forecast["month"] . '.' . $forecast["year"];
//        if ($forecast["tod"] == $tod && $cur_date == $xml_date) {
//            $sql = "UPDATE `weather`
//        SET `temperature_min` = '”. $forecast->TEMPERATURE['min'].”',
//        `temperature_max` = '”.$forecast->TEMPERATURE['max'].”',
//        `pressure_min` = '”. $forecast->PRESSURE['min'].”',
//        `pressure_max` = '”. $forecast->PRESSURE['max'].”',
//        `wind_min` = '”.$forecast->WIND['min'].”',
//        `wind_max` = '”. $forecast->WIND['max'].”',
//        `wind_dir` = '”. $forecast->WIND['direction'].”',
//        `relwet_min` = '”.$forecast->RELWET['min'].”',
//        `relwet_max` = '”.$forecast->RELWET['max'].”',
//        `cloudiness` = '”.$forecast->PHENOMENA['cloudiness'].”',
//        `precipitation` = '”. $forecast->PHENOMENA['precipitation'].”'
//        WHERE city_id = 34519
//        LIMIT 1";
//            $query = $db->query($sql) or die("failed!");
////        $stm = $this->db->prepare($sql);
////        $stm->execute($values);
//            var_dump($query);
//            break;
//        }
//    }
//
//    $sql = "SELECT * FROM weather WHERE city_id=34519 LIMIT 1";
//
//
////if(mysql_num_rows($result)  != 1){
////    die('Такого  города нет в базе данных!');
////
////}
////else {
////    $myrow = mysql_fetch_assoc($result);
////}
////
////
////$temp = round(($myrow['temperature_min'] + $myrow['temperature_max'])/2);
////$myrow['temperature']  = ($temp > 0)? '+'.$temp:$temp;
////
////
////switch  ($myrow['cloudiness']){
////    case 0:
////        switch  ($myrow['precipitation']){
////            case 4: $myrow['style'] =  'rainy-cloudy';break;
////            case 5: $myrow['style'] =  'rainy-cloudy';break;
////            case 6: $myrow['style'] =  'snow';break;
////            case 7: $myrow['style'] =  'snow';break;
////            case 8: $myrow['style'] =  'thunderstorm';break;
////            case 9: $myrow['style'] =  'clear';break;
////            case 10: $myrow['style'] =  'clear';break;
////        }
////        break;
////    case 1:
////        switch  ($myrow['precipitation']){
////            case 4: $myrow['style'] =  'rainy-cloudy';break;
////            case 5: $myrow['style'] =  'rainy-cloudy';break;
////            case 6: $myrow['style'] =  'snowly-cloudly';break;
////            case 7: $myrow['style'] =  'snowly-cloudly';break;
////            case 8: $myrow['style'] =  'thunderstorm-cloudly';break;
////            case 9: $myrow['style'] =  'cloudy';break;
////            case 10: $myrow['style'] =  'cloudy';break;
////        }
////        break;
////    case 2:
////        switch  ($myrow['precipitation']){
////            case 4: $myrow['style'] =  'rainy-cloudy';break;
////            case 5: $myrow['style'] =  'rainy-cloudy';break;
////            case 6: $myrow['style'] =  'snowly-cloudly';break;
////            case 7: $myrow['style'] =  'snowly-cloudly';break;
////            case 8: $myrow['style'] =  'thunderstorm-cloudly';break;
////            case 9: $myrow['style'] =  'cloudy';break;
////            case 10: $myrow['style'] =  'cloudy';break;
////        }
////        break;
////    case 3:
////        switch  ($myrow['precipitation']){
////            case 4: $myrow['style'] =  'rainy';break;
////            case 5: $myrow['style'] =  'rainy';break;
////            case 6: $myrow['style'] =  'snowly-cloudly';break;
////            case 7: $myrow['style'] =  'snowly-cloudly';break;
////            case 8: $myrow['style'] =  'thunderstorm-cloudly';break;
////            case 9: $myrow['style'] =  'cloudy';break;
////            case 10: $myrow['style'] =  'cloudy';break;
////        }
////        break;
////}

function cutFrom($file, $from, $to)
{
    $pos1 = strrpos($file, $from);
    $pos2 = strrpos($file, $to);
    $length = $pos2 - $pos1;
    return substr($file, $pos1, $length);
}

function cutThis($search, $str)
{
    return str_replace($search, "", $str);
}

function getWeather()
{
//    $file = file_get_contents('http://www.gismeteo.ua/city/daily/5093/');
//    $pos1 = strrpos($file,"<div class=\"rframe\" id=\"weather-daily\"><div class=\"fcontent\">");
//    $pos2 = strrpos($file,"<div class=\"more links links-more\">");
//    $length = $pos2 - $pos1;
////    var_dump($file);
////    var_dump($pos1);
////    var_dump($pos2);
////    $weather = stristr($file,);
////    echo strlen($file).'<br>';
////    echo $pos1.'<br>';
////    echo $pos2.'<br>';
//
//    $weather = substr($file,$pos1,$length);
    $weather = cutFrom(
        (file_get_contents('http://www.gismeteo.ua/city/daily/5093/')),
        "<div class=\"rframe\" id=\"weather-daily\"><div class=\"fcontent\">",
        "<div class=\"more links links-more\">"
    );

    $weather = cutFrom(
        (file_get_contents('http://www.gismeteo.ua/city/daily/5093/')),
        "<div class=\"wsection wdata\">",
        "<div class=\"section bottom\">"
    );

    print_r($weather);
}







