<?php

namespace Lit\Config\Form\Pages;

use App\Models\ProjectCategory;
use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Config\Crud\ProjectCategoryConfig;
use Lit\Config\Seoable;
use Lit\Http\Controllers\Form\Pages\ProjectController;

class ProjectConfig extends FormConfig
{
    use Seoable;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = ProjectController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/project";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Projects',
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
                 ->expand()
                 ->maxFiles(1);
            $form->input('page_title');
            $form->wysiwyg('page_description');
            $form->manyRelation('project_categories')
                 ->title('Displayed Project Catgories')
                 ->model(ProjectCategory::class)
                 ->sortable()
                 ->small()
                 ->createAndUpdateForm(function ($form) {
                     $form->input('title');
                 })
                 ->use(ProjectCategoryConfig::class);
        });
    }
}
