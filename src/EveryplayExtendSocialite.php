<?php
namespace SocialiteProviders\Everyplay;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EveryplayExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('everyplay', __NAMESPACE__.'\Provider');
    }
}
