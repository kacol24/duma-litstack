<?php

namespace Lit\Config\Crud;

use App\Models\Project;
use Ignite\Crud\Config\CrudConfig;
use Ignite\Crud\CrudIndex;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Crud\ProjectController;

class ProjectConfig extends CrudConfig
{
    /**
     * Model class.
     *
     * @var string
     */
    public $model = Project::class;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = ProjectController::class;

    /**
     * Model singular and plural name.
     *
     * @param  Project|null project
     * @return array
     */
    public function names(Project $project = null)
    {
        return [
            'singular' => 'Project',
            'plural'   => 'Projects',
        ];
    }

    /**
     * Get crud route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return 'projects';
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
            $form->input('title')
                 ->width(3 / 4);
            $form->boolean('is_active')
                 ->title('Active?')
                 ->width(1 / 4);
            $form->image('images')
                 ->firstBig()
                 ->maxFiles(999);
        });
    }
}
