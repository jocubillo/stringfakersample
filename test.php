<?php

class Faker
{
    /**
     * @param  string $string
     * @return string
     */
    public function letterify($string)
    {
    	return strstr($string, '?', true) . substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 1)), 0, substr_count($string, '?'));
    }

    /**
     * @param  string $string
     * @return string
     */
    public function numerify($string)
    {
    	return strstr($string, '#', true) . substr(str_shuffle(str_repeat("0123456789", 1)), 0, substr_count($string, '#'));
    }

    /**
     * @param  string $string
     * @return string
     */
    public function bothify($string)
    {
        $str = str_replace('?', '', $string);
        $str = str_replace('#', '', $str);
        return $str . $this->letterify( strrchr($string,'?') ) . $this->numerify( strrchr($string,'#') );
    }
}

$f = new Faker();

$a = $f->bothify('test?#');
echo $a;


?>