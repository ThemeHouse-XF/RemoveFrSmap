<?php

/**
 *
 * @see XenForo_SitemapHandler_Node
 */
class ThemeHouse_RemoveFrSmap_Extend_XenForo_SitemapHandler_Node extends XFCP_ThemeHouse_RemoveFrSmap_Extend_XenForo_SitemapHandler_Node
{

    public function isIncluded(array $entry, array $viewingUser)
    {
        if ($entry['remove_from_sitemap_th']) {
            return false;
        }

        return parent::isIncluded($entry, $viewingUser);
    } /* END isIncluded */
}