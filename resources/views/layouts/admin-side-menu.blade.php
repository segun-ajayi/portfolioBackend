
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle h-20" src="{{ asset(Auth::user()->profile_photo_url) }}"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{  Auth::user()->name  }}</span>
                        <span class="text-muted text-xs block">{{ 'Welcome' }} <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/' . $page='login') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IP
                </div>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i><span class="nav-label">Home</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('profile.show') }}"><i class="fa fa-user-circle-o"></i><span class="side-menu__label">My Profile</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('messages') }}"><i class="fa fa-envelope-o"></i><span class="side-menu__label">Messages</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('introduction') }}"><i class="fa fa-handshake-o"></i><span class="side-menu__label">Introduction</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('about') }}"><i class="fa fa-user"></i><span class="side-menu__label">About</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('education') }}"><i class="fa fa-book"></i><span class="side-menu__label">Education</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('experience') }}"><i class="fa fa-graduation-cap"></i><span class="side-menu__label">Experience</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('portfolio') }}"><i class="fa fa-briefcase"></i><span class="side-menu__label">Portfolio</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('skill') }}"><i class="fa fa-slack"></i><span class="side-menu__label">Skills</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('social') }}"><i class="fa fa-linkedin"></i><span class="side-menu__label">Social</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('navbar') }}"><i class="fa fa-chain"></i><span class="side-menu__label">Navbar</span></a>
            </li>
{{--            <li>--}}
{{--                <a href="#"><i class="fa fa-cogs"></i><span class="nav_label">Settings</span><span class="fa arrow"></span></a>--}}
{{--                <ul class="nav nav-second-level collapse">--}}
{{--                        <li><a href="{{ route('fees.index') }}"> Fees</a></li>--}}
{{--                        @can('manage programs')--}}
{{--                            <li><a href="{{ route('admin.programs') }}"> Programmes</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('edit institution')--}}
{{--                            <li><a href="{{ route('institution.index') }}"> Global Setup</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage roles and permissions')--}}
{{--                            <li><a href="{{ route('role.index') }}"> Roles & Permissions</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage accommodation')--}}
{{--                            <li><a href="{{ route('admin.hostels') }}"> Accommodation</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage student import')--}}
{{--                            <li><a href="{{ route('admin.importStudents') }}"> Import Student</a></li>--}}
{{--                        @endcan--}}
{{--                    @can('manage schfees')--}}
{{--                        <li><a href="{{ route('fees.edit') }}"> School Fees Setup</a></li>--}}
{{--                    @endcan--}}

{{--                </ul>--}}
{{--            </li>--}}
{{--            @can('view reports')--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-bar-chart"></i><span class="nav_label">Reports</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        @can('manage studentrpt')--}}
{{--                            <li><a href="{{ route('admin.studentReport') }}">Students Reports</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage applicationrpt')--}}
{{--                            <li><a href="{{ route('admin.applicationReport') }}">Application Reports</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage financerpt')--}}
{{--                            <li><a href="{{ route('admin.financeReport') }}">Financial Reports</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage clearancerpt')--}}
{{--                            <li><a href="#">Clearance Reports</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage complaintsrpt')--}}
{{--                            <li><a href="#">Complaints Reports</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage security')--}}
{{--                            <li><a href="{{ route('admin.securityReport') }}">Security Reports</a></li>--}}
{{--                        @endcan--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @can('manage support')--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-support"></i><span class="nav_label">Support</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        @can('view finance')--}}
{{--                        <li><a href="{{ route('admin.finance') }}">Payment Transactions</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('view complaints')--}}
{{--                            <li><a href="{{ route('admin.complaints') }}">Manage Complaints</a></li>--}}
{{--                        @endcan--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @can('manage officers')--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-users"></i><span class="nav_label">Manage Accounts</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        @can('manage users')--}}
{{--                            <li><a href="{{ route('admin.manageUsers') }}">User Accounts</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage clrofficer')--}}
{{--                            <li><a href="{{ route('admin.manageOfficers') }}">Clearance Officers</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage agents')--}}
{{--                            <li><a href="{{ route('admin.manageAgents') }}">Application Agents</a></li>--}}
{{--                        @endcan--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @canany(['manage student', 'manage clearance'])--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-graduation-cap"></i><span class="nav_label">Students</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        @can('upload admission')--}}
{{--                            <li><a href="{{ route('admission.upload') }}"> Upload Admission</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage student')--}}
{{--                            <li><a href="{{ route('admin.manageStudent') }}"> Manage Student</a></li>--}}
{{--                        @endcan--}}
{{--                        @can('manage clearance')--}}
{{--                            <li><a href="{{ route('admin.studentClearance') }}"> Students Clearance</a></li>--}}
{{--                        @endcan--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @can('view academics')--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-university"></i><span class="nav_label">Academics</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        <li><a href="{{ route('faculty.index') }}"> Manage Academics</a></li>--}}
{{--                        @can('manage result')--}}
{{--                            <li><a href="{{ route('result.upload') }}"> Manage Results</a></li>--}}
{{--                        @endcan--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @can('view application')--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-file-text-o"></i><span class="nav_label">Applications</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        <li><a href="{{ route('application.index') }}"> Manage Applications</a></li>--}}
{{--                        <li><a href="{{ route('admin.manageApplicant') }}"> Manage Applicant</a></li>--}}
{{--                        @can('download application')--}}
{{--                            <li><a href="{{ route('application.download') }}"> Download Applicants</a></li>--}}
{{--                        @endcan--}}
{{--                        <li><a href="{{ route('courseRequirement') }}"> Course Requirement</a></li>--}}
{{--                        <li><a href="{{ url('/' . $page='chat') }}"> Assigned Requirement</a></li>--}}
{{--                        @can('upload application')--}}
{{--                            <li><a href="{{ route('application.upload') }}"> Upload Jambites</a></li>--}}
{{--                        @endcan--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @can('manage special')--}}
{{--                <li>--}}
{{--                    <a href="{{ route('admin.specials') }}"><i class="fa fa-cubes"></i><span class="nav-label">Special Contents</span></a>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @can('manage election')--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-check-square-o"></i><span class="nav_label">Elections</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        <li><a href="{{ route('admin.election') }}"> Manage Election</a></li>--}}
{{--                        <li><a href="{{ route('election.result') }}"> Election Result</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
{{--            @can('manage classroom')--}}
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-book"></i><span class="nav_label">Classroom</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        <li><a href="{{ route('classroom.courses') }}"> My courses</a></li>--}}
{{--                        @can('classroom admin')--}}
{{--                            <li><a href="{{ route('manage.courses') }}"> Manage courses</a></li>--}}
{{--                        @endcan--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            @endcan--}}
        </ul>
    </div>
</nav>
