<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EcoTrace.io MVP Landing Page - Memberdayakan produk lokal dengan transparansi end-to-end. Memenuhi standar internasional dan meraih kepercayaan pembeli global.">
    
    <title>EcoTrace.io | Global Export Transparency | BWD Sesi 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        h1, h2, h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        .box-model-demo {
            padding: 30px; /* Jarak dalam kardus */
            border: 2px solid #0d6efd; /* Dinding kardus */
            margin-bottom: 20px; /* Jarak luar kardus */
            border-radius: 12px;
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box-model-demo:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-rocket text-primary ms-1"></i>EcoTrace.io
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container py-5">
            <h1 class="display-4">The Digital Identity for Global Exports</h1>
            <p class="lead mt-3">Empower your local products with end-to-end transparency. Meet international standards and gain trust from global buyers.</p>
            <a href="#kontak" class="btn btn-light btn-lg mt-3 fw-bold text-primary">Get Export Ready</a>
        </div>
    </header>

    <main>
        
        <section id="produk" class="container my-5 py-4">
            <div class="text-center mb-5">
                <h2>Our Export Solutions</h2>
                <p class="text-muted">Helping local producers meet international sustainability standards through verified data and digital transparency.</p>
            </div>

            <div class="row g-4">
                
                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-magnifying-glass-chart fa-3x text-primary mb-3"></i>
                        <h3>Origin Mapping</h3>
                        <p class="text-muted">Track raw materials to their exact GPS coordinates, ensuring compliance with global deforestation-free regulations.</p>
                    </div>
                </article>

                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-mobile-screen-button fa-3x text-primary mb-3"></i>
                        <h3>Carbon Intelligence</h3>
                        <p class="text-muted">Automatically calculate and report the carbon footprint of your products from factory to international shipping.</p>
                    </div>
                </article>

                <article class="col-12 col-md-4">
                    <div class="box-model-demo h-100 text-center">
                        <i class="fa-solid fa-shield-halved fa-3x text-primary mb-3"></i>
                        <h3>Digital Integrity</h3>
                        <p class="text-muted">Secure every batch with a unique QR code, allowing international buyers to verify product authenticity instantly.</p>
                    </div>
                </article>

            </div>
        </section>

        <section id="kontak" class="bg-white py-5 border-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="text-center mb-4">
                            <h2>Ready to Scale Your Exports?</h2>
                            <p class="text-muted">Join our exclusive program for sustainable exporters. Get your first transparency report and reach global markets.</p>
                        </div>

                        <form action="#" method="POST" class="p-4 border rounded shadow-sm bg-light">
                            
                            <div class="mb-3">
                                <label for="namaLengkap" class="form-label fw-bold">Company Name</label>
                                <input type="text" class="form-control" id="namaLengkap" placeholder="Contoh: PT Agro Global Indonesia" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailBisnis" class="form-label fw-bold">Business Email</label>
                                <input type="email" class="form-control" id="emailBisnis" placeholder="RieeFiee@ecotrace.ac.id" required>
                                <div class="form-text">We value your privacy. Your email is safe with us.</div>
                            </div>

                            <div class="mb-4">
                                <label for="negara" class="form-label fw-bold">Export Destination</label>
                                <select class="form-control" id="negara" name="negara" required>
                                    <option value="" disabled selected>Select destination (EU/US/Asia)</option>
                                    <option value="European Union">European Union (EU)</option>
                                    <option value="United States">United States (US)</option>
                                    <option value="Asia Pacific">Asia Pacific</option>
                                    <option value="Other">Other Regions</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 fw-bold py-2">
                                Request Early Access <i class="fa-solid fa-paper-plane ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; Murni Agustina Andini-25120100018. <strong>BWD04 - Sesi 2</strong>.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>