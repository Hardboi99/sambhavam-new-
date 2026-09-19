{{-- resources/views/admin/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel') - Sambhavam</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">

   
    <style>
        body { background: #f4f6f9; }
        .admin-sidebar {
            width: 240px;
            min-height: 100vh;
            background: #1a1f36;
            position: fixed;
            top: 0; left: 0;
            padding-top: 20px;
        }
        .admin-sidebar .logo-box {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            margin-bottom: 12px;
        }
        .admin-sidebar .logo-box img { max-width: 130px; }
        .admin-sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #aab0c0;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 0.92rem;
            transition: all 0.2s ease;
        }
        .admin-sidebar a:hover,
        .admin-sidebar a.active {
            background: rgba(255,122,0,0.12);
            color: #ff7a00;
            border-right: 3px solid #ff7a00;
        }
        .admin-main { margin-left: 240px; }
        .admin-topbar {
            background: #fff;
            padding: 14px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
        }
        .admin-content { padding: 30px; }
        .stat-card {
            background: #fff;
            border-radius: 12px;
            padding: 22px;
            border: 1px solid #eee;
        }
        .stat-card h6 { color: #888; font-size: 0.85rem; margin-bottom: 6px; }
        .stat-card h2 { margin: 0; font-weight: 700; }
    </style>
</head>
<body>

    <div class="admin-sidebar">
        <div class="logo-box">
            <img src="{{ asset('images/logo.png') }}" alt="Sambhavam">
        </div>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fa fa-gauge"></i> Dashboard
        </a>
        <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <i class="fa fa-users"></i> Manage Users
        </a>
        <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            <i class="fa fa-layer-group"></i> Categories
        </a>
        <a href="{{ route('admin.courses.index') }}" class="{{ request()->routeIs('admin.courses.*') ? 'active' : '' }}">
            <i class="fa fa-book"></i> Courses
        </a>
        <a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
            <i class="fa fa-newspaper"></i> Blogs
        </a>
        <a href="{{ route('admin.modules.index') }}" class="{{ request()->routeIs('admin.modules.*') ? 'active' : '' }}">
            <i class="fa fa-link"></i> Modules
        </a>
        
        <a href="{{ route('admin.enquiries.index') }}" class="{{ request()->routeIs('admin.enquiries.*') ? 'active' : '' }}">
            <i class="fa fa-inbox"></i> Enquiries
        </a>
    </div>

    <div class="admin-main">
        <div class="admin-topbar">
            <h5 class="mb-0">@yield('title', 'Dashboard')</h5>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle text-decoration-none text-dark" data-bs-toggle="dropdown">
                    <i class="fa fa-user-circle"></i> {{ auth()->user()?->name ?? 'Admin' }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="admin-content">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>