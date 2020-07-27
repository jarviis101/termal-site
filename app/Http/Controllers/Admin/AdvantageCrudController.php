<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdvantageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AdvantageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AdvantageCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Advantage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/advantage');
        CRUD::setEntityNameStrings('преимущество', 'преимущества');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title_ru')->type('text')->label('Название');
        CRUD::column('icon')->type('image')->label('Изображение(иконка)');
        CRUD::column('description_ru')->type('markdown')->label('Содержание');
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
        CRUD::setValidation(AdvantageRequest::class);

        CRUD::setFromDb(); // fields

        CRUD::field('title_ru')->type('text')->label('Название (RU)')->wrapperAttributes([
            'class' => 'form-group col-md-4'
        ]);
        CRUD::field('title_ua')->type('text')->label('Название (UA)')->wrapperAttributes([
            'class' => 'form-group col-md-4'
        ]);
        CRUD::field('title_en')->type('text')->label('Название (EN)')->wrapperAttributes([
            'class' => 'form-group col-md-4'
        ]);
        CRUD::field('icon')->type('image')->upload(true)->label('Изображение(иконка)');
        CRUD::field('description_ru')->type('wysiwyg')->label('Содержание (RU)');
        CRUD::field('description_ua')->type('wysiwyg')->label('Содержание (UA)');
        CRUD::field('description_en')->type('wysiwyg')->label('Содержание (EN)');
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
