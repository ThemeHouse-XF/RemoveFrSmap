<?php

class ThemeHouse_RemoveFrSmap_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/RemoveFrSmap/Extend/XenForo/ControllerAdmin/Forum.php' => 'e59be0998b16cb2c5133a878b8ff86aa',
                'library/ThemeHouse/RemoveFrSmap/Extend/XenForo/DataWriter/Forum.php' => '1a2fe09fac120a0d4b7bcf0ac240a530',
                'library/ThemeHouse/RemoveFrSmap/Extend/XenForo/Model/Thread.php' => 'dbcea53702576c3d422166b7a91b13e7',
                'library/ThemeHouse/RemoveFrSmap/Extend/XenForo/SitemapHandler/Node.php' => '759c55cf36092bca970d26e590db2ce6',
                'library/ThemeHouse/RemoveFrSmap/Extend/XenForo/SitemapHandler/Thread.php' => '05749977dac137e448643f487ad2ce8d',
                'library/ThemeHouse/RemoveFrSmap/Install/Controller.php' => '63d136441921cfc1ba4706abf243ff36',
                'library/ThemeHouse/RemoveFrSmap/Listener/LoadClass.php' => 'b632dc40baca936dc1e320fa7e770412',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}