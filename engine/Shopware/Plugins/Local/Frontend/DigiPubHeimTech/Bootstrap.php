<?php

class Shopware_Plugins_Frontend_DigiPubHeimTech_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getLabel()
    {
        return 'Publish DigiPubs';
    }

    public function install()
    {
        $this->subscribeEvent(
            'Enlight_Controller_Action_PostDispatchSecure_Backend_Article',
            'onArticlePostDispatch'
        );

        return true;
    }

    public function onArticlePostDispatch(Enlight_Event_EventArgs $args)
    {
        /** @var \Enlight_Controller_Action $controller */
        $controller = $args->getSubject();
        $view = $controller->View();
        $request = $controller->Request();

        $view->addTemplateDir(__DIR__ . '/Views');

        if ($request->getActionName() == 'load') {
            $view->extendsTemplate('backend/digi_pub_customer/view/digipub.js');
        }
    }
}

?>
