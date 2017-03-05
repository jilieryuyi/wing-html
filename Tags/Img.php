<?php namespace Wing\Html\Tags;
use Wing\Html\Html;

/**
 * Created by PhpStorm.
 * User: yuyi
 * Date: 17/3/4
 * Time: 20:10
 */
class Img extends Html
{
    public function __construct()
    {
        parent::__construct("img");
    }
    public function setSrc($src)
    {
        $this->__set("src",$src);
    }

    public function setAlt($alt)
    {
        $this->__set("alt",$alt);
    }
}