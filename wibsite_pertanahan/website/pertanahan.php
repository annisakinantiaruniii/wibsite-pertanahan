<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidang Pertanahan Dan PSU-Kabupaten Majalengka</title>
    <style>
        :root {
            --primary-color: #2E7D32;
            --secondary-color: #4CAF50;
            --dark-color: #1B5E20;
            --light-color: #E8F5E9;
            --accent-color: #8BC34A;
            --text-dark: #333;
            --text-light: #fff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: var(--text-dark);
            line-height: 1.6;
        }

        header {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 15px;
        }

        .logo-text h1 {
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
        }

        .logo-text p {
            font-size: 0.8rem;
            opacity: 0.9;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        nav ul li a:hover {
            opacity: 0.8;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text-light);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../img/dpkpp.png') no-repeat center center/cover;
            height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 1rem;
        }

        .hero-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--text-dark);
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: var(--secondary-color);
            color: var(--text-light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary-color);
        }

        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-card-content {
            padding: 1.5rem;
        }

        .service-card-content h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .news-section {
            background-color: var(--light-color);
            padding: 3rem 0;
            margin-bottom: 3rem;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .news-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-card-content {
            padding: 1.5rem;
        }

        .news-card-content h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .news-card-content .date {
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 1rem;
        }

        .contact-section {
            margin-bottom: 3rem;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .contact-info {
            background-color: var(--light-color);
            padding: 1.5rem;
            border-radius: 8px;
        }

        .contact-info h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .contact-info ul {
            list-style: none;
        }

        .contact-info ul li {
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
        }

        .contact-info ul li i {
            margin-right: 0.8rem;
            color: var(--primary-color);
        }

        .contact-form {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }

        .contact-form h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 150px;
        }

        footer {
            background-color: var(--dark-color);
            color: var(--text-light);
            padding: 2rem 0;
            text-align: center;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            padding: 0 1rem;
        }

        .footer-col h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.5rem;
        }

        .footer-col ul li a {
            color: var(--text-light);
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .footer-col ul li a:hover {
            opacity: 1;
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            gap: 1rem;
        }

        .social-links a {
            color: var(--text-light);
            font-size: 1.5rem;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .social-links a:hover {
            opacity: 1;
        }

        .copyright {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }

            .logo {
                margin-bottom: 1rem;
            }

            nav {
                width: 100%;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
                display: none;
            }

            nav ul.show {
                display: flex;
            }

            nav ul li {
                margin: 0.5rem 0;
            }

            .mobile-menu-btn {
                display: block;
                position: absolute;
                top: 1rem;
                right: 1rem;
            }

            .hero-content h2 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="../img/logo dpkpp.png" alt="user image">
                <div class="logo-text">
                    <H1>Bidang Pertanahan Dan PSU</H1>
                    <h3>Dinas Perumahan Kawasan Permukiman Dan Pertanahan</h3>
                    <p>Kabupaten Majalengka</p>
                </div>
            </div>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <ul id="navMenu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#news">Berita</a></li>
                    <li><a href="#about">Profil</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-content fade-in">
            <h2>Selamat Datang di Dinas Pertanahan Dan PSU</h2>
            <p>Penyelesaian ganti kerugian dan santunan tanah untuk Pembangunan 
            Program Peningkatan Prasarana, Saran dan Utilitas Umum (PSU) </p>
            <a href="#services" class="btn">Lihat Layanan</a>
        </div>
    </section>

    <section class="container" id="services">
        <h2 class="section-title">Pertanahan</h2>
        <div class="services">
            <div class="service-card">
                <img src="../img/logo dpkpp.png" alt="Proses pengukuran tanah oleh petugas dengan alat theodolite">
                <div class="service-card-content">
                    <h3>Kegiatan</h3>
                    <p>Penyelesaian Masalah ganti kerugian dan santunan tanah untuk pembangunan oleh pemerintah daerah kabupaten/kota </p>
                </div>
            </div>
            <div class="service-card">
                <img src="../img/logo dpkpp.png" alt="Dokumen sertifikat tanah dengan stempel resmi">
                <div class="service-card-content">
                    <h3>Sub Kegiatan</h3>
                    <p>Koordinasi dan Sinkronisasi Penyelesaian Masalah Ganti kerugian dan santunan tanah untuk pembangunan oleh pemda / kota</p>
                </div>
            </div>
            <div class="service-card">
                <img src="../img/rmh.jpeg" alt="Peta kadaster digital yang ditampilkan di layar komputer">
                <div class="service-card-content">
                    <h3>Kinerja</h3>
                    <p>Terlaksananya Koordinasi dan Sinkronisasi Penyelesaian Masalah ganti kerugian dan santunan tanah untuk pembangunan oleh pemda / kota</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

            <section class="container" id="services">
        <h2 class="section-title">PSU</h2>
        <div class="services">
            <div class="service-card">
                <img src="../img/logo dpkpp.png" alt="Konsultasi antara petugas dan masyarakat di meja pelayanan">
                <div class="service-card-content">
                    <h3>Kegiatan</h3>
                    <p>Urusan Penyelenggaraan PSU Perumahan </p>
                </div>
            </div>
            <div class="service-card">
                <img src="../img/logo dpkpp.png" alt="user">
                <div class="service-card-content">
                    <h3>Sub Kegiatan</h3>
                    <p>Perencanaan Penyediaan PSU Perumahan </p>
                </div>
            </div>
            <div class="service-card">
                <img src="../img/logo dpkpp.png" alt="user">
                <div class="service-card-content">
                    <h3>Sub Kegiatan </h3>
                    <p>Perbaikan Peasarana, Sarana Dan Utilitas di Perumahan </p>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section" id="news">
        <div class="container">
            <h2 class="section-title">Berita Terkini</h2>
            <div class="news-grid">
                <div class="news-card">
                    <img src="../img/logo dpkpp.png" alt="user">
                    <div class="news-card-content">
                        <h3>cnth</h3>
                        <p class="date">12 Juni 2025</p>
                        <p>Dinas Pertanahan melaksanakan pelatihan sistem informasi geoportal untuk meningkatkan pelayanan kepada masyarakat.</p>
                    </div>
                </div>
                <div class="news-card">
                    <img src="../img/logo dpkpp.png" alt="user">
                    <div class="news-card-content">
                        <h3>cnth</h3>
                        <p class="date">28 Mei 2025</p>
                        <p>Pengenalan sertipikat tanah elektronik kepada masyarakat sebagai bagian dari transformasi digital pelayanan pertanahan.</p>
                    </div>
                </div>
                <div class="news-card">
                    <img src="../img/logo dpkpp.png" alt="Rapat koordinasi antara dinas pertanahan dan pemerintah daerah">
                    <div class="news-card-content">
                        <h3>cnth</h3>
                        <p class="date">15 Mei 2025</p>
                        <p>Rapat koordinasi antara Dinas Pertanahan dan pemerintah daerah untuk menyusun rencana penataan pertanahan wilayah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container" id="about">
        <h2 class="section-title">Profil Dinas Perumahan Kawasan Permukiman Dan Pertanahan</h2>
        <div class="about-content">
            <p>Dinas Perumahan, Kawasan Permukiman, dan Pertanahan, adalah instansi pemerintah daerah yang bertanggung jawab atas urusan perumahan, kawasan permukiman, dan pertanahan. Di Kabupaten Majalengka, DPKPP memiliki visi terwujudnya lahan dan infrastruktur perumahan rakyat, kawasan permukiman yang layak dan produktif untuk mendukung pembangunan menuju Majalengka Raharja</p>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Kantor Dinas Perumahan Kawasan Permukiman Dan Pertanahan</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. K.H.Abdul Halim no.69 Majalengka</li>
                        <li><i class="fas fa-phone"></i> (0233) 281605</li>
                        <li><i class="fas fa-envelope"></i> dinaspkpp8@gmail.com</li>
                        <li><i class="fas fa-clock"></i> Senin-Jumat: 08.00-15.45 WIB</li>
                    </ul>
                </div>
                <div class="contact-form">
                    <h3>Kirim Pesan</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nama </label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<section class="container" id="services">
    <h2 class="section-title">Prasarana, Sarana, dan Utilitas Umum (PSU)</h2>
    <div class="services">
        <div class="service-card">
            <img src="../img/logo dpkpp.png" alt="Konsultasi antara petugas dan masyarakat di meja pelayanan">
            <div class="service-card-content">
                <h3>Kegiatan</h3>
                <p>Urusan Penyelenggaraan PSU Perumahan, termasuk perencanaan, pembangunan dan serah terima PSU.</p>
            </div>
        </div>
        <div class="service-card">
            <img src="../img/logo dpkpp.png" alt="user">
            <div class="service-card-content">
                <h3>Sub Kegiatan</h3>
                <p>Perencanaan penyediaan dan perbaikan Prasarana, Sarana dan Utilitas (PSU) Perumahan.</p>
            </div>
        </div>
        <div class="service-card">
            <img src="../img/logo dpkpp.png" alt="user">
            <div class="service-card-content">
                <h3>Langkah-langkah</h3>
                <p>
                    1. Kolaborasi dengan OPD terkait sesuai tupoksi. <br>
                    2. Melaksanakan serah terima aset dengan OPD lain, seperti penyerahan PJU ke Dinas Perhubungan.
                </p>
            </div>
        </div>
    </div>

    <div class="service-card-content" style="margin-top: 2rem;">
        <h3>Jenis Aset PSU</h3>
        <ul>
            <li>1. Jalan dan Drainase</li>
            <li>2. Ruang Terbuka Hijau</li>
            <li>3. Sarana Pendidikan</li>
            <li>4. Sarana Olahraga</li>
            <li>5. Sarana Kesehatan</li>
            <li>6. Lahan Parkir</li>
            <li>7. Tempat Pembuangan Sampah</li>
        </ul>
    </div>

    <div class="service-card-content" style="margin-top: 2rem;">
        <h3>Daftar Perumahan Yang Sudah Diserahterimakan PSU-nya</h3>
        <table style="width: 100%; border-collapse: collapse; margin-top: 1rem;">
            <thead style="background-color: #E8F5E9;">
                <tr>
                    <th style="padding: 10px; border: 1px solid #ccc;">No</th>
                    <th style="padding: 10px; border: 1px solid #ccc;">Nama Perumahan</th>
                    <th style="padding: 10px; border: 1px solid #ccc;">Alamat</th>
                    <th style="padding: 10px; border: 1px solid #ccc;">Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Gunungsari Indah</td><td>Gunungsari Kec. Kasokandel</td><td>2021</td></tr>
                <tr><td>2</td><td>RSSS Sindangkasih</td><td>Sindangkasih Kec. Majalengka</td><td>2021</td></tr>
                <tr><td>3</td><td>Nuansa Indah</td><td>Kel. Majalengka Kulon</td><td>2021</td></tr>
                <tr><td>4</td><td>Bumi Sawala Baru</td><td>Kel. Majalengka Wetan</td><td>2021</td></tr>
                <tr><td>5</td><td>Majalengka Permai</td><td>Kel. Majalengka Kulon</td><td>2021</td></tr>
                <tr><td>6</td><td>Andir Purnama</td><td>Kel. Andir Kec. Majalengka</td><td>2022</td></tr>
                <tr><td>7</td><td>Puri Mega Citra</td><td>Kel. Andir Kec. Majalengka</td><td>2022</td></tr>
                <tr><td>8</td><td>PKPN Asri</td><td>Kel. Andir Kec. Majalengka</td><td>2022</td></tr>
                <tr><td>9</td><td>Asabri Ciborelang</td><td>Desa Ciborelang Kec. Jatiwangi</td><td>2022</td></tr>
                <tr><td>10</td><td>Griya Asri</td><td>Desa Heuleut Kec. Kadipaten</td><td>2023</td></tr>
                <tr><td>11</td><td>Panorama Asri</td><td>Desa Kalumanggeng Kec. Cigasong</td><td>2023</td></tr>
                <tr><td>12</td><td>Griya Amanda</td><td>Desa Andir Kec. Jatiwangi</td><td>2023</td></tr>
                <tr><td>13</td><td>Mutiara Asri</td><td>Desa Karyamukti Kec. Panyingkiran</td><td>2024</td></tr>
                <tr><td>14</td><td>Villa Cipadung Permai</td><td>Desa Karyamukti Kec. Panyingkiran</td><td>2024</td></tr>
                <tr><td>15</td><td>Griya Prima Pesona</td><td>Desa Kadipaten dan Cipaku Kec. Kadipaten</td><td>2024</td></tr>
            </tbody>
        </table>
    </div>
</section>

    <footer>
        <div class="footer-container">
            
            <div class="footer-col">
                <h3>Layanan Publik</h3>
                <ul>
                    <li><a href="#">Pembebasan lahan</a></li>
                    <li><a href="#">PSU (Prasarana, Sarana, dan Utilitas) perumahan</a></li>
                    <li><a href="#">Penataan dan pengelolaan lahan</a></li>
                    <li><a href="#">Perizinan terkait pertanahan</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Kontak</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Jl. K.H.Abdul Halim no.69 Majalengka</li>
                    <li><i class="fas fa-phone"></i> (0233) 281605</li>
                    <li><i class="fas fa-envelope"></i> dinaspkpp8@gmail.com</li>
                </ul>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Dinas Pertanahan Kabupaten Majalengka.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const navMenu = document.getElementById('navMenu');
            
            mobileMenuBtn.addEventListener('click', function() {
                navMenu.classList.toggle('show');
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    if (navMenu.classList.contains('show')) {
                        navMenu.classList.remove('show');
                    }

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Form submission
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form values
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const subject = document.getElementById('subject').value;
                    const message = document.getElementById('message').value;
                    
                    // Here you would typically send the form data to a server
                    // For demo purposes, we'll just show an alert
                    alert(`Terima kasih ${name}, pesan Anda telah terkirim. Kami akan segera menghubungi Anda melalui email ${email}.`);
                    
                    // Reset form
                    contactForm.reset();
                });
            }

            // Animation for elements when scrolling
            function animateOnScroll() {
                const elements = document.querySelectorAll('.service-card, .news-card');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (elementPosition < screenPosition) {
                        element.classList.add('fade-in');
                    }
                });
            }
            
            window.addEventListener('scroll', animateOnScroll);
            // Trigger once on load
            animateOnScroll();
        });
    </script>
</body>
</html>
