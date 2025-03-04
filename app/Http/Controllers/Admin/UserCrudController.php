<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.
        CRUD::column('name')->label('Nombre completo');
        CRUD::column('email')->label('Correo electrónico');
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
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
        CRUD::field('roles')->type('select')->entity('roles')
            ->attribute('name')
            ->model(config('permission.models.role'))
            ->pivot(true)
            ->label('Rol');

            //CRUD::setFromDb(); // set fields from db columns.
            CRUD::field('name')->type('text')->label('Nombre completo');
            CRUD::field('email')->type('text')->label('Correo electrónico');
            CRUD::field('password')->type('password')->label('Contraseña');
            CRUD::setValidation([
                'roles' => 'required|exists:roles,id',
                'name' => 'required|min:3|max:60',
                'email' => 'required|email|max:60',
                'password' => 'required|min:6|max:60',
            ]);
        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }
        
    public function store(Request $request)
    {
        try{
            $roles = [(int)$request->input('roles')];
            $request['roles'] = $roles;
            $response = $this->traitStore();
            return $response;
        }catch(\Exception $e){
            $response = $this->traitStore();
            return $response;
        }
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
        $entry = $this->crud->getCurrentEntry();
        $role=$entry->roles()->first();
        CRUD::field('roles')->value($role ? $role->id : null);
        CRUD::setValidation([
            'roles' => 'required|exists:roles,id',
            'name' => 'required|min:3|max:60',
            'email' => 'required|email|max:60',
            'password' => 'min:6|max:60',
        ]);
    }
    
    public function update(Request $request)
    {
        try{
            $roles = [(int)$request->input('roles')];
            $request['roles'] = $roles;
            $response = $this->traitUpdate();
            return $response;
        }catch(\Exception $e){
            $response = $this->traitUpdate();
            return $response;
        }
    }

}
