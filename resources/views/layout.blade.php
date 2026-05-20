<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-primary text-white p-3 mb-2 rounded-bottom">
                <h1>Welcome to My Laravel Page</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card shadow-sm mt-3">
                    <div class="card-header bg-dark text-white text-center">
                        <h5 class="mb-0">Menu</h5>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="/" class="text-decoration-none d-block">🏠 Home</a>
                        </li>

                        <li class="list-group-item">
                            <a href="/mypage" class="text-decoration-none d-block">📄 My Page</a>
                        </li>

                        <li class="list-group-item">
                            <a href="/about" class="text-decoration-none d-block">ℹ️ About</a>
                        </li>

                        <li class="list-group-item">
                            <a href="/product" class="text-decoration-none d-block">🛒 Product</a>
                        </li>

                        <li class="list-group-item">
                            <a href="/showproduct" class="text-decoration-none d-block">🛒 Show Product</a>
                        </li>

                        <li class="list-group-item">
                            <a href="/customer" class="text-decoration-none d-block">🛒 Customer</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9 bg-light min-vh-100 mt-3">
                @yield('section')
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>