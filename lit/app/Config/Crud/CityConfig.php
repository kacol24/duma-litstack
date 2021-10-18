<?php

namespace Lit\Config\Crud;

use App\Models\City;
use Ignite\Crud\Config\CrudConfig;
use Ignite\Crud\CrudIndex;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Crud\CityController;

class CityConfig extends CrudConfig
{
    /**
     * Model class.
     *
     * @var string
     */
    public $model = City::class;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = CityController::class;

    /**
     * Model singular and plural name.
     *
     * @param  City|null city
     * @return array
     */
    public function names(City $city = null)
    {
        return [
            'singular' => 'City',
            'plural'   => 'Cities',
        ];
    }

    /**
     * Get crud route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return 'cities';
    }

    /**
     * Build index page.
     *
     * @param  \Ignite\Crud\CrudIndex  $page
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
     * @param  \Ignite\Crud\CrudShow  $page
     * @return void
     */
    public function show(CrudShow $page)
    {
        $page->card(function ($form) {
            $form->input('name')
                 ->title('Name')
                 ->width(6);
            $form->relation('distributors')
                 ->title('Distributors')
                 ->sortable()
                 ->showTableHead()
                 ->use(DistributorConfig::class);
        });
    }
}
