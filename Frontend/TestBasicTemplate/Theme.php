<?php

namespace Shopware\Themes\TestBasicTemplate;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
basic template
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
foo
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Bartek
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
foo
SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}