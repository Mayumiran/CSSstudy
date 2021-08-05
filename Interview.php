<?php
    include "Interview_one.php";
    $a = "abc";
    echo "单引号与双引号区别 例子:\$a=abc"."<br>";
    echo '单引号为：$a'."<br>";
    echo "双引号为：$a"."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $b = "";
    $c = null;
    $d = false;
    $f = 0;
    //$not_exist; (模拟不存在的变量)
    $res1 = isset($b);
    $res2 = isset($c);
    $res3 = isset($d);
    $res4 = isset($f);
    $res5 = isset($not_exist);
    echo "isset:检测变量是否已设置并且非 NULL<br>";
    echo "当变量为空时:";
    var_dump($res1);
    echo "<br>";
    echo "当变量为null时:";
    var_dump($res2);
    echo "<br>";
    echo "当变量为false时:";
    var_dump($res3);
    echo "<br>";
    echo "当变量为0时:";
    var_dump($res4);
    echo "<br>";
    echo "当变量不存在时:";
    var_dump($res5);
    echo "<br>";

    $res6 = empty($b);
    $res7 = empty($c);
    $res8 = empty($d);
    $res9 = empty($f);
    $res10 = empty($not_exist);
    echo "empty:判断变量是否为空，变量为 0/false 也会被认为是空；变量不存在，不会产生警告<br>";
    echo "当变量为空时:";
    var_dump($res6);
    echo "<br>";
    echo "当变量为null时:$";
    var_dump($res7);
    echo "<br>";
    echo "当变量为false时:";
    var_dump($res8);
    echo "<br>";
    echo "当变量为0时:";
    var_dump($res9);
    echo "<br>";
    echo "当变量不存在时:";
    var_dump($res10);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $interview_one = new Interview_one();
    $interview_oneson = new Interview_oneson();
    echo "static:static 可以用于静态或非静态方法中，也可以访问类的静态属性、静态方法、常量和非静态方法，但不能访问非静态属性<br>";
    $interview_one->sayStatic();
    echo "<br>";
    $interview_oneson->sayStatic();
    echo "<br>";
    echo "<br>";
    echo "self：可以用于访问类的静态属性、静态方法和常量，但 self 指向的是当前定义所在的类，这是 self 的限制<br>";
    $interview_one->saySelf();
    echo "<br>";
    $interview_oneson->saySelf();
    echo "<br>";
    echo "<br>";

    $arr1 = array(1,2,3,1,4,5,5,2);
    $arr2 = ['a','b','c','d'];
    $arr3 = ['x'=>'wx','ou'=>false,'ty'=>null];
    $arr4 = array(0,1,2,3,4,5,6);
    echo "以下为数组例子<br>";
    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";
    print_r($arr3);
    echo "<br>";
    echo "<br>";
    echo "array_count_values——统计数组中所有的值<br>";
    print_r(array_count_values($arr1));
    echo "<br>";
    print_r(array_count_values($arr2));
    echo "<br>";
    echo "<br>";
    echo "array_flip——交换数组中的键和值<br>";
    print_r(array_flip($arr2));
    echo "<br>";
    echo "<br>";
    echo "array_merge——合并一个或者多个数组<br>";
    print_r(array_merge($arr1,$arr2,$arr3));
    echo "<br>";
    echo "<br>";
    echo "array_multisort——对多个数组或者多维数组进行排序<br>";
    array_multisort($arr1,SORT_DESC);
    array_multisort($arr2,SORT_DESC);
    print_r($arr1);echo "<br>";
    print_r($arr2);echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "array_pad——将指定数量的带有指定值的元素插入到数组中<br>";
    print_r(array_pad($arr4,9,"bule"));
    echo "<br>";
    echo "<br>";
    echo "array_pop——弹出数组最后一个单元(出栈)<br>";
    array_pop($arr4);
    print_r($arr4);
    echo "<br>";
    echo "<br>";
    echo "array_push——将一个或多个单元压入数组的末尾(入栈)<br>";
    array_push($arr4,'bule','yellow');
    print_r($arr4);
    echo "<br>";
    echo "<br>";
    echo "array_rand——随机取出数组一个或者多个单元<br>";
    print_r(array_rand($arr4,5));
    echo "<br>";
    echo "<br>";
    echo "array_key——返还数组中部分或者所有键<br>";
    print_r(array_keys($arr3));
    echo "<br>";
    echo "<br>";
    echo "array_values——返回数组中所有的值<br>";
    print_r(array_values($arr4));
    echo "<br>";
    echo "<br>";
    echo "count——计算数组中的单元数目，或对象中的属性个数<br>";
    echo '$arr4数组count为'.count($arr4)."<br>";
    echo "<br>";
    echo "sort——对数组进行排序<br>";
    sort($arr4);
    print_r($arr4);

    print_r($_SERVER['SERVER_ADDR']);