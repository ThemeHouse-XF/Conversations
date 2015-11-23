<?php

class ThemeHouse_Conversations_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_Conversations' => array(
                'datawriter' => array(
                    'XenForo_DataWriter_ConversationMaster',
                    'XenForo_DataWriter_ConversationMessage'
                ), /* END 'datawriter' */
                'controller' => array(
                    'XenForo_ControllerPublic_Conversation'
                ), /* END 'controller' */
                'model' => array(
                    'XenForo_Model_Conversation'
                ), /* END 'model' */
            ), /* END 'ThemeHouse_Conversations' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Conversations_Listener_LoadClass', $class, $extend, 'datawriter');
    } /* END loadClassDataWriter */

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Conversations_Listener_LoadClass', $class, $extend, 'controller');
    } /* END loadClassController */

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_Conversations_Listener_LoadClass', $class, $extend, 'model');
    } /* END loadClassModel */
}