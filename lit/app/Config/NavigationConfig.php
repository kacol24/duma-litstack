<?php

namespace Lit\Config;

use Ignite\Application\Navigation\Config;
use Ignite\Application\Navigation\Navigation;
use Lit\Config\Form\Pages\DistributorConfig;
use Lit\Config\Form\Pages\PricelistConfig;
use Lit\Config\Form\Pages\ProductPanelConfig;

class NavigationConfig extends Config
{
    /**
     * Topbar navigation entries.
     *
     * @param \Ignite\Application\Navigation\Navigation $nav
     * @return void
     */
    public function topbar(Navigation $nav)
    {
        $nav->section([
            $nav->preset('profile'),
        ]);

        $nav->section([
            $nav->title(__lit('navigation.user_administration')),

            $nav->preset('user.user')->icon(fa('users')),
            $nav->preset('permissions'),
        ]);
    }

    /**
     * Main navigation entries.
     *
     * @param \Ignite\Application\Navigation\Navigation $nav
     * @return void
     */
    public function main(Navigation $nav)
    {
        $nav->section([
            $nav->title('Pages'),
            $nav->group('Product', [
                $nav->preset(ProductPanelConfig::class),
                $nav->preset(DistributorConfig::class),
                $nav->preset(PricelistConfig::class),
            ]),
        ]);
    }
}
