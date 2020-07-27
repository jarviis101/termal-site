<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NewsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('новость', 'новости');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name_ru')->type('text')->label('Название');
        CRUD::column('slug')->type('text');
        CRUD::column('image')->type('image')->label('Изображение');
        CRUD::column('content_ru')->type('markdown')->label('Содержание');
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
        CRUD::setValidation(NewsRequest::class);

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
        CRUD::field('content_ru')->type('wysiwyg')->label('Содержание (RU)');
        CRUD::field('content_ua')->type('wysiwyg')->label('Содержание (UA)');
        CRUD::field('content_en')->type('wysiwyg')->label('Содержание (EN)');

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
