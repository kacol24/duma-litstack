<?php

namespace Lit\Config\Form\Pages;

use App\Models\Distributor;
use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Form\Pages\DistributorController;

class DistributorConfig extends FormConfig
{
    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = DistributorController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/distributor";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Distributor',
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
        $page->expand();
        $page->card(function ($form) {
            $form->image('banner')
                 ->maxFiles(1)
                 ->expand();
            $form->manyRelation('distributors')
                 ->title('Distributors')
                 ->model(Distributor::class)
                 ->sortable()
                 ->small()
                 ->createAndUpdateForm(function ($form) {
                     $form->input('name');
                 })
                 ->use(\Lit\Config\Crud\DistributorConfig::class);
        });
    }
}
