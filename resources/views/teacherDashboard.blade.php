@extends('layouts.panel.teacher.teacher')

@section('content')

    @php
        $tab = request('tab', 'dashboard');
    @endphp

    <div class="tabs-wrapper">

        <div class="tab-content {{ $tab === 'dashboard' ? 'active' : '' }}" id="tab-dashboard">
            @include('components.panel.teacher.dashboard')
        </div>

        <div class="tab-content {{ $tab === 'classManagement' ? 'active' : '' }}" id="tab-classManagement">
            @include('components.panel.teacher.classManagement')
        </div>

        <div class="tab-content {{ $tab === 'uploadContent' ? 'active' : '' }}" id="tab-uploadContent">
            @include('components.panel.teacher.uploadContent')
        </div>

        <div class="tab-content {{ $tab === 'messages' ? 'active' : '' }}" id="tab-messages">
            @include('components.panel.teacher.messages')
        </div>

    </div>


@endsection

