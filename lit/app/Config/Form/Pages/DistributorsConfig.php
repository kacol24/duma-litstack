<?php

namespace Lit\Config\Form\Pages;

use App\Models\City;
use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Form\Pages\DistributorsController;

class DistributorsConfig extends FormConfig
{
    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = DistributorsController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/distributors";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Distributors',
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
        $page->card(function ($form) {
            $form->image('banner')
                 ->expand()
                 ->maxFiles(1);
            $form->input('page_title')->title('Page Title');
        });
        $page->card(function ($form) {
            $form->manyRelation('cities')
                 ->title('Displayed Cities')
                 ->model(City::class)
                 ->sortable()
                 ->preview(function ($preview) {
                     $preview->col('{name}');
                 });
        });
    }
}
