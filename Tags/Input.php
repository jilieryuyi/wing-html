<?php namespace Wing\Html\Tags;
use Wing\Html\Html;

/**
 * Created by PhpStorm.
 * User: yuyi
 * Date: 17/3/4
 * Time: 20:10
 */
class Input extends Html
{
    const TYPE_BUTTON         = "button";
    const TYPE_COLOR          = "color";
    const TYPE_DATE           = "date";
    const TYPE_DATETIME       = "datetime";
    const TYPE_DATETIME_LOCAL = "datetime-local";
    const TYPE_EMAIL          = "email";
    const TYPE_FILE           = "file";
    const TYPE_HIDDEN         = "hidden";
    const TYPE_IMAGE          = "image";
    const TYPE_MONTH          = "month";
    const TYPE_NUMBER         = "number";
    const TYPE_PASSWORD       = "password";
    const TYPE_RADIO          = "radio";
    const TYPE_RANGE          = "range";
    const TYPE_RESET          = "reset";
    const TYPE_SEARCH         = "search";
    const TYPE_SUBMIT         = "submit";
    const TYPE_TEL            = "tel";
    const TYPE_TEXT           = "text";
    const TYPE_TIME           = "time";
    const TYPE_URL            = "url";
    const TYPE_WEEK           = "week";

    public function __construct()
    {
        parent::__construct("input");
    }
    public function setType($type)
    {
        $this->__set("type",$type);
    }
}