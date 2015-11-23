<?php

/**
 *
 * @see XenForo_SitemapHandler_Thread
 */
class ThemeHouse_RemoveFrSmap_Extend_XenForo_SitemapHandler_Thread extends XFCP_ThemeHouse_RemoveFrSmap_Extend_XenForo_SitemapHandler_Thread
{

    public function isIncluded(array $entry, array $viewingUser)
    {
        if ($entry['remove_from_sitemap_th']) {
            return false;
        }

        return parent::isIncluded($entry, $viewingUser);
    } /* END isIncluded */
}