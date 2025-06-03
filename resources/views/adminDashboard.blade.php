@extends('layouts.panel.admin.admin')



    @php
        $tab = request('tab', 'dashboard');
    @endphp

    <div class="tabs-wrapper">

        <div class="tab-content {{ $tab === 'dashboard' ? 'active' : '' }}" id="tab-dashboard">
            @include('components.panel.admin.dashboard')
        </div>

        <div class="tab-content {{ $tab === 'users' ? 'active' : '' }}" id="tab-users">
            @include('components.panel.admin.users')
        </div>

        <div class="tab-content {{ $tab === 'teachers' ? 'active' : '' }}" id="tab-teachers">
            @include('components.panel.admin.teachers')
        </div>

        <div class="tab-content {{ $tab === 'categories' ? 'active' : '' }}" id="tab-categories">
            @include('components.panel.admin.categories')
        </div>

        <div class="tab-content {{ $tab === 'courses' ? 'active' : '' }}" id="tab-courses">
            @include('components.panel.admin.courses')
        </div>

        <div class="tab-content {{ $tab === 'orders' ? 'active' : '' }}" id="tab-orders">
            @include('components.panel.admin.orders')
        </div>

        <div class="tab-content {{ $tab === 'settings' ? 'active' : '' }}" id="tab-settings">
            @include('components.panel.admin.settings')
        </div>

        <div class="tab-content {{ $tab === 'reports' ? 'active' : '' }}" id="tab-reports">
            @include('components.panel.admin.reports')
        </div>

    </div>

@endsection
