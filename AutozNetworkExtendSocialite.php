<?php

namespace SocialiteProviders\AutozNetwork;

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
