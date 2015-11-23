<?php

/**
 *
 * @see XenForo_ControllerAdmin_Forum
 */
class ThemeHouse_RemoveFrSmap_Extend_XenForo_ControllerAdmin_Forum extends XFCP_ThemeHouse_RemoveFrSmap_Extend_XenForo_ControllerAdmin_Forum
{

    public function actionSave()
    {
        $GLOBALS['XenForo_ControllerAdmin_Forum'] = $this;

        return parent::actionSave();
    } /* END actionSave */
}