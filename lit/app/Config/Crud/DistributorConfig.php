<?php

namespace Lit\Config\Crud;

use App\Models\Distributor;
use Ignite\Crud\Config\CrudConfig;
use Ignite\Crud\CrudIndex;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Crud\DistributorController;

class DistributorConfig extends CrudConfig
{
    /**
     * Model class.
     *
     * @var string
     */
    public $model = Distributor::class;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = DistributorController::class;

    /**
     * Model singular and plural name.
     *
     * @param Distributor|null distributor
     * @return array
     */
    public function names(Distributor $distributor = null)
    {
        return [
            'singular' => 'Distributor',
            'plural'   => 'Distributors',
        ];
    }

    /**
     * Get crud route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return 'distributors';
    }

    /**
     * Build index page.
     *
     * @param  \Ignite\Crud\CrudIndex $page
     * @return void
     */
    public function index(CrudIndex $page)
    {
        $page->table(function ($table) {
            $table->col('Name')->value('{name}')->sortBy('name');
        })->search('name');
    }

    /**
     * Setup show page.
     *
     * @param  \Ignite\Crud\CrudShow $page
     * @return void
     */
    public function show(CrudShow $page)
    {
        $page->card(function ($form) {
            $form->input('name');
        });
    }
}
