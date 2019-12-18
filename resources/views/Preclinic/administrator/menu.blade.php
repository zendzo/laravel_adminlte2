<ul>
    <li class="menu-title">Main</li>
    <li class="{{ active('admin.dashboard') }}">
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
    </li>
    <li>
        <a href="doctors.html"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
    </li>
    <li>
        <a href="patients.html"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
    </li>
    <li>
        <a href="appointments.html"><i class="fa fa-calendar"></i> <span>Queues</span></a>
    </li>
    <li>
        <a href="schedule.html"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
    </li>
    <li>
        <a href="departments.html"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
    </li>

    <li class="menu-title">User Management</li>
    <li class="submenu">
        <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="employees.html">Employees List</a></li>
            <li><a href="leaves.html">Leaves</a></li>
            <li><a href="holidays.html">Holidays</a></li>
            <li><a href="attendance.html">Attendance</a></li>
        </ul>
    </li>
</ul> <!--- end ul --->