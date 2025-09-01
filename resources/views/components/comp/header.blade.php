<header class="app-header">
    <nav class="app-header__body">
        <a href="{{ url('/') }}" class="app-logo">Jobfinder</a>

        <ul>
            <li><a href="{{ url('news') }}">News</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
            <li><a href="{{ url('jobs') }}">Jobs</a></li>
            <a href="{{ url('contact') }}" class="contact-btn">Contact</a>
        </ul>
    </nav>
</header>