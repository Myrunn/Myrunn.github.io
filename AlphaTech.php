<!DOCTYPE html>
<html>
<head>
    <title>AlphaTech Computer Sdn Bhd</title>
    <link rel="stylesheet" href="AlphaTechDesign.css">
    <script src="ButtonToTop.js" defer></script>
</head>
<body>
    <section id="top">
        <p>Computer Sales and Service</p>
    </section>

    <section class="header">
        <a href="#top"> <!-- Adjust this URL if you want to link to a specific page -->
            <img src="AlphaTechLogo.png" class="logo" alt="AlphaTech Logo">
        </a>
        
        <div class="title">
            <p>ALPHA TECH COMPUTER SDN BHD</p>
        </div>

        <ul class="horizontal-list">
            <li class="about">About Us</li>

            <li class="location"> 
                <a href="https://maps.app.goo.gl/egn981hfyeGR28ra9" target="_blank" class="location-link">Location</a>
            </li>

            <li class="contact" onclick="scrollToBottom()">Contact Us</li>

            <li class="social"> 
                <a href="https://www.facebook.com/p/Alpha-Tech-Computer-Sdn-Bhd-100063524711825/" target="_blank" class="social-link">Social</a>
            </li>

        </ul>
    </section>

    <div class="content-wrapper">
        <section class="video-container">
            <h1 class="centered-text">Welcome</h1>
            <video autoplay loop muted>
                <source src="welcomevideo.mp4" type="video/mp4">
            </video>
            <h2 class="centered-subtext">What are you looking for?</h2>
        </section>

        <section class="product">
            <table class="product-table">
                <tr>
                    <td class="side-by-side">
                        <div>
                            <img src="laptop.png" class="product-photo" alt="Laptops">
                            <p>Laptops</p>
                        </div>
                        <div>
                            <img src="printer.png" class="product-photo" alt="Printers">
                            <p>Printers</p>
                        </div>
                        <div>
                            <img src="EA.png" class="product-photo" alt="Electronics & Accessories">
                            <p>Electronics & Accessories</p>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
    </div>

    <section>
        <h4 class="service-subtext">We provide</h4>
    </section>

    <section class="moreservice">
        <div class="image-container">
            <div class="service-item">
                <img src="cs.png" class="service" alt="Customer Service & Support">
                <p>Customer Service & Support</p>
            </div>
            <div class="service-item">
                <img src="w.png" class="service" alt="Warranty Covered">
                <p>Warranty Covered</p>
            </div>
            <div class="service-item">
                <img src="walkin.png" class="service" alt="Walk In Shop">
                <p>Walk In Shop</p>
            </div>
            <div class="service-item">
                <img src="delivery.png" class="troli" alt="Delivery">
                <p>Delivery</p>
            </div>
        </div>
    </section>

    <hr>

    <section class="map-container">
        <a href="https://maps.app.goo.gl/egn981hfyeGR28ra9" target="_blank">
             <img src="Map.png" alt="Map" class="map-image">
        </a>

        <div class="contact-info">
            <div class="address">
                <p><strong>ADDRESS:</strong><br>
                    No.35, Tingkat Bawah,<br>
                    Pusat Niaga Paya Keladi,<br>
                    20100 Kuala Terengganu,<br>
                    Terengganu, Malaysia.
                </p>
            </div>
        
            <div class="phonenum">
                <p><strong>PHONE NUMBER:</strong><br>
                    <img src="call.png" alt="Phone Icon" class="call">: 609-6243455 <br>
                    <img src="call.png" alt="Phone Icon" class="call">: 609-6242455 <br>
                    <img src="whatsapp.png" alt="WhatsApp Icon" class="wasap">: +6011-29265988
                </p>
            </div>
        
            <div class="email">
                <p><strong>EMAIL:</strong><br>
                    sales@alpha-tech.com.my
                </p>
            </div>
        
            <div class="open">
                <p><strong>OPERATING HOURS:</strong><br>
                    Saturday ~ Thursday: 9.15am - 5.45pm <br>
                    Friday: Closed
                </p>
            </div>
        </div>        

    </section>

    <button onclick="topFunction()" id="backToTop" title="Go to top">Return To Top</button>

    <footer class="footer">
        © 2024 AlphaTech Computer Sdn Bhd. All rights reserved.
    </footer>

    <script>
    function scrollToBottom() {
        if (document.body.scrollHeight > window.innerHeight) {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });
        }
    }
    </script>


</body>
</html>

