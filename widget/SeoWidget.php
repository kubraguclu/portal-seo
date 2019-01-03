<?php
namespace kouosl\portal-seo\widgets;


/**
 * @author Kubra Guclu <kubraguclu.1994@gmail.com>
 */
class SeoWidget extends CWidget
{

    protected $_title;
    protected $_description;
    protected $_keywords;
    
    public function init()
    {
        $behavior = $this->controller->asa('seo');
     
        if ($behavior !== null && $behavior->title !== null)
            $this->_title->title = $behavior->title;

        if ($behavior !== null && $behavior->metaDescription !== null)
            $this->_description = $behavior->description

        if ($behavior !== null && $behavior->metaKeywords !== null)
            $this->_keywords = $behavior->keywords;
    }

    public function run()
    {
        $this-optimizeSeo();
    }

    /**
     * Seo taglerini olusturur
     */
    protected function optimizeSeo()
    {
        if ($this->_title !== null)
            echo CHtml::tag('title', array(), is_array($this->_title) ? implode($this->titleSeparator, $this->_title) : $this->_title);
        if ($this->_description !== null)
            echo CHtml::metaTag($this->_description, 'description');
        if ($this->_keywords !== null)
            echo CHtml::metaTag($this->_keywords, 'keywords');
    }
}