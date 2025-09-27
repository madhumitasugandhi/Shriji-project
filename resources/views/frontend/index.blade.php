@extends('frontend.layout.app')
@section('main-container')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background mt-5">

        <div class="hero-background">

        </div>

        <div class="container hero-content mt-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-text" data-aos="fade-up" data-aos-delay="100">
                        <span class="tagline">Welcome to Shriji Brother's</span>
                        <h1 class="hero-title">Crunchy Bhakarwadi, Tasty Moments</h1>
                        <p class="hero-description">Savor the rich taste of Shriji Brothers’ signature bhakarwadi.
                            Freshly made, crispy, and delivered to your doorstep.</p>

                        <div class="hero-actions" data-aos="fade-up" data-aos-delay="200">
                            <a href="/order" class="btn btn-primary me-3">Order Now</a>
                            <a href="/products" class="btn btn-outline">Explore Flavors</a>
                        </div>
                        <div class="hero-features d-flex justify-content-center mt-4" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="feature-item text-center mx-3">
                                <i class="bi bi-truck"></i>
                                <div class="feature-text">
                                    <span class="label">Free Delivery</span>
                                    <span class="value">Within City</span>
                                </div>
                            </div>
                            <div class="feature-item text-center mx-3">
                                <i class="bi bi-people"></i>
                                <div class="feature-text">
                                    <span class="label">Trusted By</span>
                                    <span class="value">1000+ Customers</span>
                                </div>
                            </div>
                            <div class="feature-item text-center mx-3">
                                <i class="bi bi-telephone"></i>
                                <div class="feature-text">
                                    <span class="label">Call Us</span>
                                    <span class="value">+91 78210 95547</span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4" data-aos="fade-in" data-aos-delay="400">
                    <video autoplay loop muted
                        style=" width: 350px; height: 500px;  border: 5px double #e07844; padding:30px 0px;">
                        <source src="assets/img/bhakharwadi-vdo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="400">
            <div class="scroll-text">Scroll to Explore</div>
            <div class="scroll-arrow">
                <i class="bi bi-chevron-down"></i>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">&nbsp;About</span>
            <h2>About Us</h2>
            <p>Committed to delivering excellence and quality in every project we undertake.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="about-content">
                        <h2>Building Trust Through Quality & Innovation</h2>
                        <p class="fst-italic">At Shriji Brothers Pvt. Ltd., we combine expertise, dedication, and
                            innovative solutions to serve our clients with unmatched professionalism.</p>
                        <p>With years of experience in [industry – e.g., manufacturing, trading, or construction], we
                            have earned a reputation for reliability, quality, and customer satisfaction. Our team is
                            committed to turning ideas into reality while maintaining the highest standards in every
                            project.</p>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="150">
                                    <i class="bi bi-award"></i>
                                    <h4>Trusted Expertise</h4>
                                    <p>We leverage our experience to provide reliable and efficient solutions for every
                                        client.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-trophy"></i>
                                    <h4>Proven Track Record</h4>
                                    <p>Our commitment to excellence has earned recognition and loyalty from clients
                                        nationwide.</p>
                                </div>
                            </div>
                        </div>

                        <div class="signature mt-4" data-aos="fade-up" data-aos-delay="250">
                            <p class="chef-name">Mr. [Founder Name], Founder & Managing Director</p>
                            <img src="assets/img/misc/signature-1.webp" alt="Founder Signature" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-gallery">
                        <div class="row g-3">
                            <div class="col-6">
                                <img src="assets/img/company/showcase-1.webp" class="img-fluid rounded"
                                    alt="Company Image">
                            </div>
                            <div class="col-6">
                                <img src="assets/img/company/showcase-2.webp" class="img-fluid rounded"
                                    alt="Company Image">
                            </div>
                            <div class="col-12 mt-3">
                                <div class="years-badge">
                                    <span class="number">15+</span>
                                    <span class="text">Years of Excellence</span>
                                </div>
                                <img src="assets/img/company/showcase-3.webp" class="img-fluid rounded"
                                    alt="Company Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->


    <!-- Products Section -->
    <section id="menu" class="menu section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Products</span>
            <h2>Our Bhakarwadi Range</h2>
            <p>Delicious, crispy, and spicy Bhakarwadi made with authentic traditional recipes.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <div class="menu-filters isotope-filters mb-5" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li data-filter="*" class="filter-active">All Products</li>
                        <li data-filter=".filter-classic">Classic Bhakarwadi</li>
                        <li data-filter=".filter-spicy">Spicy Bhakarwadi</li>
                        <li data-filter=".filter-mixed">Mixed Snacks</li>
                        <li data-filter=".filter-giftpacks">Gift Packs</li>
                    </ul>
                </div>

                <div class="menu-grid isotope-container row gy-5" data-aos="fade-up" data-aos-delay="300">

                    <!-- Classic Bhakarwadi -->
                    <div class="col-xl-4 col-lg-6 isotope-item filter-classic">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="{{ asset('assets/img/Products/bhakharwadi.jpg') }}" alt="Classic Bhakarwadi"
                                    class="img-fluid">
                                <div class="dietary-badges">
                                    <span class="badge-classic">Classic</span>
                                </div>
                                <div class="price-overlay">$10.00 / 250g</div>
                            </div>
                            <div class="menu-card-content">
                                <h4>Classic Bhakarwadi</h4>
                                <p>Authentic, sweet and spicy Bhakarwadi made with premium ingredients and traditional
                                    taste.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Spicy Bhakarwadi -->
                    <div class="col-xl-4 col-lg-6 isotope-item filter-spicy">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="{{ asset('assets/img/Products/bhakharwadi.jpg') }}" alt="Spicy Bhakarwadi"
                                    class="img-fluid">
                                <div class="dietary-badges">
                                    <span class="badge-spicy">Hot</span>
                                </div>
                                <div class="price-overlay">$12.00 / 250g</div>
                            </div>
                            <div class="menu-card-content">
                                <h4>Spicy Bhakarwadi</h4>
                                <p>Crispy, tangy and extra spicy Bhakarwadi for snack lovers who like a little heat.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mixed Snacks -->
                    <div class="col-xl-4 col-lg-6 isotope-item filter-mixed">
                        <div class="menu-card featured">
                            <div class="menu-card-image">
                                <img src="{{ asset('assets/img/Products/bhakharwadi.jpg') }}" alt="Mixed Snacks" class="img-fluid">
                                <div class="dietary-badges">
                                    <span class="badge-mixed">Popular</span>
                                </div>
                                <div class="price-overlay">$15.00 / 300g</div>
                            </div>
                            <div class="menu-card-content">
                                <h4>Mixed Bhakarwadi & Namkeen</h4>
                                <p>A mix of crunchy Bhakarwadi and traditional savory snacks for parties and gifting.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Gift Packs -->
                    <div class="col-xl-4 col-lg-6 isotope-item filter-giftpacks">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="{{ asset('assets/img/Products/bhakharwadi.jpg') }}" alt="Gift Pack" class="img-fluid">
                                <div class="dietary-badges">
                                    <span class="badge-gift">Gift</span>
                                </div>
                                <div class="price-overlay">$25.00 / Pack</div>
                            </div>
                            <div class="menu-card-content">
                                <h4>Bhakarwadi Gift Pack</h4>
                                <p>Beautifully packed Bhakarwadi assortments, perfect for gifting and special occasions.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="menu-actions" data-aos="fade-up" data-aos-delay="400">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="seasonal-notice">
                            <i class="bi bi-info-circle"></i>
                            <span>Our Bhakarwadi is freshly made and packaged to preserve taste and crunchiness.</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="chef-recommendations" data-aos="fade-up" data-aos-delay="500">
                <div class="section-header">
                    <h3><i class="bi bi-star-fill"></i> Featured Products</h3>
                    <p>Our best-selling Bhakarwadi varieties loved by our customers.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="recommendation-card">
                            <div class="recommendation-image">
                                <img src="{{ asset('assets/img/Products/bhakharwadi.jpg') }}" alt="Spicy Bhakarwadi"
                                    class="img-fluid">
                                <div class="chef-badge">
                                    <i class="bi bi-award"></i>
                                    <span>Best Seller</span>
                                </div>
                            </div>
                            <div class="recommendation-content">
                                <div class="recommendation-header">
                                    <h4>Spicy Bhakarwadi</h4>
                                    <div class="recommendation-price">$12.00 / 250g</div>
                                </div>
                                <p>Crispy and tangy snack loved by customers who enjoy a spicy bite.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="recommendation-card">
                            <div class="recommendation-image">
                                <img src="{{ asset('assets/img/Products/bhakharwadi.jpg') }}" alt="Classic Bhakarwadi"
                                    class="img-fluid">
                                <div class="chef-badge">
                                    <i class="bi bi-award"></i>
                                    <span>Top Rated</span>
                                </div>
                            </div>
                            <div class="recommendation-content">
                                <div class="recommendation-header">
                                    <h4>Classic Bhakarwadi</h4>
                                    <div class="recommendation-price">$10.00 / 250g</div>
                                </div>
                                <p>Traditional sweet & spicy Bhakarwadi, perfect for everyday snacking.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Products Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Testimonials</span>
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="testimonials-14 swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 3,
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 16
                },
                "768": {
                  "slidesPerView": 2,
                  "spaceBetween": 24
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 24
                }
              }
            }
                </script>

                <div class="swiper-wrapper">

                    <!-- Testimonial Item 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.</p>
                            <div class="profile">
                                <img src="assets/img/person/person-m-9.webp" class="testimonial-img" alt=""
                                    loading="lazy">
                                <div class="info">
                                    <h4>Marcus Chen <i class="bi bi-patch-check-fill"></i></h4>
                                    <span>@marcuschen</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial Item 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</p>
                            <div class="profile">
                                <img src="assets/img/person/person-f-5.webp" class="testimonial-img" alt=""
                                    loading="lazy">
                                <div class="info">
                                    <h4>Sarah Mitchell <i class="bi bi-patch-check-fill"></i></h4>
                                    <span>@sarahmitch</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial Item 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore.</p>
                            <div class="profile">
                                <img src="assets/img/person/person-f-12.webp" class="testimonial-img" alt=""
                                    loading="lazy">
                                <div class="info">
                                    <h4>James Wilson <i class="bi bi-patch-check-fill"></i></h4>
                                    <span>@jwilson</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial Item 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa.</p>
                            <div class="profile">
                                <img src="assets/img/person/person-m-12.webp" class="testimonial-img" alt=""
                                    loading="lazy">
                                <div class="info">
                                    <h4>Emma Rodriguez <i class="bi bi-patch-check-fill"></i></h4>
                                    <span>@emmarod</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial Item 5 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                                eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.</p>
                            <div class="profile">
                                <img src="assets/img/person/person-m-13.webp" class="testimonial-img" alt=""
                                    loading="lazy">
                                <div class="info">
                                    <h4>David Kumar <i class="bi bi-patch-check-fill"></i></h4>
                                    <span>@davidkumar</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <!-- Testimonial Item 6 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>Texit tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                                eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.</p>
                            <div class="profile">
                                <img src="assets/img/person/person-f-13.webp" class="testimonial-img" alt=""
                                    loading="lazy">
                                <div class="info">
                                    <h4>Sophia Lee <i class="bi bi-patch-check-fill"></i></h4>
                                    <span>@sophialee</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>

                <div class="swiper-pagination"></div>

            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Location Section -->
    <section id="location" class="location section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.0000000000005!2d77.7570000000000!3d20.9330000000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd7cdaf0d0c4adf%3A0x0!2sKhandelwal%20Nagar%2C%20Forest%20Colony%2C%20Akoli%20Road%2C%20Amravati!5e0!3m2!1sen!2sin!4v1695830000000!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="info-container">
                        <div class="section-header">
                            <h2>Find Us</h2>
                            <p>Visit Us Today</p>
                        </div>

                        <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Our Location</h3>
                                <p>Plot No. 41B, Forest Colony, Khandelwal Nagar, Akoli Road, Amravati, Maharashtra -444607</p>
                            </div>
                        </div>



                        <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                            <div class="info-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="info-content">
                                <h3>Business Hours</h3>
                                <p>Mon - Sat: 9:00 AM - 8:00 PM<br>Sunday: Closed</p>
                            </div>

                        </div>

                        <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
                            <a href="#" class="btn-contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Location Section -->

    <!-- Events Section -->
    <section id="events" class="events section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Events</span>
            <h2>Events</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="seasonal-hero">
                        <span class="seasonal-badge">Limited Time</span>
                        <h2>Autumn Harvest Festival</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <div class="festival-dates">
                            <i class="bi bi-calendar-event"></i>
                            <span>October 15 - November 30, 2024</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-6" data-aos="slide-right" data-aos-delay="250">
                    <div class="feature-card primary">
                        <div class="feature-visual">
                            <img src="assets/img/restaurant/misc-3.webp" alt="Special Menu" class="img-fluid">
                            <div class="feature-badge">
                                <i class="bi bi-star-fill"></i>
                                <span>Chef's Special</span>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3>Seasonal Harvest Menu</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <div class="feature-highlights">
                                <div class="highlight-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Farm-to-Table Ingredients</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Locally Sourced Produce</span>
                                </div>
                            </div>
                            <a href="#" class="feature-link">Explore Menu <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="slide-left" data-aos-delay="300">
                    <div class="feature-card secondary">
                        <div class="feature-visual">
                            <img src="assets/img/restaurant/misc-7.webp" alt="Wine Pairing" class="img-fluid">
                            <div class="feature-badge">
                                <i class="bi bi-award-fill"></i>
                                <span>Award Winning</span>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3>Wine Pairing Experience</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                            <div class="feature-highlights">
                                <div class="highlight-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Sommelier Curated</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Premium Selection</span>
                                </div>
                            </div>
                            <a href="#" class="feature-link">Book Tasting <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="awards-section" data-aos="fade-up" data-aos-delay="200">
                <div class="row align-items-center">
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="250">
                        <div class="awards-content">
                            <h3>Recognition &amp; Awards</h3>
                            <p>At enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                        </div>
                    </div>
                    <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
                        <div class="awards-grid">
                            <div class="award-item">
                                <div class="award-icon">
                                    <i class="bi bi-trophy-fill"></i>
                                </div>
                                <div class="award-details">
                                    <h4>Best Restaurant 2024</h4>
                                    <span>City Dining Awards</span>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="award-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="award-details">
                                    <h4>5-Star Rating</h4>
                                    <span>Local Food Guide</span>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="award-icon">
                                    <i class="bi bi-gem"></i>
                                </div>
                                <div class="award-details">
                                    <h4>Excellence Award</h4>
                                    <span>Culinary Institute</span>
                                </div>
                            </div>
                            <div class="award-item">
                                <div class="award-icon">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                                <div class="award-details">
                                    <h4>Customer Choice</h4>
                                    <span>Community Favorite</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="community-section" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="250">
                        <div class="community-card">
                            <div class="community-header">
                                <div class="community-icon">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <div>
                                    <h3>Community Involvement</h3>
                                    <p>Supporting local farmers and charities since 2015</p>
                                </div>
                            </div>
                            <div class="community-stats">
                                <div class="stat-row">
                                    <div class="stat-item">
                                        <span class="stat-number">$50K+</span>
                                        <span class="stat-label">Donated to Local Charities</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-number">25+</span>
                                        <span class="stat-label">Local Farm Partners</span>
                                    </div>
                                </div>
                                <div class="stat-row">
                                    <div class="stat-item">
                                        <span class="stat-number">100+</span>
                                        <span class="stat-label">Community Events Hosted</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-number">500+</span>
                                        <span class="stat-label">Volunteer Hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="sustainability-card">
                            <div class="sustainability-header">
                                <div class="sustainability-icon">
                                    <i class="bi bi-recycle"></i>
                                </div>
                                <div>
                                    <h3>Eco-Friendly Practices</h3>
                                    <p>Committed to sustainable dining and zero waste</p>
                                </div>
                            </div>
                            <div class="sustainability-features">
                                <div class="feature-item">
                                    <i class="bi bi-leaf-fill"></i>
                                    <span>100% Compostable Packaging</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-water"></i>
                                    <span>Water Conservation Program</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-lightning-fill"></i>
                                    <span>Renewable Energy Powered</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-truck"></i>
                                    <span>Local Sourcing Priority</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Events Section -->

  <!-- Gallery Section -->
