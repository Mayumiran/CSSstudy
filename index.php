<?php
/**
 * Created by PhpStorm.
 * User: 冉
 * Date: 2020/3/1
 * Time: 17:43
 */
//$arr=[5,4,9,1,3];
//冒泡排序 由小到大输出
//function bubbleSort($arr)
//{
//    for ($i = 0; $i < count($arr); $i++) {
//        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
//            if ($arr[$j] > $arr[$j + 1]) {
//                $temp = $arr[$j + 1];
//                $arr[$j + 1] = $arr[$j];
//                $arr[$j] = $temp;
//            }
//        }
//        print_r($arr);
//        echo "<br>";
//    }
//
//    return $arr;
//}
//由大到小输出
//function bubbleSort($arr)
//{
//    for ($i = count($arr); $i >0 ; $i--) {
//        for ($j = count($arr); $j >0; $j--) {
//            if ($arr[$j] > $arr[$j - 1]) {
//                $temp = $arr[$j - 1];
//                $arr[$j - 1] = $arr[$j];
//                $arr[$j] = $temp;
//            }
//        }
//        print_r($arr);
//        echo "<br>";
//    }
//    echo "true";
//    print_r($arr);
//
//    return $arr;
//}
//bubbleSort($arr);
//选择排序
//由小到大排序
// function selectionSort($arr)
//{
//    for ($i = 0; $i < count($arr) - 1; $i++) {
//        $minIndex = $i;
//        for ($j = $i + 1; $j < count($arr); $j++) {
//            if ($arr[$j] < $arr[$minIndex]) {
//                $minIndex = $j;
//            }
//        }
//        $temp = $arr[$i];
//        $arr[$i] = $arr[$minIndex];
//        $arr[$minIndex] = $temp;
//        print_r($arr);
//        echo "<br>";
//    }
//
//    return $arr;
//}
//由大到小排序
// function selectionSort($arr)
//{
//    for ($i = 0; $i < count($arr) - 1; $i++) {
//        $maxIndex = $i;
//        for ($j = $i + 1; $j < count($arr); $j++) {
//            if ($arr[$j] > $arr[$maxIndex]) {
//                $maxIndex = $j;
//            }
//        }
//        $temp = $arr[$i];
//        $arr[$i] = $arr[$maxIndex];
//        $arr[$maxIndex] = $temp;
//        print_r($arr);
//        echo "<br>";
//    }
//
//    return $arr;
//}
//selectionSort($arr);
//插入排序
//由小到大
//function insertionSort($arr){
//        for($i = 1; $i < count($arr); $i++){
//            $preIndex = $i - 1;
//            $current = $arr[$i];
//            while($preIndex >= 0 && $arr[$preIndex] > $current){
//                $arr[$preIndex + 1] = $arr[$preIndex];
//                $preIndex--;
//                print_r($arr);
//                echo "<br>";
//            }
//            $arr[$preIndex + 1] = $current;
//            echo "true";
//            print_r($arr);
//            echo "<br>";
//        }
//
//        return $arr;
//}
//insertionSort($arr);
//由大到小
//function insertionSort($arr){
//        for($i = 1; $i < count($arr); $i++){
//            $preIndex = $i - 1;
//            $current = $arr[$i];
//            while($preIndex >= 0 && $arr[$preIndex] < $current){
//                $arr[$preIndex + 1] = $arr[$preIndex];
//                $preIndex--;
//                print_r($arr);
//                echo "<br>";
//            }
//            $arr[$preIndex + 1] = $current;
//            echo "true";
//            print_r($arr);
//            echo "<br>";
//        }
//
//        return $arr;
//}
//insertionSort($arr);
//希尔排序
//function shellSort($arr)
//{
//    print_r($arr);
//    $factor = 3;    //定义因子
//    $gap = 1;        //最小值
//    while ($gap < intval(count($arr) / $factor)) {
//        $gap = $factor * $gap + 1;
//    }
//
//    while ($gap >= 1) {
//
//        for ($i = $gap; $i < count($arr); $i++) {
//
//            for ($j = $i; $j >= $gap && $arr[$j] < $arr[$j - $gap]; $j -= $gap) {
//                $temp = $arr[$j];
//                $arr[$j] = $arr[$j - $gap];
//                $arr[$j - $gap] = $temp;
//            }
//            echo "<br>";
//            print_r($arr);
//        }
//        echo "<br>";
//        echo "<br>";
//        print_r($arr);
//        echo "<br>";
//        echo "<br>";
//        $gap = intval($gap / $factor);
//        print_r($gap);
//    }
////    echo "<br>";
////    print_r($arr);
//
//    return $arr;
//}
//shellSort($arr);
//快速排序
$arr=[5,4,9,1,3];
function quickSort($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }
    $key = $arr[0];
    $rightArray = array();
    $leftArray = array();
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] >= $key) {
            $rightArray[] = $arr[$i];
            print_r($leftArray);
        } else {
            $leftArray[] = $arr[$i];
        }
    }
    $leftArray = quickSort($leftArray);
    $rightArray = quickSort($rightArray);
    return array_merge($leftArray, array($key), $rightArray);
}
quickSort($arr);