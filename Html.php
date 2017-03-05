<?php namespace Wing\Html;
/**
 * Created by PhpStorm.
 * User: yuyi
 * Date: 2017-03-05
 * Time: 19:26
 *
 * 简单的html构造器
 *
 */
class Html
{
    private $tag_name;
    private $attr;

    public $html;

    /**
     * 构造函数
     *
     * @param string $tag_name 标签名称
     */
    public function __construct($tag_name)
    {
        $this->tag_name = $tag_name;
        $this->html     = "";
    }

    /**
     * 判断是否为闭合标签，如果是返回true，否则返回false（自闭合标签返回false）
     */
    public function isClose()
    {
        if (in_array(strtolower($this->tag_name),[
            "img","br","hr","input","link"
        ]))
            return false;
        return true;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->attr[$name] = $value;
    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
        if (!isset($this->attr[$name]))
            return "";
        return $this->attr[$name];
    }

    public function setAttr($name, $value)
    {
        $this->__set($name, $value);
    }

    public function setClass($class)
    {
        $this->__set("class",$class);
    }
    public function addClass($class)
    {
        if (isset($this->attr["class"]))
            $class = $this->attr["class"]." ".$class;
        $this->__set("class",$class);
    }
    public function setStyle($style)
    {
        $this->__set("style",$style);
    }

    public function addCss($css)
    {
        if (isset($this->attr["style"])) {
            $this->attr["style"] = trim($this->attr["style"]);
            if (strpos($this->attr["style"],";") != (strlen($this->attr["style"]) - 1))
                $this->attr["style"] = $this->attr["style"].";";
            $this->attr["style"] = $this->attr["style"].$css;
        } else {
            $this->attr["style"] = $css;
        }
    }

    /**
     * 获取最终生成的html
     *
     * @return string
     */
    public function getTtml()
    {
        $html = "<".$this->tag_name;
        foreach ($this->attr as $attr => $value) {
            $html .= " ".$attr."=\"".$value."\" ";
        }
        if (!$this->isClose())
            $html.="/>";
        else {
            $html.=">";
            $html.=$this->html;
            $html.="</".$this->tag_name.">";
        }
        return $html;
    }

    /**
     * 添加子标签，addChild为别名函数
     *
     * @param string|self
     */
    public function append($content)
    {
        if ($content instanceof self)
            $this->html .= $content->getTtml();
        else
            $this->html .= $content;
    }

    /**
     * 添加子标签，append为别名函数
     *
     * @param string|self
     */
    public function addChild($content)
    {
        $this->append($content);
    }
}