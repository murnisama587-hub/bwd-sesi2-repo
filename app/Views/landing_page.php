<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoTrace.io | Global Export Transparency</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --primary-teal: #16a085;
            --dark-navy: #243444;
            --mint-bg: #f0fcf8;
        }

        body { font-family: 'Open Sans', sans-serif; color: var(--dark-navy); }
        h1, h2, h3 { font-family: 'Montserrat', sans-serif; }

        /* HERO STYLING */
        .hero-section {
            background: linear-gradient(135deg, rgba(22, 160, 133, 0.9) 0%, rgba(26, 188, 156, 0.8) 100%), 
                        url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=2000');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }

        .illustration-img {
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            transition: transform 0.5s ease;
        }
        .illustration-img:hover { transform: scale(1.03); }

        /* CARD STYLING */
        .feature-card {
            padding: 40px;
            border: none;
            border-radius: 20px;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(22, 160, 133, 0.15);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background: var(--mint-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--primary-teal);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: var(--dark-navy);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="fa-solid fa-leaf text-success me-2"></i>EcoTrace.io</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#produk">Solutions</a></li>
                    <li class="nav-item"><a class="btn btn-success ms-lg-3 px-4" href="#kontak">Join Now</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 fw-800 mb-4">Empowering Local Brands for <span class="text-warning">Global Trust.</span></h1>
                    <p class="lead mb-5 opacity-90">EcoTrace membantu eksportir lokal memverifikasi rantai pasok dan jejak karbon agar produk kamu lolos standar internasional dengan mudah.</p>
                    <a href="#kontak" class="btn btn-warning btn-lg fw-bold px-5 py-3 shadow rounded-pill">Start Free Audit</a>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2923216?auto=format&fit=crop&q=80&w=800" alt="Global Business" class="img-fluid illustration-img">
                </div>
            </div>
        </div>
    </header>

    <main id="produk" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5">Why EcoTrace?</h2>
                <div class="mx-auto bg-success" style="height: 4px; width: 60px;"></div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-circle"><i class="fa-solid fa-earth-asia fa-2x"></i></div>
                        <h3>EUDR Compliance</h3>
                        <p class="text-muted">Pastikan produk kamu bebas deforestasi dan siap masuk pasar Uni Eropa dengan pemetaan GPS presisi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-circle"><i class="fa-solid fa-chart-line fa-2x"></i></div>
                        <h3>Carbon Reporting</h3>
                        <p class="text-muted">Hitung jejak karbon dari ladang hingga pelabuhan secara otomatis dan transparan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-circle"><i class="fa-solid fa-fingerprint fa-2x"></i></div>
                        <h3>Batch Integrity</h3>
                        <p class="text-muted">Setiap produk memiliki identitas digital unik (QR Code) untuk menjamin keaslian di mata pembeli global.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-5 text-white" style="background-color: var(--dark-navy);">
        <div class="container text-center">
            <h3 class="mb-4">EcoTrace.io</h3>
            <p class="opacity-50">&copy; 2026 Murni Agustina Andini - 25120100018. Cakrawala University.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>