<section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Gallery</span>
        <h2>Our Products</h2>
        <p>Delicious treats crafted with love and tradition.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="restaurant-gallery-filters isotope-filters mb-4 justify-content-center d-flex gap-2"
                data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-bhakarwadi">Bhakarwadi</li>
                <li data-filter=".filter-choco">Choco Lava Cake</li>
                <li data-filter=".filter-brownie">Brownie</li>
            </ul>

            <div class="row g-3 isotope-container" data-aos="fade-up" data-aos-delay="200">
                
                <!-- Bhakarwadi -->
                <div class="col-lg-4 col-md-6 isotope-item filter-bhakarwadi">
                    <figure class="gallery-card">
                        <a href="assets/img/Products/bhakharwadi.jpg" class="glightbox"
                            data-gallery="product-gallery">
                            <img src="{{ asset('assets/img/Products/bhakharwadi.jpg') }}" alt="Bhakarwadi"
                                class="img-fluid rounded" loading="lazy">
                        </a>
                        <figcaption class="caption">
                            <span class="caption-title">Bhakarwadi</span>
                            <span>Crispy, spicy, and authentic Maharashtrian delight.</span>
                        </figcaption>
                    </figure>
                </div>

                <!-- Choco Lava Cake -->
                <div class="col-lg-4 col-md-6 isotope-item filter-choco">
                    <figure class="gallery-card">
                        <a href="assets/img/Products/chocolava-cake.jpg" class="glightbox"
                            data-gallery="product-gallery">
                            <img src="{{ asset('assets/img/Products/chocolava-cake.jpg') }}" alt="Choco Lava Cake"
                                class="img-fluid rounded" loading="lazy">
                        </a>
                        <figcaption class="caption">
                            <span class="caption-title">Choco Lava Cake</span>
                            <span>Rich chocolate cake with a gooey molten center.</span>
                        </figcaption>
                    </figure>
                </div>

                <!-- Brownie -->
                <div class="col-lg-4 col-md-6 isotope-item filter-brownie">
                    <figure class="gallery-card">
                        <a href="assets/img/Products/brownie.jpg" class="glightbox"
                            data-gallery="product-gallery">
                            <img src="{{ asset('assets/img/Products/brownie.jpg') }}" alt="Brownie"
                                class="img-fluid rounded" loading="lazy">
                        </a>
                        <figcaption class="caption">
                            <span class="caption-title">Brownie</span>
                            <span>Fudgy, soft and full of chocolatey goodness.</span>
                        </figcaption>
                    </figure>
                </div>

            </div><!-- End Gallery Items Container -->

        </div>

    </div>

