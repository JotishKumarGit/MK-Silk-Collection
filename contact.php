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
                    <h1 class="page-title">Contact Us</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Pages</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Contact Us
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Contact Us</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">Get In Touch With Us</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-form">
                        <h3 class="mb-4" style="color: var(--primary-color);">Send Us a Message</h3>
                        <form id="contactForm">
                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required>
                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required>
                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required>
                            <input type="text" class="form-control" placeholder="Subject" id="subject">
                            <textarea class="form-control" rows="5" placeholder="Your Message *" id="message"
                                required></textarea>
                            <button type="submit" class="btn btn-custom w-100">
                                <i class="fab fa-whatsapp"></i> Send via WhatsApp
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="map-container mb-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28940.72486935753!2d82.95!3d25.32!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2db76febcf4d%3A0x68131710853ff0b!2sVaranasi%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1234567890"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="contact-info" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-box mb-3">
                            <h5><i class="fas fa-map-marker-alt"></i> Address</h5>
                            <p>12/421 A 1 J 1 Makhdoom nagar Devpokhari bajardiha<br>Varanasi, Uttar Pradesh 221109,
                                India</p>
                        </div>
                        <div class="info-box mb-3">
                            <h5><i class="fas fa-phone"></i> Phone</h5>
                            <p><a href="tel:6387737594" style="color: white; text-decoration: none;">6387737594</a></p>
                        </div>
                        <div class="info-box">
                            <h5><i class="fas fa-envelope"></i> Email</h5>
                            <p><a href="mailto:kursidalam81@gmail.com"
                                    style="color: white; text-decoration: none;">kursidalam81@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>