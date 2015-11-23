<?php

class ThemeHouse_Conversations_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/Conversations/Extend/XenForo/ControllerPublic/Conversation.php' => 'd55823fd7b2bcd1b2edf48979b01cc51',
                'library/ThemeHouse/Conversations/Extend/XenForo/DataWriter/ConversationMaster.php' => '676777ca74cfb3eee1293a95fc8425a7',
                'library/ThemeHouse/Conversations/Extend/XenForo/DataWriter/ConversationMessage.php' => 'cf5224b739bae2554e86fbfa6ac73398',
                'library/ThemeHouse/Conversations/Extend/XenForo/Model/Conversation.php' => 'd49f468379ec0515562dafcdde14b5ff',
                'library/ThemeHouse/Conversations/Install/Controller.php' => 'f8046a4d9a808ee7d8c829f8b7db955c',
                'library/ThemeHouse/Conversations/Listener/LoadClass.php' => 'ec0f471c8446e38a2ff9896b43cdb7ca',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}