        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu">
                <li>
                    <a href="{{ route('dashboard') }}"><i class="ti-bar-chart"></i><span>Dashboard</span></a>
                   {{--  <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../dashboard/analytics-index.html"><i class="ti-control-record"></i>Analytics</a></li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/crm-index.html"><i class="ti-control-record"></i>CRM</a></li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/helpdesk-index.html"><i class="ti-control-record"></i>Helpdesk</a></li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
                    </ul> --}}
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fas fa-tablets"></i><span>Drugs</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('add-drug') }}">
                            <i class="ti-control-record"></i>Add Drug</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('all-drugs') }}">
                            <i class="ti-control-record"></i>Drug List</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fas fa-prescription-bottle-alt"></i><span>Prescriptions</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('add-presc') }}">
                            <i class="ti-control-record"></i>Create</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('all-prescs') }}">
                            <i class="ti-control-record"></i>View</a>
                        </li>
                    </ul>
                </li> 

                <li>
                    <a href="javascript: void(0);"><i class="fa fas fa-clipboard-list"></i><span>Appointments</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('appts') }}">
                            <i class="ti-control-record"></i>View</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fas fa-cart-arrow-down"></i><span>Orders</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('orders') }}">
                            <i class="ti-control-record"></i>View</a>
                        </li>
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);"><i class="fa fas fa-money-bill"></i><span>Payments</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('payments') }}">
                            <i class="ti-control-record"></i>View</a>
                        </li>
                    </ul>
                </li> 

                <li>
                    <a href="javascript: void(0);"><i class="fa fas fa-at"></i><span>Newsletter Emails</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('emails') }}">
                            <i class="ti-control-record"></i>View</a>
                        </li>
                    </ul>
                </li>                   
            </ul>
        </div>
        <!-- end left-sidenav-->