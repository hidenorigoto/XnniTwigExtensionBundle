<?php
namespace Xnni\Bundle\TwigExtensionBundle\Twig\Extension;

/**
 * @author Hidenori Goto <hidenorigoto@gmail.com>
 */
class NumberExtension extends \Twig_Extension {

    public function getFilters()
    {
        return array(
            'number'   => new \Twig_Filter_Method($this, 'number', array('is_safe' => array('html'))),
        );
    }

    public function number($value, $parameters = array()) {

        return number_format($value);
    }

    public function getName()
    {
        return 'xnni_twig_extension_number';
    }
}

