<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Nueva Reservación
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('status'))
            <div class="px-5">
                <div class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                    @if (session('status') == 'room-occuped')
                        La sala ya está ocupada en la fecha y hora seleccionada.
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
                    <form method="POST" action="{{ route('room-reservations.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="room_id" class="block text-sm font-medium text-gray-700">Sala</label>
                            <select name="room_id" id="room_id"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="reservation_date" class="block text-sm font-medium text-gray-700">Fecha</label>
                            <input type="date" name="reservation_date" id="reservation_date"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                min="{{ now()->toDateString() }}" max="{{ now()->addMonth()->toDateString() }}">
                        </div>

                        <div class="mb-4">
                            <label for="reservation_time" class="block text-sm font-medium text-gray-700">Hora</label>
                            <select name="reservation_time" id="reservation_time"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @for ($hour = 8; $hour <= 19; $hour++)
                                    @for ($minute = 0; $minute < 60; $minute += 15)
                                        @php
                                            $time = sprintf('%02d:%02d', $hour, $minute);
                                        @endphp
                                        <option value="{{ $time }}">{{ $time }}</option>
                                    @endfor
                                @endfor
                            </select>
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 btn btn-success">
                                Crear Reservación
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
