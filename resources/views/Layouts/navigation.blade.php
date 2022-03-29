<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ url('/')}}">Digital Cyber</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('home_dashboard') }}">Home</a>
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('admin_home') }}">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('app_home') }}">Application</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/client_registration')  }}">New Client</a></li>
                        <li><a class="dropdown-item" href="{{ url('services')  }}">Services</a></li>
                        <li><a class="dropdown-item" href="{{ url('/debit_entry')  }}">Status</a></li>
                        <li><a class="dropdown-item" href="{{ url('add_document')  }}">Documents</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Ledger
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/credit_entry')  }}">Credit Entry</a></li>
                        <li><a class="dropdown-item" href="{{ url('/debit_entry')  }}">Debit Entry</a></li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Balance Sheet</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('app_home')}}" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('app_home')  }}">Applications</a></li>
                        <li><a class="dropdown-item" href="{{ url('new_temp')  }}">Temp</a></li>
                        <li><a class="dropdown-item" href="{{ url('print')  }}">print </a></li>
                        <li><a class="dropdown-item" href="{{ url('')  }}">Pan</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('view_recycle_bin')}}">Recycle Bin</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <!-- Left links -->

            <!-- Search form -->
            @livewire('global-search-bar')
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
