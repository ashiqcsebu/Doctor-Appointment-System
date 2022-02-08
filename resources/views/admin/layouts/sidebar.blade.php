 <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                              
                            </div>
                            <span class="text-center ">Dashboard</span>
                        </a>
                     {{--    <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button> --}}
                    </div>

                    
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">


               @if(auth()->check()&& auth()->user()->role->name === 'admin')
                               <div class="nav-item active">
                                    <a href="{{url('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>Analytics</span></a>
                                </div>
                                 <div class="nav-lavel">Doctors Info</div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Doctor</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('doctor.create')}}" class="menu-item">Add Doctor</a>
                                        <a href="{{route('doctor.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                 @endif

 @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                <div class="nav-lavel">Patients Info</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-box"></i><span>Appointment</span></a>
                                    <div class="submenu-content">
                                        <a href="{{url('patients')}}" class="menu-item">All Patient</a>
                             <a href="{{url('patients/today')}}" class="menu-item">Approved Patient</a>
                                 
                                        
                                    </div>
                                </div>
                     @endif             
                         
                            </nav>
                        </div>
                    </div>
             
  </div>