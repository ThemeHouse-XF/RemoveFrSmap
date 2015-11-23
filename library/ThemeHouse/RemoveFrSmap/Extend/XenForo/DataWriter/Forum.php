<?php

/**
 *
 * @see XenForo_DataWriter_Forum
 */
class ThemeHouse_RemoveFrSmap_Extend_XenForo_DataWriter_Forum extends XFCP_ThemeHouse_RemoveFrSmap_Extend_XenForo_DataWriter_Forum
{

    /**
     *
     * @see XenForo_DataWriter_Forum::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();

        $fields['xf_node']['remove_from_sitemap_th'] = array(
            'type' => self::TYPE_BOOLEAN,
            'default' => 0
        );

        return $fields;
    } /* END _getFields */

    /**
     *
     * @see XenForo_DataWriter_Forum::_preSave()
     */
    protected function _preSave()
    {
        if (!empty($GLOBALS['XenForo_ControllerAdmin_Forum'])) {
            /* @var $controller XenForo_ControllerAdmin_Forum */
            $controller = $GLOBALS['XenForo_ControllerAdmin_Forum'];

            $input = $controller->getInput()->filter(
                array(
                    'remove_from_sitemap' => XenForo_Input::UINT,
                    'remove_from_sitemap_shown' => XenForo_Input::UINT
                ));

            if ($input['remove_from_sitemap_shown']) {
                $this->set('remove_from_sitemap_th', $input['remove_from_sitemap']);
            }
        }

        parent::_preSave();
    } /* END _preSave */
}