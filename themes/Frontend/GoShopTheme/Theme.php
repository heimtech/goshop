<?php

namespace Shopware\Themes\GoShopTheme;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Modern Theme for all purposes
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Modern Responsive Theme
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
HeimTech
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
        Shopware()->Debuglogger()->info('some message');
    }
}