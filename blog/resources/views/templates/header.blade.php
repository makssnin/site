@section('header')

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="{{route('main')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Makssnin</span>
    </a>

    <ul class="nav nav-pills">

        <li class="nav-item"><a href="{{route('main')}}" class="nav-link">Main</a></li>
        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
        <li class="nav-item"><a href="{{route('work')}}" class="nav-link">Work</a></li>
        <li class="nav-item"><a href="{{route('contacts')}}" class="nav-link">Contacts</a></li>
        <li class="nav-item"><a href="{{route('contact-data')}}" class="nav-link">Message</a></li>
    </ul>
</header>



