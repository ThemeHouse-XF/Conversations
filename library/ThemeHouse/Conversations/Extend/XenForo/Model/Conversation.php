<?php

/**
 *
 * @see XenForo_Model_Conversation
 */
class ThemeHouse_Conversations_Extend_XenForo_Model_Conversation extends XFCP_ThemeHouse_Conversations_Extend_XenForo_Model_Conversation
{

    public function insertConversationAlert(array $conversation, array $alertUser, $action, array $triggerUser = null,
        array $extraData = null, array &$messageInfo = null)
    {
        if (!$triggerUser) {
            $triggerUser = array(
                'user_id' => $conversation['last_message_user_id'],
                'username' => $conversation['last_message_username']
            );
        }

        /* @var $userModel XenForo_Model_User */
        $userModel = $this->_getUserModel();

        if ($userModel->isUserIgnored($alertUser, $triggerUser['user_id'])) {
            return false;
        }

        return parent::insertConversationAlert($conversation, $alertUser, $action, $triggerUser, $extraData,
            $messageInfo);
    } /* END insertConversationAlert */
}