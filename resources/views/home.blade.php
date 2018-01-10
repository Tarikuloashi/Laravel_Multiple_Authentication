@extends('layouts.app')

@section('logi')
    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{ url('/users/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/users/logout') }}" method="get" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        @component('components.who')
                        @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
