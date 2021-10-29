<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Config\Seoable;
use Lit\Http\Controllers\Form\Pages\ContactController;

class ContactConfig extends FormConfig
{
    use Seoable;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = ContactController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/contact";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Contact',
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
                $form->list('locations')
                     ->title('Locations')
                     ->maxDepth(1)
                     ->previewTitle('{title}')
                     ->form(function ($form) {
                         $form->input('title')
                              ->title('Title');
                         $form->wysiwyg('content')
                              ->title('content');
                     });
            });
        });
    }
}
