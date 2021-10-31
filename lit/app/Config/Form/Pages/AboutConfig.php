<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Config\Seoable;
use Lit\Http\Controllers\Form\Pages\AboutController;

class AboutConfig extends FormConfig
{
    use Seoable;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = AboutController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/about";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'About',
        ];
    }

    /**
     * Setup form page.
     *
     * @param  \Lit\Crud\CrudShow  $page
     * @return void
     */
    public function show(CrudShow $page)
    {
        $this->seoPage($page, function ($page) {
            $page->card(function ($form) {
                $form->block('timelines')
                     ->title('Timeline')
                     ->repeatables(function ($repeatables) {
                         $repeatables->add('item', function ($form, $preview) {
                             $preview->col('{year}');
                             $form->input('year')
                                  ->title('Year');
                             $form->block('timeline_item')
                                  ->title('Item')
                                  ->repeatables(function ($repeatables) {
                                      $repeatables->add('images', function ($form, $preview) {
                                          $form->image('images')
                                               ->maxFiles(3)
                                               ->title('Images');
                                      });

                                      $repeatables->add('text', function ($form, $preview) {
                                          $form->wysiwyg('text')
                                               ->title('Text');
                                      });
                                  });
                         });
                     });
            });
        });
    }
}
