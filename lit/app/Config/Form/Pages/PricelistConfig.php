<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Form\Pages\PricelistController;

class PricelistConfig extends FormConfig
{
    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = PricelistController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/pricelist";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Pricelist',
        ];
    }

    /**
     * Setup form page.
     *
     * @param \Lit\Crud\CrudShow $page
     * @return void
     */
    public function show(CrudShow $page)
    {
        $page->expand();
        $page->card(function ($form) {
            $form->image('banner')
                 ->maxFiles(1);
        });
        $page->card(function ($form) {
            $form->input('pricelist_title')
                 ->title('Pricelist Title');
            $form->wysiwyg('pricelist_description')
                 ->title('Pricelist Description');
            $form->block('pricelist_files')
                 ->title('Files')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('file', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->input('title');
                         $form->file('file');
                     });
                 });
        })->title('Pricelist');

        $page->card(function ($form) {
            $form->input('documents_title')
                 ->title('Pricelist Title');
            $form->wysiwyg('documents_description')
                 ->title('Pricelist Description');
            $form->block('documents_files')
                 ->title('Files')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('file', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->input('title');
                         $form->file('file');
                     });
                 });
        })->title('Documents');
    }
}
