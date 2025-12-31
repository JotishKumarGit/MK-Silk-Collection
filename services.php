<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.K. silk collection - Premium Banarasi Silk Sarees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section text-white d-flex align-items-center">
        <div class="overlay"></div>

        <div class="container text-center position-relative">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Services</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Pages</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Services
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-white" data-aos="fade-up">Our Services</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">Comprehensive Solutions for Your Textile Needs
                </p>
            </div>
            <div class="service-slider">
                <div class="service-slide active">
                    <div class="service-icon"><i class="fas fa-industry"></i></div>
                    <h3>Manufacturing Excellence</h3>
                    <p class="lead">We manufacture premium quality Banarasi silk products using traditional techniques
                        combined with modern quality standards. Our skilled artisans ensure every piece meets the
                        highest standards of excellence.</p>
                </div>
                <div class="service-slide">
                    <div class="service-icon"><i class="fas fa-globe"></i></div>
                    <h3>Export Services</h3>
                    <p class="lead">We export our premium Banarasi silk products to international markets, bringing the
                        rich heritage of Indian textiles to customers worldwide with reliable shipping and quality
                        assurance.</p>
                </div>
                <div class="service-slide">
                    <div class="service-icon"><i class="fas fa-truck"></i></div>
                    <h3>Supply Chain Management</h3>
                    <p class="lead">Our efficient supply chain ensures timely delivery of products to retailers and
                        wholesalers. We maintain consistent quality and availability for all our business partners.</p>
                </div>
                <div class="service-slide">
                    <div class="service-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>Custom Solutions</h3>
                    <p class="lead">We offer customized solutions for bulk orders and special requirements. Our team
                        works closely with clients to deliver products that match their specific needs and preferences.
                    </p>
                </div>
            </div>
            <div class="slider-nav">
                <button class="slider-btn" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i>
                    Previous</button>
                <button class="slider-btn" onclick="changeSlide(1)">Next <i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include('footer.php') ?>