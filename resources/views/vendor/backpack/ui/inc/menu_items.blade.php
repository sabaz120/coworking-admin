{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Usuarios" icon="la la-users" :link="backpack_url('user')" />
<x-backpack::menu-item title="Reservaciones de salas" icon="la la-calendar-check" :link="backpack_url('room-reservation')" />
<x-backpack::menu-item title="Salas" icon="la la-desktop" :link="backpack_url('room')" />