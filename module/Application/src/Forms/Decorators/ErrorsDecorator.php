<?php

/**
 * Created by : Alexandre Ancellin
 * Date: 29/01/2017
 */
class ErrorsDecorator extends Zend\Form\de
{
class My_Decorator_SimpleInput extends Zend_Form_Decorator_Abstract
{
    protected $_format = '<label for="%s">%s</label>'
    . '<input id="%s" name="%s" type="text" value="%s"/>';

    public function render($content)
    {
        $element = $this->getElement();
        $name    = htmlentities($element->getFullyQualifiedName());
        $label   = htmlentities($element->getLabel());
        $id      = htmlentities($element->getId());
        $value   = htmlentities($element->getValue());

        $markup  = sprintf($this->_format, $name, $label, $id, $name, $value);
        return $markup;
    }
}
}