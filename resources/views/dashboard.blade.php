@php
    $role = auth()->user()->role;
@endphp

@if ($role == 'admin')

    @include('admin.dashboard')

@else

    @include('mitra.dashboard')

@endif