<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function default()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'meta_title_ru',
            'label' => 'Название страницы (RU)',
            'fake' => true,
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ]
        ]);

        $this->crud->addField([
            'name' => 'meta_title_ua',
            'label' => 'Название страницы (UA)',
            'fake' => true,
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ]
        ]);

        $this->crud->addField([
            'name' => 'meta_title_en',
            'label' => 'Название страницы (EN)',
            'fake' => true,
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ]
        ]);

        $this->crud->addField([
            'name' => 'meta_description_ru',
            'label' => 'Описание (RU)',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'meta_description_ua',
            'label' => 'Описание (UA)',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'meta_description_en',
            'label' => 'Описание (EN)',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => trans('backpack::pagemanager.meta_keywords'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'content_ru',
            'label' => 'Содержание (RU)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'content_ua',
            'label' => 'Содержание (UA)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'content_en',
            'label' => 'Содержание (EN)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);
    }

    private function about()
    {
        $this->crud->addField([
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'meta_title_ru',
            'label' => 'Название страницы (RU)',
            'fake' => true,
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ]
        ]);

        $this->crud->addField([
            'name' => 'meta_title_ua',
            'label' => 'Название страницы (UA)',
            'fake' => true,
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ]
        ]);

        $this->crud->addField([
            'name' => 'meta_title_en',
            'label' => 'Название страницы (EN)',
            'fake' => true,
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ]
        ]);
        $this->crud->addField([
            'name' => 'meta_description_ru',
            'label' => 'Описание (RU)',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'meta_description_ua',
            'label' => 'Описание (UA)',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'meta_description_en',
            'label' => 'Описание (EN)',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => trans('backpack::pagemanager.meta_keywords'),
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'content_ru',
            'label' => 'Содержание (RU)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'content_ua',
            'label' => 'Содержание (UA)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'content_en',
            'label' => 'Содержание (EN)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'image',
            'label' => trans('Дополнительное изображение'),
            'type' => 'image',
            'upload' => true,
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'additional_content_ru',
            'label' => 'Доп. содержание (RU)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'additional_content_ua',
            'label' => 'Доп. содержание (UA)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);

        $this->crud->addField([
            'name' => 'additional_content_en',
            'label' => 'Доп. содержание (EN)',
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ]);
    }
}
