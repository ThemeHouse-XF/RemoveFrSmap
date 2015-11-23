<?php

class ThemeHouse_RemoveFrSmap_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_RemoveFrSmap' => array(
                'sitemap' => array(
                    'XenForo_SitemapHandler_Node',
                    'XenForo_SitemapHandler_Thread'
                ), /* END 'sitemap' */
                'model' => array(
                    'XenForo_Model_Thread'
                ), /* END 'model' */
                'controller' => array(
                    'XenForo_ControllerAdmin_Forum'
                ), /* END 'controller' */
                'datawriter' => array(
                    'XenForo_DataWriter_Forum'
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_RemoveFrSmap' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassSitemap($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_RemoveFrSmap_Listener_LoadClass', $class, $extend, 'sitemap');
    } /* END loadClassSitemap */

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_RemoveFrSmap_Listener_LoadClass', $class, $extend, 'model');
    } /* END loadClassModel */

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_RemoveFrSmap_Listener_LoadClass', $class, $extend, 'controller');
    } /* END loadClassController */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_RemoveFrSmap_Listener_LoadClass', $class, $extend, 'datawriter');
    } /* END loadClassDataWriter */
}