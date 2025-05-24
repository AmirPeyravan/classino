@extends('layouts.panel.admin.admin')

@section('content')

    @php
        $tab = request('tab', 'dashboard');
    @endphp

    <div class="tabs-wrapper">

        <div class="tab-content {{ $tab === 'dashboard' ? 'active' : '' }}" id="tab-dashboard">
            @include('components.panel.dashboard')
        </div>

        <div class="tab-content {{ $tab === 'users' ? 'active' : '' }}" id="tab-users">
            @include('components.panel.users')
        </div>

        <div class="tab-content {{ $tab === 'teachers' ? 'active' : '' }}" id="tab-teachers">
            @include('components.panel.teachers')
        </div>

        <div class="tab-content {{ $tab === 'categories' ? 'active' : '' }}" id="tab-categories">
            @include('components.panel.categories')
        </div>

        <div class="tab-content {{ $tab === 'courses' ? 'active' : '' }}" id="tab-courses">
            @include('components.panel.courses')
        </div>

        <div class="tab-content {{ $tab === 'orders' ? 'active' : '' }}" id="tab-orders">
            @include('components.panel.orders')
        </div>

        <div class="tab-content {{ $tab === 'settings' ? 'active' : '' }}" id="tab-settings">
            @include('components.panel.settings')
        </div>

        <div class="tab-content {{ $tab === 'reports' ? 'active' : '' }}" id="tab-reports">
            @include('components.panel.reports')
        </div>

    </div>

@endsection
