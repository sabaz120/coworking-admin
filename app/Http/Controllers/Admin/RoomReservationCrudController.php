<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
//Models
use \App\Models\{
    Room,
    RoomReservation,
    User
};
/**
 * Class RoomReservationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RoomReservationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\RoomReservation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/room-reservation');
        CRUD::setEntityNameStrings('room reservation', 'room reservations');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'room_name', // Nombre de la columna (puedes elegir el que quieras)
            'label' => 'Sala', // Etiqueta para la columna
            'type' => 'text',
        ]);
    
        CRUD::addColumn([
            'name' => 'user_name',
            'label' => 'Cliente',
            'type' => 'text',
        ]);
            
        CRUD::addColumn([
            'name' => 'reservation_status_name',
            'label' => 'Estado',
            'type' => 'text',
        ]);
        CRUD::setFromDb(); // set columns from db columns.
        // Opcional: Oculta las columnas de IDs si no las necesitas
        CRUD::removeColumn('room_id');
        CRUD::removeColumn('user_id');
        CRUD::removeColumn('reservation_status_id');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'room_id' => 'required|exists:rooms,id',
            'reservation_status_id' => 'required|exists:reservation_statuses,id',
            'user_id' => 'required|exists:users,id',
            'start_date_date' => 'required',
            'start_date_time' => 'required',
        ]);
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::field('room_id')->type('select')
            ->attribute('name')
            ->model(\App\Models\Room::class)
            ->label('(*) Sala');
        CRUD::field('reservation_status_id')->type('select')
            ->attribute('name')
            ->model(\App\Models\ReservationStatus::class)
            ->label('(*) Estado');
        CRUD::field('user_id')->type('select_from_array')
            ->label('(*) Cliente')
            ->options(\App\Models\User::onlyClients()->pluck('name', 'id')->toArray());
        //CRUD::removeField('end_date');
        CRUD::field('start_date')->type('time_range_datetime')->label('(*) Fecha y hora de inicio');
        CRUD::field('end_date')->type('hidden')->label('(*) Fecha y hora de fin');
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
