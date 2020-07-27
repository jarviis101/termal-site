<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('категорию', 'категории');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns

        CRUD::column('name_ru')->type('text')->label('Название категории');
        CRUD::column('slug')->type('text')->label('ЧПУ (slug)');
        CRUD::column('image')->type('image')->label('Изображение');
        CRUD::column('seo_text_ru')->type('text')->label('SEO текст');
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CategoryRequest::class);

        // CRUD::setFromDb(); // fields

        // CRUD::field('name')->type('text')->label('Название категории');
        CRUD::field('name_ru')->type('text')->label('Название (RU)')->wrapperAttributes([
            'class' => 'form-group col-md-4'
        ]);
        CRUD::field('name_ua')->type('text')->label('Название (UA)')->wrapperAttributes([
            'class' => 'form-group col-md-4'
        ]);
        CRUD::field('name_en')->type('text')->label('Название (EN)')->wrapperAttributes([
            'class' => 'form-group col-md-4'
        ]);

        CRUD::field('slug')->type('hidden');
        CRUD::field('image')->type('image')->upload(true)->label('Изображение');

        CRUD::field('seo_text_ru')->type('wysiwyg')->label('SEO текст (RU)');
        CRUD::field('seo_text_ua')->type('wysiwyg')->label('SEO текст (UA)');
        CRUD::field('seo_text_en')->type('wysiwyg')->label('SEO текст (EN)');
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
