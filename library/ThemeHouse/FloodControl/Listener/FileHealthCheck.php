<?php

class ThemeHouse_FloodControl_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/Account.php' => '6adbcbfe520451ab5ecf22c8f1f5699d',
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/Conversation.php' => '90c23e57d4ea4463ef3f1f429bf17661',
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/Forum.php' => 'fbc027053b25e6019eebf1d0e57c7491',
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/Member.php' => 'e11ccc315412039ab51f78b6cfc21c3b',
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/Misc.php' => 'b66288fafb9c0c4167e9bfb6ab04d0a8',
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/Post.php' => 'fe29e9a6264061ec72039db3545395d7',
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/ProfilePost.php' => '4088191f0f85b25611934ba96bbb236f',
                'library/ThemeHouse/FloodControl/Extend/XenForo/ControllerPublic/Thread.php' => '9ee96d27105090c99ea258c7858588ed',
                'library/ThemeHouse/FloodControl/Extend/XenForo/Model/FloodCheck.php' => 'a55af7bc54b01f832df00b42735f9ce2',
                'library/ThemeHouse/FloodControl/Listener/ControllerPreDispatch.php' => '418f73a033e2c13e8d2d49a9dc141ebb',
                'library/ThemeHouse/FloodControl/Listener/LoadClass.php' => '5eb081e4b67f3693543f7f6b7044572e',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}