<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BOX ICONS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset("cv/assets/css/styles.css")}}" />

    <title>CV</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="l-header" id="header">
      <nav class="nav bd-container">
        <a href="" class="nav__logo">Stern</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="bx bx-home nav__icon"></i>Home
              </a>
            </li>
            <li class="nav__item">
              <a href="#profile" class="nav__link">
                <i class="bx bx-user nav__icon"></i>Profile
              </a>
            </li>
            <li class="nav__item">
              <a href="#education" class="nav__link">
                <i class="bx bx-book nav__icon"></i>Education
              </a>
            </li>
            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="bx bx-receipt nav__icon"></i>Compétence
              </a>
            </li>
            <li class="nav__item">
              <a href="#experience" class="nav__link">
                <i class="bx bx-briefcase nav__icon"></i>Expérience
              </a>
            </li>
            <li class="nav__item">
              <a href="#certificates" class="nav__link">
                <i class="bx bx-award nav__icon"></i>Certificats
              </a>
            </li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>
      </nav>
    </header>

    <main class="l-main bd-container">
      <!-- All elements within this div, are generated in PDF -->
      <div class="resume" id="area-cv">
        <div class="resume__left">
          <!-- HOME -->
          <section class="home" id="home">
            <div class="home__container section bd-grid">
              <div class="home__data bd-grid">
                <img src="{{asset("cv/assets/img/me.jpg")}}" alt="" class="home__img" />

                <h1 class="home__title"><b>{{$candidat->nom}}</b></h1>
                <h3 class="home__profession">{{$candidat->titre_pro}}</h3>

                <div>
                  <a
                    download=""
                    href="{{asset("cv/assets/pdf/AvramStern_CV.pdf")}}"
                    class="home__button-mobile"
                    >Download</a
                  >
                </div>
              </div>

              <div class="home__address bd-grid">
                <span class="home__information">
                  <i class="bx bx-map home__icon"></i> {{$candidat->adresse}}
                </span>
                <span class="home__information">
                  <i class="bx bx-envelope home__icon"></i>
                  <a
                    href="mailto:stern9@gmail.com"
                    target="_blank"
                    class="social__link"
                    >{{$candidat->email}}</a
                  >
                </span>
                <span class="home__information">
                  <i class="bx bx-phone home__icon"></i>
                  <a
                    href="tel:+50688165476"
                    target="_blank"
                    class="social__link"
                    >(216) {{$candidat->tel}}</a
                  >
                </span>
              </div>
            </div>
            <!-- Theme change button -->
            <i
              class="bx bx-moon change-theme"
              title="Theme"
              id="theme-toggle"
            ></i>

            <!-- Button to generate and download the pdf. Available for desktop. -->
            <i
              class="bx bx-download generate-pdf"
              title="Generate PDF"
              id="resume-button"
            ></i>
          </section>

          <!-- SOCIAL -->
          <section class="social section">
            <h2 class="section-title">LinkedIn</h2>

            <div class="social__container bd-grid">
             
              <a
                href="https://www.linkedin.com/in/stern9/"
                target="_blank"
                class="social__link"
              >
                <i class="bx bxl-linkedin-square social__icon"></i>
              </a>
            </div>
          </section>



          

          <!-- SKILLS  -->
          <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__content bd-grid">
              <ul class="skills__data">
                <li class="skills__name">
                  <span class="skills__circle"></span> JavaScripteeeeeeee
                  <i class="bx bxl-javascript"></i>
                </li>
                <li class="skills__name">
                  <span class="skills__circle"></span> NodeJS
                  <i class="bx bxl-nodejs"></i>
                </li>
                <li class="skills__name">
                  <span class="skills__circle"></span> Express
                  <i class="bx bx-code-block"></i>
                </li>
                <li class="skills__name">
                  <span class="skills__circle"></span> Unix
                  <i class="bx bxs-terminal"></i>
                </li>
              </ul>

              <ul class="skills__data">
                <li class="skills__name">
                  <span class="skills__circle"></span> React
                  <i class="bx bxl-react"></i>
                </li>
                <li class="skills__name">
                  <span class="skills__circle"></span> HTML
                  <i class="bx bxl-html5"></i>
                </li>
                <li class="skills__name">
                  <span class="skills__circle"></span> CSS
                  <i class="bx bxl-css3"></i>
                </li>
                <li class="skills__name">
                  <span class="skills__circle"></span> Git
                  <i class="bx bxl-git"></i>
                </li>
              </ul>
            </div>
          </section>
          <!-- LANGUAGES -->
          <section class="languages section">
            <h2 class="section-title">Languages</h2>

            <div class="languages__container">
              <ul class="languages__content bd-grid">
                <li class="languages__name">
                  <span class="languages__circle"></span> English
                </li>
                <li class="languages__name">
                  <span class="languages__circle"></span> Spanish
                </li>
                <li class="languages__name">
                  <span class="languages__circle"></span> French
                </li>
              </ul>
            </div>
          </section>
        </div>

        <div class="resume__right">
          <!-- PROFILE -->
          <section class="profile section" id="profile">
            <h2 class="section-title">Profile</h2>

            <p class="profile__description">
              More than 7 years of experience, working with different brands
              such as American Express, Delta, Kellog's, Dunkin Donuts,
              Playstation and others. Using agile methodologies on a daily basis
              for different projects. Fast learner looking forward to keep on
              acquiring new knowledge throughout my career.
            </p>
          </section>
          <!-- EXPERIENCE -->
          <section class="experience section" id="experience">
            <h2 class="section-title">Experience</h2>

            <div class="experience__container bd-grid">
              <div class="experience__content">
                <div class="experience__time">
                  <span class="experience__rounder"></span>
                  <span class="experience__line"></span>
                </div>

                <div class="experience__data bd-grid">
                  <h3 class="experience__title">Full Stack Engineer</h3>
                  <span class="experience__company"
                    >From 2021 | Gorilla Logic</span
                  >
                  <p class="experience__description">
                    <!-- Work in this company dedicating the best responsibility in
                    the area that corresponds. -->
                  </p>
                </div>
              </div>

              <div class="experience__content">
                <div class="experience__time">
                  <span class="experience__rounder"></span>
                  <span class="experience__line"></span>
                </div>

                <div class="experience__data bd-grid">
                  <h3 class="experience__title">Senior Creative Engineer</h3>
                  <span class="experience__company"
                    >From 2018 to 2021 | Prodigious</span
                  >
                  <p class="experience__description">
                    <!-- Work in this company dedicating the best responsibility in
                    the area that corresponds. -->
                  </p>
                </div>
              </div>

              <div class="experience__content">
                <div class="experience__time">
                  <span class="experience__rounder"></span>
                  <span class="experience__line"></span>
                </div>

                <div class="experience__data bd-grid">
                  <h3 class="experience__title">Creative Engineer</h3>
                  <span class="experience__company"
                    >From 2016 to 2018 | Prodigious</span
                  >
                  <p class="experience__description">
                    <!-- Delivering the best results for the company and improving
                    productivity. -->
                  </p>
                </div>
              </div>

              <div class="experience__content">
                <div class="experience__time">
                  <span class="experience__rounder"></span>
                  <span class="experience__line"></span>
                </div>

                <div class="experience__data bd-grid">
                  <h3 class="experience__title">Associate Creative Engineer</h3>
                  <span class="experience__company"
                    >From 2015 to 2016 | Prodigious</span
                  >
                  <p class="experience__description">
                    <!-- Work in this company dedicating the best responsibility in
                    the area that corresponds. -->
                  </p>
                </div>
              </div>

              <div class="experience__content">
                <div class="experience__time">
                  <span class="experience__rounder"></span>
                  <span class="experience__line"></span>
                </div>

                <div class="experience__data bd-grid">
                  <h3 class="experience__title">
                    Media Operations Technology Analyst
                  </h3>
                  <span class="experience__company"
                    >From 2013 to 2015 | Bosz Digital/Prodigious</span
                  >
                  <p class="experience__description">
                    <!-- Work in this company dedicating the best responsibility in
                    the area that corresponds. -->
                  </p>
                </div>
              </div>

              <div class="experience__content">
                <div class="experience__time">
                  <span class="experience__rounder"></span>
                  <!-- <span class="experience__line"></span> -->
                </div>

                <div class="experience__data bd-grid">
                  <h3 class="experience__title">Manager</h3>
                  <span class="experience__company"
                    >From 2009 to 2013 | Don Döner Restaurant</span
                  >
                  <p class="experience__description">
                    <!-- Work in this company dedicating the best responsibility in
                    the area that corresponds. -->
                  </p>
                </div>
              </div>
            </div>
          </section>
          <!-- EDUCATION -->
          <section class="education section" id="education">
            <h2 class="section-title">Education</h2>

            <div class="education__container bd-grid">
              <div class="education__content">
                <div class="education__time">
                  <span class="education__rounder"></span>
                  <span class="education__line"></span>
                </div>

                <div class="education__data bd-grid">
                  <h3 class="education__title">
                    Bachelor Degree - Computer Science
                  </h3>
                  <span class="education__studies">Ulacit</span>
                  <span class="education__year">2016</span>
                </div>
              </div>

              <div class="education__content">
                <div class="education__time">
                  <span class="education__rounder"></span>
                  <span class="education__line"></span>
                </div>

                <div class="education__data bd-grid">
                  <h3 class="education__title">
                    Bachelor Degree - Business Management
                  </h3>
                  <span class="education__studies"
                    >Universidad Interamericana</span
                  >
                  <span class="education__year">2011</span>
                </div>
              </div>

              <div class="education__content">
                <div class="education__time">
                  <span class="education__rounder"></span>
                  <!-- <span class="education__line"></span> -->
                </div>

                <div class="education__data bd-grid">
                  <h3 class="education__title">High-School Degree</h3>
                  <span class="education__studies"
                    >British School of Costa Rica</span
                  >
                  <span class="education__year">1994 - 2007</span>
                </div>
              </div>
            </div>
          </section>
          <!-- CERTIFICATES -->
          <section class="certificate section" id="certificates">
            <h2 class="section-title">Certificates</h2>

            <div class="certificates__container bd-grid-cert">
              <div class="certificate__content">
                <h3 class="certificate__title">
                  <span class="certificate__circle"></span>International
                  Baccalaureate Diploma
                </h3>

                <!-- <p class="certificate__description">
                  For meeting the expectations of leading the team to work the
                  specified tasks in the labor field.
                </p> -->
              </div>
              <div class="certificate__content">
                <h3 class="certificate__title">
                  <span class="certificate__circle"></span>IGCSE Certificate
                </h3>
                <!-- <p class="certificate__description">
                  For meeting the expectations of leading the team to work the
                  specified tasks in the labor field.
                </p> -->
              </div>
            </div>
          </section>

          <!-- REFERENCES -->



        </div>
      </div>
    </main>

    <!-- SCROLL TOP -->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
    </a>

    <!-- HTML2PDF -->
    <script src="{{asset("cv/assets/js/html2pdf.bundle.min.js")}}"></script>
    <!-- MAIN JS -->
    <script src="{{asset("cv/assets/js/main.js")}}"></script>
  </body>
</html>
