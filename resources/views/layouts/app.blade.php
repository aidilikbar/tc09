<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TC09')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-globe"></i> TC09
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('actors.index') }}">
                            <i class="fas fa-user"></i> Actors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="fas fa-box"></i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trucks.index') }}">
                            <i class="fas fa-truck"></i> Trucks
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('deliveries.index') }}">
                            <i class="fas fa-shipping-fast"></i> Deliveries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('orders.index') }}">
                            <i class="fas fa-clipboard-list"></i> Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('other-tc-orders.index') }}">
                            <i class="fas fa-tasks"></i> Other TC Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/calculate-distance') }}">
                            <i class="fas fa-map-marker-alt"></i> Calculate Distance
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4 mb-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="container p-4">
            <div class="row">
                <!-- Footer Content -->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5>About TC09</h5>
                    <p>
                        TC09 is a logistics platform designed to streamline operations and enhance supply chain management. Explore our modules to manage actors, products, trucks, deliveries, and orders efficiently.
                    </p>
                </div>

                <!-- Links -->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ route('actors.index') }}">Actors</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ route('trucks.index') }}">Trucks</a></li>
                        <li><a href="{{ route('deliveries.index') }}">Deliveries</a></li>
                        <li><a href="{{ route('orders.index') }}">Orders</a></li>
                        <li><a href="{{ route('other-tc-orders.index') }}">Other TC Orders</a></li>
                        <li><a href="{{ route('calculate-distance.index') }}">Calculate Distance</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="text-center p-3 footer-bottom">
            © {{ date('Y') }} TC09 Logistics. All Rights Reserved.
        </div>
    </footer>
</body>
</html>