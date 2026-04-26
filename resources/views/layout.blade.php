<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-primary text-white">
                <h1>Welcome to My Laravel Page</h1>
            </div>
        </div>

        <div class="row">
            <!-- Sidebar -->
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
                    </ul>
                </div>
            </div>

            <div class="col-md-9 bg-light min-vh-100">
                @yield('section')
            </div>
        </div>
    </div>
</body>
</html>