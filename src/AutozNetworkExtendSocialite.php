<?php

namespace SocialiteProviders\AutozNetwork;

use SocialiteProviders\AutozNetwork\Provider;
use SocialiteProviders\Manager\SocialiteWasCalled;

class AutozNetworkExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('autoznetwork', Provider::class);
    }
}
