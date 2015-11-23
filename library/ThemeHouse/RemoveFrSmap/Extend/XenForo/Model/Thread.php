<?php

/**
 *
 * @see XenForo_Model_Thread
 */
class ThemeHouse_RemoveFrSmap_Extend_XenForo_Model_Thread extends XFCP_ThemeHouse_RemoveFrSmap_Extend_XenForo_Model_Thread
{

    public function prepareThreadFetchOptions(array $fetchOptions)
    {
        $threadFetchOptions = parent::prepareThreadFetchOptions($fetchOptions);

        $selectFields = $threadFetchOptions['selectFields'];
        $joinTables = $threadFetchOptions['joinTables'];
        $orderClause = $threadFetchOptions['orderClause'];

        if (!empty($fetchOptions['join'])) {
            if ($fetchOptions['join'] & self::FETCH_FORUM) {
                $selectFields .= ',
					node.remove_from_sitemap_th';
            }
        }

        return array(
            'selectFields' => $selectFields,
            'joinTables' => $joinTables,
            'orderClause' => $orderClause
        );
    } /* END prepareThreadFetchOptions */
}