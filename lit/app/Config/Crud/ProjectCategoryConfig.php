<?php

namespace Lit\Config\Crud;

use App\Models\ProjectCategory;
use Ignite\Crud\Config\CrudConfig;
use Ignite\Crud\CrudIndex;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Crud\ProjectCategoryController;

class ProjectCategoryConfig extends CrudConfig
{
    /**
     * Model class.
     *
     * @var string
     */
    public $model = ProjectCategory::class;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = ProjectCategoryController::class;

    /**
     * Model singular and plural name.
     *
     * @param  ProjectCategory|null projectCategory
     * @return array
     */
    public function names(ProjectCategory $projectCategory = null)
    {
        return [
            'singular' => 'Category',
            'plural'   => 'Categories',
        ];
    }

    /**
     * Get crud route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return 'project-categories';
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
            $table->col('Title')->value('{title}')->sortBy('title');
        })->search('title');
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
            $form->input('title');
        });

        $page->card(function ($form) {
            $form->relation('projects')
                 ->title('Projects')
                 ->sortable()
                 ->use(ProjectConfig::class);
        });
    }
}
