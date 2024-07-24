<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">
        <a href="{{route('home')}}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <i class="bi bi-book fs-4"></i>
            </span>
            <span class="logo-text">SCHOOL</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link" href="{{route('home')}}"><i class="icofont-dashboard fs-5"></i> <span>Dashboard</span></a></li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-account" href="#">
                    <i class="icofont-user fs-5"></i> <span>Account</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-account">
                    <li><a class="ms-link" href="{{route('admin.profile')}}">Profile</a></li>
                    <li><a class="ms-link" href="{{route('admin.credentials')}}">Credentials</a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-students" href="#">
                    <i class="icofont-graduate-alt fs-5"></i> <span>Students</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-students">
                    <li><a class="ms-link" href="{{ route('admin.student.add') }}">Add Student</a></li>
                    <li><a class="ms-link" href="{{ route('admin.student.list')}}">Students List</a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-teachers" href="#">
                    <i class="icofont-teacher fs-5"></i> <span>Teachers</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-teachers">
                    <li><a class="ms-link" href="{{route('admin.teacher.add')}}">Add Teacher</a></li>
                    <li><a class="ms-link" href="{{route('admin.teacher.list')}}">Teachers List</a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-departments" href="#">
                    <i class="icofont-layers fs-5"></i> <span>Departments</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-departments">
                    <li><a class="ms-link" href="{{ route('admin.department.add') }}">Add Department</a></li>
                    <li><a class="ms-link" href="{{ route('admin.department.list') }}">List Departments</a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-classes" href="#">
                    <i class="icofont-ui-copy fs-5"></i> <span>Subjects/Courses</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-classes">
                    <li><a class="ms-link" href="#">Add Courses</a></li>
                    <li><a class="ms-link" href="#">List Courses</a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-attendance" href="#">
                    <i class="icofont-clip-board fs-5"></i> <span>Attendance</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-attendance">
                    <li><a class="ms-link" href="#">Attendance List</a></li>
                    <li><a class="ms-link" href="#">Add Attendance</a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-reports" href="#">
                    <i class="icofont-chart-bar-graph fs-5"></i> <span>Reports</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-reports">
                    <li><a class="ms-link" href="#">Student Reports</a></li>
                    <li><a class="ms-link" href="#">Class Reports</a></li>
                    <li><a class="ms-link" href="#}">Teacher Reports</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-departments" href="#">
                    <i class="icofont-ui-home fs-5"></i> <span>Hostels</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse" id="menu-departments">
                    <li><a class="ms-link" href="{{ route('admin.department.add') }}">Add Hostel</a></li>
                    <li><a class="ms-link" href="{{ route('admin.department.list') }}">List Hostel</a></li>
                </ul>
            </li>
        </ul>
        <!-- Menu: menu collapse btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>