</section><!-- /Gallery Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">Contact</span>
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Contact Info Boxes -->
            <div class="row gy-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Our Address</h4>
                            <p>Plot No. 41B, Forest Colony, Khandelwal Nagar, Akoli Road, Amravati, Maharashtra -444607</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="info-content">
                            <h4>Phone Number</h4>
                            <p>+91 78210 95547</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="info-content">
                            <h4>Hours of Operation</h4>
                            <p>Mon - Sat: 9:00 AM - 8:00 PM</p>
                            <p>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google Maps (Full Width) -->
        <div class="map-section" data-aos="fade-up" data-aos-delay="200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.0000000000005!2d77.7570000000000!3d20.9330000000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd7cdaf0d0c4adf%3A0x0!2sKhandelwal%20Nagar%2C%20Forest%20Colony%2C%20Akoli%20Road%2C%20Amravati!5e0!3m2!1sen!2sin!4v1695830000000!5m2!1sen!2sin"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Contact Form Section (Overlapping) -->
        <div class="container form-container-overlap">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-10">
                    <div class="contact-form-wrapper">
                        <h2 class="text-center mb-4">Get in Touch</h2>

                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-person"></i>
                                            <input type="text" class="form-control" name="name" placeholder="First Name"
                                                required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-envelope"></i>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-text-left"></i>
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                                required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="bi bi-chat-dots message-icon"></i>
                                            <textarea class="form-control" name="message" placeholder="Write Message..."
                                                style="height: 180px" required=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Contact Section -->

</main>


@endsection