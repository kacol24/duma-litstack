<?php

namespace Lit\Config\Crud;

use App\Models\Post;
use Ignite\Crud\Config\CrudConfig;
use Ignite\Crud\CrudIndex;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Crud\PostController;

class PostConfig extends CrudConfig
{
    /**
     * Model class.
     *
     * @var string
     */
    public $model = Post::class;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = PostController::class;

    /**
     * Model singular and plural name.
     *
     * @param  Post|null post
     * @return array
     */
    public function names(Post $post = null)
    {
        return [
            'singular' => 'Post',
            'plural'   => 'Posts',
        ];
    }

    /**
     * Get crud route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return 'posts';
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
        $page->expand();

        $page->group(function ($page) {
            $page->card(function ($form) {
                $form->group(function ($form) {
                    $form->input('title')
                         ->max(60);
                    $form->textarea('excerpt')
                         ->maxChars(250);
                    $form->wysiwyg('body');
                    $form->image('images')
                         ->firstBig();
                });
            });
        })->width(8);

        $page->group(function ($page) {
            $page->card(function ($form) {
                $form->boolean('is_active')
                     ->title('Active?')
                     ->width(6);
                $form->boolean('is_featured')
                     ->title('Featured?')
                     ->width(6);
                $form->datetime('published_at')
                     ->formatted('lll')
                     ->onlyDate(false);
            })->title('Meta');
        })->width(4);
    }
}
