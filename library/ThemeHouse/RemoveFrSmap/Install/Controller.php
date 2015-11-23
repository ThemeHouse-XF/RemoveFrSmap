<?php

class ThemeHouse_RemoveFrSmap_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/remove-from-sitemap.3854/';

    protected $_minVersionId = 1040000;

    protected $_minVersionString = '1.4.0';

    protected function _getTableChanges()
    {
        return array(
            'xf_node' => array(
                'remove_from_sitemap_th' => 'tinyint UNSIGNED NOT NULL DEFAULT 0', /* END 'remove_from_sitemap_th' */
            ), /* END 'xf_node' */
        );
    } /* END _getTableChanges */


    protected function _postInstall()
    {
        $addOn = $this->getModelFromCache('XenForo_Model_AddOn')->getAddOnById('YoYo_');
        if ($addOn) {
            $db->query("
                UPDATE xf_node
                    SET remove_from_sitemap_th=remove_from_sitemap_waindigo");
        }
    }
}