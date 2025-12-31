
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="footer-title">M.K. silk collection</h3>
                    <p>Your trusted partner for premium Banarasi silk sarees and textiles since 2020. We bring the rich
                        heritage of Indian craftsmanship to your doorstep.</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3" style="font-size: 24px;"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-3" style="font-size: 24px;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3" style="font-size: 24px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white" style="font-size: 24px;"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="#about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="#products"><i class="fas fa-chevron-right"></i> Products</a></li>
                        <li><a href="#services"><i class="fas fa-chevron-right"></i> Services</a></li>
                        <li><a href="#gallery"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                        <li><a href="#blog"><i class="fas fa-chevron-right"></i> Blog</a></li>
                        <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <h3 class="footer-title">Our Products</h3>
                    <ul class="footer-links">
                        <li><a href="#products"><i class="fas fa-chevron-right"></i> Banarasi Silk Saree</a></li>
                        <li><a href="#products"><i class="fas fa-chevron-right"></i> Banarasi Silk Rangkat Saree
                                Kadwa</a></li>
                        <li><a href="#products"><i class="fas fa-chevron-right"></i> Banarasi Silk Scrap Border
                                Strip</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <h3 class="footer-title">Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt" style="color: var(--secondary-color);"></i> 12/421 A 1 J 1
                            Makhdoom nagar<br>Devpokhari bajardiha<br>Varanasi, UP 221109, India</li>
                        <li class="mt-3"><i class="fas fa-phone" style="color: var(--secondary-color);"></i> <a
                                href="tel:6387737594">6387737594</a></li>
                        <li><i class="fas fa-envelope" style="color: var(--secondary-color);"></i> <a
                                href="mailto:kursidalam81@gmail.com">kursidalam81@gmail.com</a></li>
                        <li class="mt-3"><i class="fas fa-user-tie" style="color: var(--secondary-color);"></i> Owner:
                            Kursid Alam</li>
                        <li><i class="fas fa-calendar" style="color: var(--secondary-color);"></i> Est. 2020</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2025 M.K. Silk Collection. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0">Designed By
                            <a href="https://trade4export.com">Trade4Export</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- enquiry modal -->
    <div class="modal" id="enquiryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enquiry Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="enquiryForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" placeholder="Enter name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" placeholder="Enter email"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="phone" id="phone" class="form-control" placeholder="Enter number"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="subject" class="form-control" placeholder="Enter subject"
                                            required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="" id="message" class="form-control" placeholder="Enter message"
                                            required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="sendEmailButton" class="btn btn-primary">Send via Email</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script for sending enquiry email -->
    <script>
        document.getElementById('sendEmailButton').addEventListener('click', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            // Check if any of the fields are empty
            if (!name || !email || !phone || !subject || !message) {
                alert("Please fill all the fields");
                return; // Exit the function if any field is empty
            }

            const mailtoLink = `mailto:kursidalam81@gmail.com?subject=${encodeURIComponent(subject)}&body=Name: ${encodeURIComponent(name)}%0AEmail: ${encodeURIComponent(email)}%0APhone: ${encodeURIComponent(phone)}%0AMessage: ${encodeURIComponent(message)}`;
            window.location.href = mailtoLink;
        })
    </script>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- home slider js -->
    <script>
        (function() {
            const homeSlides = document.querySelectorAll('.home-slide');
            const homePrev = document.querySelector('.home-prev');
            const homeNext = document.querySelector('.home-next');
            let homeCurrent = 0;

            function showHomeSlide(index) {
                homeSlides.forEach(slide => slide.classList.remove('active'));
                homeSlides[index].classList.add('active');
            }

            homeNext.addEventListener('click', () => {
                homeCurrent = (homeCurrent + 1) % homeSlides.length;
                showHomeSlide(homeCurrent);
            });

            homePrev.addEventListener('click', () => {
                homeCurrent = (homeCurrent - 1 + homeSlides.length) % homeSlides.length;
                showHomeSlide(homeCurrent);
            });

            // Auto slide every 5 seconds
            setInterval(() => {
                homeCurrent = (homeCurrent + 1) % homeSlides.length;
                showHomeSlide(homeCurrent);
            }, 5000);
        })();
    </script>

    <!-- whole web js -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Service Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.service-slide');

        function changeSlide(direction) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        // Auto slide every 5 seconds
        setInterval(() => changeSlide(1), 5000);

        // Contact Form WhatsApp Integration
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            const whatsappMessage = `*New Contact Form Submission*%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Phone:* ${phone}%0A*Subject:* ${subject}%0A*Message:* ${message}`;

            window.open(`https://wa.me/916387737594?text=${whatsappMessage}`, '_blank');
        });

        // Newsletter Form
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('newsletterEmail').value;
            alert('Thank you for subscribing! We will keep you updated with our latest collections.');
            this.reset();
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

</body>

</html>