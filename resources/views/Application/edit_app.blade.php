@extends('Layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <div class="container-fluid top">
        <section class="work-area">
            <div class="sub-nav-menu">
                <ul>
                    <li><a href="{{ url('') }}">Dashboard</a></li><span class="span">|</span>
                </ul>
            </div>
            <div class="pages">
                <div class="layout">
                    <!-- Left Menu Section -->
                @include('Layouts.left_menu')
                <!-- Middle Container Section -->
                <div class="middle-container">

                    @livewire('edit-application', ['Id' => $Id])

                </div>

                <!-- Right Menu for Insight Data -->
                @include('Layouts.right_insight')
                </div>
                </div>
        </section>
    </div>
</body>


</html>










@endsection
