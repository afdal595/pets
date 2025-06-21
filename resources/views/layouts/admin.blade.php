<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin PetShop</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #F97B8B 0%, #dd3e54 100%);
            --success-gradient: linear-gradient(135deg, #48c6ef 0%, #6f86d6 100%);
            --info-gradient: linear-gradient(135deg, #0396FF 0%, #ABDCFF 100%);
            --warning-gradient: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
            --danger-gradient: linear-gradient(135deg, #f43b47 0%, #453a94 100%);
            --card-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.1);
            --transition-base: all 0.3s ease;
        }

        body {
            background-color: #f8f9fc;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            background: var(--primary-gradient);
            box-shadow: 4px 0 25px rgba(0,0,0,0.15);
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
        }
        
        .sidebar-sticky {
            height: calc(100vh - 48px);
            overflow-x: hidden;
            overflow-y: auto;
            padding: 1rem;
        }

        .sidebar .nav-link {
            color: rgba(255,255,255,0.85);
            border-radius: 12px;
            padding: 12px 20px;
            margin: 8px 0;
            transition: var(--transition-base);
            position: relative;
            z-index: 1;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(255,255,255,0.1), transparent);
            border-radius: 12px;
            opacity: 0;
            transition: var(--transition-base);
            z-index: -1;
        }

        .sidebar .nav-link:hover {
            color: #fff;
            transform: translateX(5px);
            border-color: rgba(255,255,255,0.2);
        }

        .sidebar .nav-link:hover::before {
            opacity: 1;
        }

        .sidebar .nav-link.active {
            color: #fff;
            background: rgba(255,255,255,0.15);
            border-color: rgba(255,255,255,0.3);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .sidebar .nav-link i {
            transition: var(--transition-base);
        }

        .sidebar .nav-link:hover i {
            transform: translateX(3px);
        }
        
        .navbar {
            background: var(--primary-gradient) !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 12px 0;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
            padding: 0 1rem;
        }
        
        main {
            padding-top: 76px;
            min-height: 100vh;
        }
        
        @media (min-width: 768px) {
            main {
                padding-left: 240px;
            }
        }

        .card {
            border: none;
            border-radius: 20px;
            background: #ffffff;
            box-shadow: var(--card-shadow);
            transition: var(--transition-base);
            overflow: hidden;
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: transparent;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 1.5rem;
            position: relative;
        }
        
        .card-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 100%;
            background: var(--primary-gradient);
            opacity: 0.5;
        }

        .btn {
            padding: 0.6rem 1.5rem;
            border-radius: 12px;
            font-weight: 500;
            transition: var(--transition-base);
            position: relative;
            overflow: hidden;
            text-transform: capitalize;
            letter-spacing: 0.3px;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: var(--transition-base);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-success {
            background: var(--success-gradient);
            border: none;
            box-shadow: 0 4px 15px rgba(72, 198, 239, 0.4);
        }

        .btn-info {
            background: var(--info-gradient);
            border: none;
            box-shadow: 0 4px 15px rgba(3, 150, 255, 0.4);
        }

        .btn-warning {
            background: var(--warning-gradient);
            border: none;
            box-shadow: 0 4px 15px rgba(246, 211, 101, 0.4);
        }

        .btn-danger {
            background: var(--danger-gradient);
            border: none;
            box-shadow: 0 4px 15px rgba(244, 59, 71, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .table {
            border-radius: 15px;
            overflow: hidden;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            box-shadow: var(--card-shadow);
        }

        .table thead th {
            background: var(--primary-gradient);
            color: white;
            font-weight: 500;
            border: none;
            padding: 1rem;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .table tbody td {
            padding: 1rem;
            border: none;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            vertical-align: middle;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr {
            transition: var(--transition-base);
        }

        .table tbody tr:hover {
            background-color: rgba(102, 126, 234, 0.05);
            transform: translateY(-1px);
        }

        .table img {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: var(--transition-base);
        }

        .table img:hover {
            transform: scale(1.05);
        }

        /* Basic Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }

        /* Alert Styling */
        .alert {
            border: none;
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1rem;
            animation: fadeIn 0.3s ease-out;
        }

        .alert-success {
            background: var(--success-gradient);
            color: white;
            box-shadow: 0 4px 15px rgba(72, 198, 239, 0.3);
        }

        .alert-danger {
            background: var(--danger-gradient);
            color: white;
            box-shadow: 0 4px 15px rgba(244, 59, 71, 0.3);
        }

        /* Dropdown Styling */
        .dropdown-menu {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
            padding: 0.5rem;
            animation: fadeIn 0.2s ease-out;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
        }

        .dropdown-item {
            border-radius: 8px;
            padding: 0.5rem 1rem;
            transition: var(--transition-base);
        }

        .dropdown-item:hover {
            background: var(--primary-gradient);
            color: white;
            transform: translateX(5px);
        }

        /* Form Controls */
        .form-control {
            border-radius: 12px;
            border: 1px solid rgba(0,0,0,0.1);
            padding: 0.75rem 1rem;
            transition: var(--transition-base);
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.25);
            border-color: #667eea;
        }

        /* Pagination Styling */
        .pagination {
            gap: 0.25rem;
        }

        .page-link {
            border-radius: 8px;
            border: none;
            padding: 0.5rem 1rem;
            color: #667eea;
            transition: var(--transition-base);
        }

        .page-link:hover {
            background: var(--primary-gradient);
            color: white;
            transform: translateY(-2px);
        }

        .page-item.active .page-link {
            background: var(--primary-gradient);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .page-item.disabled .page-link {
            background: rgba(0,0,0,0.05);
            color: rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column flex-md-row">
        <div class="sidebar">
            <div class="sidebar-sticky">
                <a class="navbar-brand" href="#">PetShop Admin</a>
                <nav class="nav flex-column">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-paw"></i>
                        Pets
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-user"></i>
                        Users
                    </a>
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>
                </nav>
            </div>
        </div>

        <div class="flex-grow-1">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-bell"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-user-circle"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
