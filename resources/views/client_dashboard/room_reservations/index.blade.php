<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Reservaciones de salas
            <div class="float-right">
                <a href="{{ route('room-reservations.create') }}" class="btn btn-primary">Nueva Reservación</a>
            </div>
        </h2>
    </x-slot>


    <div class="py-12">
        @if (session('status'))
            <div class="px-5">
                <div class="alert @if(in_array(session('status'), ['reservation-deleted', 'reservation-created'])) alert-success @else alert-danger @endif alert-dismissible fade show" role="alert">
                    @if(session('status') == 'reservation-deleted')
                        La reservación ha sido eliminada.
                    @elseif(session('status') == 'reservation-created')
                        La reservación ha sido creada exitosamente.
                    @elseif(session('status') == 'not-authorized')
                        No tienes permisos para eliminar esta reservación.
                    @else
                        {{ session('status') }}
                    @endif
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sala</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Fin</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->room_name }}</td>
                                    <td>{{ $reservation->start_date }}</td>
                                    <td>{{ $reservation->end_date }}</td>
                                    <td>{{ $reservation->reservation_status_name }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('room-reservations.delete', $reservation->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No hay reservaciones.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $reservations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
