<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 16/02/2015
 * Time: 11:56
 */

class Test{

    const VAR1 = 12;
    static $var2 = array(1,2);


}

echo Test::VAR1;
echo print_r( Test::$var2);
