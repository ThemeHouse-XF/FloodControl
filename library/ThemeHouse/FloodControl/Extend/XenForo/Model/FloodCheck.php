<?php

class ThemeHouse_FloodControl_Extend_XenForo_Model_FloodCheck extends XFCP_ThemeHouse_FloodControl_Extend_XenForo_Model_FloodCheck
{

    public function getFloodingLimitForAction($action, &$viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);

        if (!$viewingUser['user_id']) {
            return null;
        }

        switch ($action) {
            case 'conversation':
                $floodingLimit = XenForo_Permission::hasPermission($viewingUser['permissions'], 'conversation',
                    'floodCheckLength');
                break;
            case 'post':
                $floodingLimit = XenForo_Permission::hasPermission($viewingUser['permissions'], 'general', 'floodCheckPostLength');
                break;
            case 'contact':
                $floodingLimit = XenForo_Permission::hasPermission($viewingUser['permissions'], 'general',
                    'floodCheckContactLength');
                break;
            case 'report':
                $floodingLimit = XenForo_Permission::hasPermission($viewingUser['permissions'], 'general',
                    'floodCheckReportLength');
                break;
            default:
                $floodingLimit = null;
                break;
        }

        if ($floodingLimit === false) {
            return null;
        }

        return $floodingLimit;
    } /* END getFloodingLimitForAction */
}