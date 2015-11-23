<?php

/**
 *
 * @see XenForo_ControllerPublic_ProfilePost
 */
class ThemeHouse_FloodControl_Extend_XenForo_ControllerPublic_ProfilePost extends XFCP_ThemeHouse_FloodControl_Extend_XenForo_ControllerPublic_ProfilePost
{

    /**
     *
     * @see XenForo_ControllerPublic_Abstract::assertNotFlooding()
     */
    public function assertNotFlooding($action, $floodingLimit = null)
    {
        /* @var $floodCheckModel XenForo_Model_FloodCheck */
        $floodCheckModel = $this->getModelFromCache('XenForo_Model_FloodCheck');

        $floodingLimit = max(array($floodingLimit, $floodCheckModel->getFloodingLimitForAction($action)));

        parent::assertNotFlooding($action, $floodingLimit);
    } /* END assertNotFlooding */
}