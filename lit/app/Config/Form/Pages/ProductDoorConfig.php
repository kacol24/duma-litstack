<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Config\Seoable;
use Lit\Http\Controllers\Form\Pages\ProductPanelController;

class ProductDoorConfig extends FormConfig
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
        return "pages/product-door";
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Duma Door',
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
            $form->block('spec_items')
                 ->title('Items')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('spec', function ($form, $preview) {
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

            $form->list('compare')
                 ->title('Spesifikasi Teknis')
                 ->maxDepth(1)
                 ->previewTitle('{property}')
                 ->form(function ($form) {
                     $form->input('property')
                          ->title('Property');
                     $form->input('duma')
                          ->width(6)
                          ->title('DUMA');
                     $form->input('other')
                          ->width(6)
                          ->title('Other');
                 });
            $form->input('compare_heading_1')
                 ->title('Table Heading 1')
                 ->width(1 / 3);
            $form->input('compare_heading_2')
                 ->title('Table Heading 2')
                 ->width(1 / 3);
            $form->input('compare_heading_3')
                 ->title('Table Heading 3')
                 ->width(1 / 3);
            $form->block('content')
                 ->title('Content')
                 ->repeatables(function ($repeatables) {
                     // Add as many repeatables as you want.
                     $repeatables->add('block', function ($form, $preview) {
                         // The block preview.
                         $preview->col('{title}');

                         $form->input('title')
                              ->title('Title');
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
                                      $form->boolean('text_center')
                                           ->title('Align Text Center');
                                      $form->boolean('image_last')
                                           ->title('Image Last')
                                           ->hint('Image appear at the bottom of text.');
                                      $form->boolean('remove_bg')
                                           ->title('Remove Background Color');
                                      $form->boolean('full_width')
                                           ->title('Full Width');
                                  });
                              })->blockWidth(4);
                     });
                 });
        })->title('Specifications');
        $page->card(function ($form) {
            $form->input('finishing_title')->title('Title');
            $form->wysiwyg('finishing_description');
            $form->block('finishing_content')
                 ->title('Content')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('block', function ($form, $preview) {
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
                                           ->crop(1)
                                           ->maxFiles(1);
                                      $form->input('title')
                                           ->title('Title');
                                  });

                                  $repeatables->add('full', function ($form, $preview) {
                                      $preview->col('{title}');

                                      $form->image('image')
                                           ->translatable()
                                           ->title('Image')
                                           ->crop(1)
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
        })->title('Finishing');

        $page->card(function ($form) {
            $form->input('doorjamb_title')
                 ->title('Title');
            $form->wysiwyg('doorjamb_description')
                 ->title('Description');

            $form->block('doorjamb_items')
                 ->title('Items')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('simple', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->image('image')
                              ->translatable()
                              ->title('Image')
                              ->expand()
                              ->crop(1)
                              ->maxFiles(1);
                         $form->input('title')
                              ->title('Title');
                     });

                     $repeatables->add('full', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->image('image')
                              ->translatable()
                              ->title('Image')
                              ->crop(1)
                              ->expand()
                              ->maxFiles(1);
                         $form->input('title')
                              ->title('Title');
                         $form->wysiwyg('spec')
                              ->title('Spec');
                     });
                 })->blockWidth(4);
        })->title('Kusen');

        $page->card(function ($form) {
            $form->wysiwyg('installation_description')
                 ->title('Description');
            $form->block('installation_documents')
                 ->title('Installation')
                 ->repeatables(function ($repeatables) {
                     $repeatables->add('document', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->input('title')
                              ->title('Title');
                         $form->file('file')
                              ->maxFiles(1)
                              ->title('File');
                     });
                     $repeatables->add('youtube', function ($form, $preview) {
                         $preview->col('{title}');

                         $form->input('title')
                              ->title('Title');
                         $form->input('url')
                              ->type('url')
                              ->placeholder('https://www.youtube.com/embed/zpOULjyy-n8')
                              ->title('URL');
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
