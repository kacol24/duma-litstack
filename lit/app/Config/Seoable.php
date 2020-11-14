<?php

namespace Lit\Config;

use Lit\Config\Form\Sites\SiteConfig;

trait Seoable
{
    private function seoFields($page)
    {
        $page->card(function ($card) {
            $card->wrapper('lit-utilities-meta-wrapper', function ($meta) {
                $meta->input('meta_title')
                     ->title('Meta Title')
                     ->hint('Max 50 characters is recommended.')
                     ->max(70);

                $meta->input('meta_description')
                     ->title('Meta Description')
                     ->hint('Max 150 characters is recommended.')
                     ->max(160);

                $meta->input('meta_keywords')
                     ->title('Meta Keywords')
                     ->placeholder('Keyword1, Keyword2, …');
            });
        })->title('SEO')
             ->width(4);
    }

    private function seoPage($page, $callback)
    {
        $page->expand();
        $page->group($callback)->width(8);
        $this->seoFields($page);
    }
}
