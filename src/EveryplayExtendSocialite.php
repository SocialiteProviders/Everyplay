<?php
namespace SocialiteProviders\Everyplay;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EveryplayExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'everyplay', __NAMESPACE__.'\Provider'
        );
    }
}
