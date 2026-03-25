<!DOCTYPE html>
<html lang="en">
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
            --accent-gold: #f39c12;
        }

        body { font-family: 'Open Sans', sans-serif; color: var(--dark-navy); overflow-x: hidden; }
        h1, h2, h3, .modal-title { font-family: 'Montserrat', sans-serif; }

        /* Google Translate Widget Integration */
        .goog-te-banner-frame.skiptranslate { display: none !important; }
        body { top: 0px !important; }
        #google_translate_element { margin-right: 15px; }
        .goog-te-gadget-simple {
            background-color: transparent !important;
            border: 1px solid rgba(255,255,255,0.2) !important;
            padding: 5px 10px !important;
            border-radius: 50px !important;
        }
        .goog-te-gadget-simple .goog-te-menu-value span { color: white !important; margin-right: 5px; }

        /* HERO STYLING */
        .hero-section {
            background: linear-gradient(135deg, rgba(36, 52, 68, 0.9) 0%, rgba(22, 160, 133, 0.8) 100%), 
                        url('https://images.unsplash.com/photo-1493946740624-75b8ba718580?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
        }

        .illustration-img {
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            max-height: 450px;
            width: 100%;
            object-fit: cover;
        }

        /* FEATURE CARD STYLING */
        .feature-card {
            padding: 40px;
            border: none;
            border-radius: 20px;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
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
            margin: 0 auto 25px;
            color: var(--primary-teal);
            font-size: 2rem;
        }

        .btn-warning {
            background-color: var(--accent-gold);
            border: none;
            color: white !important;
        }
        
        /* Modal Form Styling */
        .modal-content { border-radius: 20px; overflow: hidden; }
        .form-control { border-radius: 10px; padding: 12px; border: 1px solid #e1e1e1; }
        .fw-600 { font-weight: 600; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: var(--dark-navy);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="fa-solid fa-leaf text-success me-2"></i>EcoTrace.io</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    
                    <li class="nav-item me-3" id="google_translate_element"></li>
                    
                    <li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
                    
                    <li class="nav-item">
                        <a class="btn btn-success ms-lg-3 px-4 rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#joinModal">
                            Join Ecosystem
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show container mt-3" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 fw-bold mb-4">Empowering Local Brands for <span style="color: var(--accent-gold);">Global Trust.</span></h1>
                    <p class="lead mb-5 opacity-90">EcoTrace helps local exporters verify supply chains and carbon footprints to meet international environmental standards with ease and transparency.</p>
                    <div class="d-grid d-md-block gap-3">
                        <a href="#solutions" class="btn btn-warning btn-lg fw-bold px-5 py-3 shadow rounded-pill me-md-3">Start Free Audit</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=800" alt="Global Supply Chain" class="img-fluid illustration-img">
                </div>
            </div>
        </div>
    </header>

    <main id="solutions" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Why Choose EcoTrace?</h2>
                <p class="text-muted">Bridging the gap between local production and global compliance.</p>
                <div class="mx-auto bg-success" style="height: 4px; width: 60px;"></div>
            </div>
            
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-circle"><i class="fa-solid fa-globe-americas"></i></div>
                        <h3 class="h4 fw-bold">EUDR Compliance</h3>
                        <p class="text-muted">Ensure your products are deforestation-free and ready for EU markets with high-precision GPS mapping.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-circle"><i class="fa-solid fa-seedling"></i></div>
                        <h3 class="h4 fw-bold">Carbon Reporting</h3>
                        <p class="text-muted">Automatically calculate carbon footprints from farm to port using verified international frameworks.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-circle"><i class="fa-solid fa-qrcode"></i></div>
                        <h3 class="h4 fw-bold">Digital Passport</h3>
                        <p class="text-muted">Provide each batch with a unique QR code to guarantee authenticity and traceability for global buyers.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-dark text-white p-4">
                    <h5 class="modal-title fw-bold" id="joinModalLabel text-white">Request Invitation</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 p-md-5">
                    <p class="text-muted mb-4">Leave your details and our team will send you an exclusive invitation code to join the EcoTrace ecosystem.</p>
                    
                    <form action="<?= base_url('submit-request') ?>" method="post">
                        <?= csrf_field() ?> <div class="mb-3">
                            <label class="form-label fw-600">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Murni Agustina" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-600">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="murni@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-600">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+62 812..." required>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success btn-lg fw-bold rounded-pill shadow">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-5 text-white" style="background-color: var(--dark-navy);">
        <div class="container text-center">
            <h3 class="mb-4">EcoTrace.io</h3>
            <div class="social-links mb-4">
                <a href="#" class="text-white mx-2"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                <a href="#" class="text-white mx-2"><i class="fa-brands fa-twitter fa-xl"></i></a>
                <a href="#" class="text-white mx-2"><i class="fa-brands fa-instagram fa-xl"></i></a>
            </div>
            <hr class="opacity-25 my-4">
            <p class="opacity-50 small">&copy; 2026 Murni Agustina Andini - 25120100018. Cakrawala University.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'id,en,zh-CN,ja,fr,de',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>