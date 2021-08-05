<?php


 class  Interview_one
{
    public $name;
    public static $staticname = "静态属性staticname";
    public  function say(){
        echo "非静态方法say";
    }
    public static function staticsay(){
        echo "静态方法staticsay";
    }
    public function saySelf(){
        //self::$name;无法调用非静态属性
        self::$staticname;
        self::say();
        self::staticsay();
    }
    public function sayStatic(){
        //static::$name;无法调用非静态属性
        static::$staticname;
        static::say();
        static::staticsay();
    }
}
 class Interview_oneson extends Interview_one {
    public  function say(){
        echo "子类的非静态方法say";
    }
    public static function staticsay(){
        echo "子类的静态方法staticsay";
    }
}