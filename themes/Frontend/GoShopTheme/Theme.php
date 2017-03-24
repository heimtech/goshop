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



    protected $css = array(
        'src/css/bootstrap.css',
        'src/css/style.css',
        'src/fonts/elegant-icons.css',
        'src/fonts/simple-line-icons.css'

    );


    public function createConfig(Form\Container\TabContainer $container)
    {



        $fieldset = $this->createFieldSet(
            'my_custom_settings',
            'Standardkonfiguration'
        );

        // Create the textfield
        $textFieldMailBeforeAt = $this->createTextField(
            'contact_email1',
            'Teil 1 EMail - vor (a) ',
            ''
        );

        // Create the textfield
        $textFieldMailAfterAt = $this->createTextField(
            'contact_email2',
            'Teil 2 EMail - nach (a)',
            ''
        );


        // Create the textfield
        $textFieldPhone = $this->createTextField(
            'contact_phone',
            'Kontakt Telefon',
            ''
        );


        // Adding the fields to the fieldset
        $fieldset->addElement($textFieldMailBeforeAt);
        $fieldset->addElement($textFieldMailAfterAt);

        $fieldset->addElement($textFieldPhone);



        // Create the tab which will be named "My custom colors"
        $tab = $this->createTab(
            'customizing_tab',
            'Individualisierung'
        );

        // ...add the fieldset to the tab
        $tab->addElement($fieldset);

        // ...last but not least add the tab to the container, which is a tab panel.
        $container->addTab($tab);


    }
}