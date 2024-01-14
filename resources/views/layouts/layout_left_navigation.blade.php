<div class="h-100 d-flex flex-column flex-grow-1">
    <div class="bg-purple-light p-2">
        <div class="d-flex bg-opacity-25 text-white">
            <img  src="{{asset('images/sarikar-logo.png')}}" alt="Logo" class="logo-small">
            <h3 class="m-2">Sarikar.com</h3>
        </div>
    </div>
    <div class="h-100 bg-purple-dark flex-grow-1 m-0 sidebar-sticky sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('home') ? 'active' : '' }}" href="/">
                    <i class="fas fa-tachometer-alt icon"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('projects.index') ? 'active' : ''}}" href="{{route('projects.index')}}" >
                    <i class="fas fa-folder icon"></i>
                    <span>Projects</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('tasks.index') ? 'active' : ''}}" href="{{route('tasks.index')}}">
                    <i class="fas fa-tasks icon"></i>
                    <span>Tasks</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@vite('resources/views/layouts/left_navigation.js')

