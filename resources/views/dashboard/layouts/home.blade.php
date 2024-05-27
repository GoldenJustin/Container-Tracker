@extends('dashboard/layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li> <a href="{{ route('container.index') }}"> <i class="icon-dashboard"></i> My Containers </a> </li>
                <li> <a href="{{ route('driver.index') }}"> <i class="icon-shopping-bag"></i> Drivers</a> </li>
                <li> <a href="{{ route('truck.index') }}"> <i class="icon-web"></i> Trucks </a> </li>
                <li> <a href="{{ route('allocated.index') }}"> <i class="icon-web"></i> Allocated Containers </a> </li>
                @auth
                    @if (Auth::user()->hasRole('super-admin'))
                        <li><a href="{{ URL::to('users') }}">
                                <i class="icon-people"></i> Manage Users
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    @endsection
