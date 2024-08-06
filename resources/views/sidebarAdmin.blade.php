<aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">CV. OgahRugi</a>
                </div>
                <ul class="sidebar-nav">
                    @if(auth()->user()->hasRole('administrator'))    
                    <li class="sidebar-header">
                        Elemen Administrator
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('dashboardbaru')}}" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('databarang')}}" class="sidebar-link">
                            <i class="fa-solid fa-cart-flatbed pe-2"></i>
                            Data Barang
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->hasRole('operator'))
                    <li class="sidebar-header">
                        Elemen Operator
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('dashboardoperator')}}" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->hasRole('petugas'))
                    <li class="sidebar-header">
                        Elemen Petugas
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('dashboardpetugas')}}" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->hasRole('administrator') || auth()->user()->hasRole('operator') || auth()->user()->hasRole('petugas'))
                    <li class="sidebar-item">
                        <a href="{{route('datapembelian')}}" class="sidebar-link">
                            <i class="fa-solid fa-money-check-dollar pe-2"></i>
                            Data Pembelian
                        </a>
                    </li>
                    @endif
                    @if(auth()->user()->hasRole('administrator') || auth()->user()->hasRole('operator'))
                    <li class="sidebar-item">
                        <a href="{{route('datapemakaian')}}" class="sidebar-link">
                            <i class="fa-solid fa-chart-pie pe-2"></i>
                            Data Pemakaian
                        </a>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </aside>