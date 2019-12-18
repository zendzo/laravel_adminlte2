<div class="dropdown-menu">
	<a class="dropdown-item" href="profile.html">My Profile</a>
	<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
	<a class="dropdown-item" href="settings.html">Settings</a>
	<a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Sign Out
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>