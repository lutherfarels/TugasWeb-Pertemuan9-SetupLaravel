<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farel Luther Siagian</title>

    <link rel="stylesheet" href="{{ asset('home.css') }}">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <a href="/" class="logo">
            FLS.
        </a>

        <nav>
            <ul class="nav-menu">
                <li>
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/about">About</a>
                </li>

                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>

    </header>


    <!-- ================= HERO ================= -->

    <main>

        <section class="hero">

            <div class="hero-content">

                <div class="hero-small">
                    HALO, SAYA
                </div>

                <h1>
                    Farel Luther <span>Siagian</span>
                </h1>

                <h2>
                    Mahasiswa Ilmu Komputer
                </h2>

                <p>
                    Saya adalah mahasiswa Ilmu Komputer yang tertarik
                    pada pengembangan website, pemrograman, dan teknologi digital.
                </p>

                <div class="button-group">

                    <a href="#about" class="btn btn-primary">
                        Tentang Saya
                    </a>

                    <a href="/contact" class="btn btn-secondary">
                        Hubungi Saya
                    </a>

                </div>

            </div>

        </section>


        <!-- ================= ABOUT ================= -->

        <section class="section about" id="about">

            <div class="section-title">

                <div class="section-label">
                    PROFILE
                </div>

                <h2>
                    Tentang Saya
                </h2>

                <p>
                    Sedikit informasi mengenai saya dan bidang yang sedang dipelajari.
                </p>

            </div>


            <div class="about-content">

                <div class="about-text">

                    <p>
                        Saya merupakan mahasiswa Program Studi
                        Ilmu Komputer yang sedang mempelajari berbagai
                        bidang teknologi dan pengembangan perangkat lunak.
                    </p>

                    <p>
                        Saat ini saya banyak mempelajari HTML, CSS,
                        JavaScript, PHP, Laravel, database, serta
                        dasar-dasar pemrograman.
                    </p>

                </div>


                <div class="about-info">

                    <div class="info-card">

                        <h3>
                            Program Studi
                        </h3>

                        <p>
                            Ilmu Komputer
                        </p>

                    </div>


                    <div class="info-card">

                        <h3>
                            Universitas
                        </h3>

                        <p>
                            Universitas Negeri Medan
                        </p>

                    </div>


                    <div class="info-card">

                        <h3>
                            Fokus
                        </h3>

                        <p>
                            Web Development
                        </p>

                    </div>


                    <div class="info-card">

                        <h3>
                            Status
                        </h3>

                        <p>
                            Currently Learning
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= SKILLS ================= -->

        <section class="section">

            <div class="section-title">

                <div class="section-label">
                    WHAT I LEARN
                </div>

                <h2>
                    Skills & Technology
                </h2>

                <p>
                    Beberapa teknologi yang sedang saya pelajari.
                </p>

            </div>


            <div class="skills-grid">

                <article class="skill-card">

                    <div class="skill-number">
                        01
                    </div>

                    <h3>
                        HTML & CSS
                    </h3>

                    <p>
                        Membangun struktur dan tampilan
                        website yang responsif.
                    </p>

                </article>


                <article class="skill-card">

                    <div class="skill-number">
                        02
                    </div>

                    <h3>
                        JavaScript
                    </h3>

                    <p>
                        Membuat website menjadi lebih
                        interaktif dan dinamis.
                    </p>

                </article>


                <article class="skill-card">

                    <div class="skill-number">
                        03
                    </div>

                    <h3>
                        PHP & Laravel
                    </h3>

                    <p>
                        Membangun aplikasi web menggunakan
                        framework Laravel.
                    </p>

                </article>


                <article class="skill-card">

                    <div class="skill-number">
                        04
                    </div>

                    <h3>
                        Database
                    </h3>

                    <p>
                        Mempelajari pengelolaan data
                        menggunakan database MySQL.
                    </p>

                </article>


                <article class="skill-card">

                    <div class="skill-number">
                        05
                    </div>

                    <h3>
                        Git & GitHub
                    </h3>

                    <p>
                        Mengelola source code dan
                        perkembangan project.
                    </p>

                </article>


                <article class="skill-card">

                    <div class="skill-number">
                        06
                    </div>

                    <h3>
                        Problem Solving
                    </h3>

                    <p>
                        Mempelajari cara menyelesaikan
                        masalah menggunakan pemrograman.
                    </p>

                </article>

            </div>

        </section>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <p>
            &copy; {{ date('Y') }} Farel Luther Siagian.
            TR 9 Pemrograman Web.
        </p>

    </footer>

</body>

</html>