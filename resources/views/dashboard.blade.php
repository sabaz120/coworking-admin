<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Centro de reservas de TW Group Coworking
        </h2>
    </x-slot> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Resumen</h3>

                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="bg-blue-100 p-4 rounded-lg">
                                <h4 class="text-md font-semibold mb-2">Reservaciones Pendientes</h4>
                                <p class="text-3xl font-bold">{{$pendingReservations}}</p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="bg-green-100 p-4 rounded-lg">
                                <h4 class="text-md font-semibold mb-2">Reservaciones Confirmadas</h4>
                                <p class="text-3xl font-bold">{{$confirmedReservations}}</p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="bg-red-100 p-4 rounded-lg">
                                <h4 class="text-md font-semibold mb-2">Reservaciones Canceladas</h4>
                                <p class="text-3xl font-bold">{{$canceledReservations}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4">Próximas Reservaciones</h3>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sala</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nextReservations as $reservation)
                                    <tr>
                                        <td>{{$reservation->room->name}}</td>
                                        <td>{{$reservation->start_date->format('Y-m-d')}}</td>
                                        <td>{{$reservation->start_date->format('H:i')}}</td>
                                        <td>{{$reservation->reservation_status_name}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>