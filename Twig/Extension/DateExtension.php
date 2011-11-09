<?php
namespace Xnni\Bundle\TwigExtensionBundle\Twig\Extension;

/**
 * @author Hidenori Goto <hidenorigoto@gmail.com>
 */
class DateExtension extends \Twig_Extension {

    public function getFilters()
    {
        return array(
            'jp_year'   => new \Twig_Filter_Method($this, 'jpYear', array('is_safe' => array('html'))),
        );
    }

    public function jpYear($value, $parameters = array()) {

        $year = (int)$value->format('Y') - 1988;
        return '平成' . $year . '年';
    }

    public function getName()
    {
        return 'xnni_twig_extension_date';
    }
}

