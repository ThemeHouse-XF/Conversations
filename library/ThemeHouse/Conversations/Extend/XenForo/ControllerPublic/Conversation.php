<?php

/**
 *
 * @see XenForo_ControllerPublic_Conversation
 */
class ThemeHouse_Conversations_Extend_XenForo_ControllerPublic_Conversation extends XFCP_ThemeHouse_Conversations_Extend_XenForo_ControllerPublic_Conversation
{

    public function actionMarkRead()
    {
        /* @var $conversationModel XenForo_Model_Conversation */
        $conversationModel = $this->_getConversationModel();

        $userId = XenForo_Visitor::getUserId();

        $conversations = $conversationModel->getConversationsForUser($userId,
            array(
                'is_unread' => true
            ));

        foreach ($conversations as $conversationId => $conversation) {
            $conversationModel->markConversationAsRead($conversationId, $userId, XenForo_Application::$time);
        }

        return $this->responseRedirect(XenForo_ControllerResponse_Redirect::SUCCESS,
            XenForo_Link::buildPublicLink('conversations'),
            new XenForo_Phrase('th_conversations_marked_as_read_conversations'));
    } /* END actionMarkRead */
}