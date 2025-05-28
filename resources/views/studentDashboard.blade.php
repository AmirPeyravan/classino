@extends('layouts.panel.student.student')

@section('content')

    @php
        $tab = request('tab', 'dashboard');
    @endphp

    <div class="tabs-wrapper">

        <div class="tab-content {{ $tab === 'dashboard' ? 'active' : '' }}" id="tab-dashboard">
            @include('components.panel.student.dashboard')
        </div>

        <div class="tab-content {{ $tab === 'registerClass' ? 'active' : '' }}" id="tab-classManagement">
            @include('components.panel.student.registerClass')
        </div>

        <div class="tab-content {{ $tab === 'myClasses' ? 'active' : '' }}" id="tab-uploadContent">
            @include('components.panel.student.myClasses')
        </div>

        <div class="tab-content {{ $tab === 'messages' ? 'active' : '' }}" id="tab-messages">
            @include('components.panel.student.messages')
        </div>

    </div>


@endsection


