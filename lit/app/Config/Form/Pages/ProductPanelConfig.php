<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Config\Seoable;
use Lit\Http\Controllers\Form\Pages\ProductPanelController;

class ProductPanelConfig extends FormConfig
{
    use Seoable;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = ProductPanelController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "pages/product-panel";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Duma Panel',
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
        });
        $page->card(function ($form) {
            $form->image('carousel')
                 ->maxFiles(99);
        })->title('Features');
        $page->card(function ($form) {
            $form->image('spec_banner')
                 ->expand()
                 ->maxFiles(1);
            $form->wysiwyg('spec_description');
            $form->block('content')
                 ->title('Content')
                 ->repeatables(function ($repeatables) {
                     // Add as many repeatables as you want.
                     $repeatables->add('block', function ($form, $preview) {
                         // The block preview.
                         $preview->col('{title}');

                         $form->input('title')
                              ->title('Title');
                         $form->input('subtitle')
                              ->title('Subtitle');
                         $form->wysiwyg('description')
                              ->title('Description');

                         $form->block('items')
                              ->title('Items')
                              ->repeatables(function ($repeatables) {
                                  $repeatables->add('simple', function ($form, $preview) {
                                      $preview->col('{title}');

                                      $form->image('image')
                                           ->translatable()
                                           ->title('Image')
                                           ->expand()
                                           ->maxFiles(1);
                                      $form->input('title')
                                           ->title('Title');
                                  });

                                  $repeatables->add('full', function ($form, $preview) {
                                      $preview->col('{title}');

                                      $form->image('image')
                                           ->translatable()
                                           ->title('Image')
                                           ->expand()
                                           ->maxFiles(1);
                                      $form->input('title')
                                           ->title('Title');
                                      $form->wysiwyg('spec')
                                           ->title('Spec');
                                  });
                              })->blockWidth(4);
                     });
                 });
        })->title('Specifications');
        $page->card(function ($form) {
            $form->wysiwyg('finishing_description')
                 ->title('Description');
            $form->image('finishing_images')
                 ->title('Images')
                 ->maxFiles(3);
        })->title('Finishing');

        $page->card(function ($form) {
            $form->wysiwyg('installation_description')
                 ->title('Description');
            $form->block('installation_documents')
                 ->title('Documents')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('document', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->input('title')
                              ->title('Title');
                         $form->file('file')
                              ->maxFiles(1)
                              ->title('File');
                     });
                 })->blockWidth(6);
        })->title('Pemasangan');

        $page->card(function ($form) {
            $form->block('storage_documents')
                 ->title('Documents')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('document', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->input('title')
                              ->title('Title');
                         $form->file('file')
                              ->maxFiles(1)
                              ->title('File');
                     });
                 })->blockWidth(6);
        })->title('Storage & Handling');

        $page->card(function ($form) {
            $form->block('faqs')
                 ->title('Faq')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('faq', function ($form, $preview) {
                         $preview->col('{question}');

                         $form->input('question')
                              ->title('Question');
                         $form->text('answer')
                              ->title('Answer');
                     });
                 })->blockWidth(6);
        })->title('FAQs');
    }
}
