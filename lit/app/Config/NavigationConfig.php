<?php

namespace Lit\Config;

use Ignite\Application\Navigation\Config;
use Ignite\Application\Navigation\Navigation;
use Lit\Config\Form\Pages\DistributorConfig;
use Lit\Config\Form\Pages\PricelistConfig;
use Lit\Config\Form\Pages\ProductDeckConfig;
use Lit\Config\Form\Pages\ProductDoorConfig;
use Lit\Config\Form\Pages\ProductLisplankConfig;
use Lit\Config\Form\Pages\ProductPanelConfig;
use Lit\Config\Form\Pages\ProjectConfig;

class NavigationConfig extends Config
{
    /**
     * Topbar navigation entries.
     *
     * @param  \Ignite\Application\Navigation\Navigation  $nav
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
     * @param  \Ignite\Application\Navigation\Navigation  $nav
     * @return void
     */
    public function main(Navigation $nav)
    {
        $nav->section([
            $nav->title('Main Navigation'),
            $nav->group('Product', [
                $nav->preset(ProductPanelConfig::class),
                $nav->preset(ProductDoorConfig::class),
                $nav->preset(ProductDeckConfig::class),
                $nav->preset(ProductLisplankConfig::class),
            ]),
            $nav->preset(ProjectConfig::class),
            $nav->preset(DistributorConfig::class),
            $nav->preset(PricelistConfig::class),
        ]);

        $nav->section([
            $nav->title('Contents'),
            $nav->preset(\Lit\Config\Crud\ProjectConfig::class),
        ]);
    }
}
