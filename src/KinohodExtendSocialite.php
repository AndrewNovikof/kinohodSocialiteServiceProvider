<?php
namespace AndrewNovikof\SocialiteProviders\Kinohod;

use SocialiteProviders\Manager\SocialiteWasCalled;

class KinohodExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'kinohod', __NAMESPACE__ . '\Provider'
        );
    }
}
