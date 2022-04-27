<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://amagroup.tn/wp-content/uploads/2021/10/logobleu.png">
    <!-- BOX ICONS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset("cv/assets/css/styles.css")}}" />

    <title>CV | {{$candidat->nom}}</title>
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
                <img src="{{ asset("images/cvPhoto/".$candidat->photo)}}" alt="" class="home__img" />

                <h1 class="home__title"><b>{{$candidat->nom}}</b></h1>
                <h3 class="home__profession">{{$candidat->titre_pro}}</h3>

                <div>
                  <a
                    download=""
                    href=""
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
                <i class="bx bxl-linkedin-square social__icon"></i>{{$candidat->linkedin}}
              </a>
            </div>
          </section>



          

          <!-- SKILLS  -->
          <section class="skills section" id="skills">
            <h2 class="section-title">Compétences</h2>

            <div class="skills__content bd-grid">
              <ul class="skills__data">
                @foreach($candidat->competances as $competance)
                  <li class="skills__name">
                    <span class="skills__circle"></span> {{$competance->designation}}
                    <i class="bx bxl-".{{$competance->designation}}></i>
                  </li>
                @endforeach
              </ul>

              <!--<ul class="skills__data">
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
              </ul>-->
            </div>
          </section>
          <!-- LANGUAGES -->
          <section class="languages section">
            <h2 class="section-title">Langues</h2>

            <div class="languages__container">
              <ul class="languages__content bd-grid">
                <li class="languages__name">
                  <span class="languages__circle"></span> {{$candidat->langue}}
                </li>
              </ul>
            </div>
          </section>
        </div>

        <div class="resume__right">
          <!-- PROFILE -->
          <section class="profile section" id="profile">
            <h2 class="section-title">PROFIL</h2>

            <p class="profile__description">
            {{$candidat->profil_candidat}}
            </p>
          </section>
          <!-- EXPERIENCE -->
          <section class="experience section" id="experience">
            <h2 class="section-title">Experience</h2>

            <div class="experience__container bd-grid">
              @foreach($candidat->experiences->sortByDesc("date_fin") as $experience)
                <div class="experience__content">
                  <div class="experience__time">
                    <span class="experience__rounder"></span>
                    <span class="experience__line"></span>
                  </div>

                  <div class="experience__data bd-grid">
                    <h3 class="experience__title">{{$experience->titre}}</h3>
                    <span class="experience__company"
                      >De {{ Carbon\Carbon::parse($experience->date_debut)->format('m-Y') }} à {{ Carbon\Carbon::parse($experience->date_fin)->format('m-Y') }} | {{$experience->entreprise}}</span
                    >
                    <p class="experience__description">
                      <!-- Work in this company dedicating the best responsibility in
                      the area that corresponds. -->
                    </p>
                  </div>
                </div>
              @endforeach
            </div>
          </section>
          <!-- EDUCATION -->
          <section class="education section" id="education">
            <h2 class="section-title">Education</h2>

            <div class="education__container bd-grid">
              @foreach($candidat->formations->sortByDesc("date_fin") as $formation)
                <div class="education__content">
                  <div class="education__time">
                    <span class="education__rounder"></span>
                    <span class="education__line"></span>
                  </div>

                  <div class="education__data bd-grid">
                    <h3 class="education__title">
                      {{$formation->diplome}}
                    </h3>
                    <span class="education__studies">{{$formation->ecole}}</span>
                    <span class="education__year">De {{ Carbon\Carbon::parse($formation->date_debut)->format('m-Y') }} à {{ Carbon\Carbon::parse($formation->date_fin)->format('m-Y') }} </span>
                  </div>
                </div>
              @endforeach
            </div>
          </section>
          <!-- CERTIFICATES -->
          <section class="certificate section" id="certificates">
            <h2 class="section-title">Certificates</h2>

            <div class="certificates__container bd-grid-cert">
              @foreach($candidat->certifications->sortByDesc("date") as $certification)
                <div class="certificate__content">
                  <div class="education__data bd-grid">
                      <h3 class="education__title">
                      <span class="certificate__circle"></span>{{$certification->nom}}
                      </h3>
                      <span class="education__studies">&emsp;{{$certification->organisme}} | <span class="education__year">{{ Carbon\Carbon::parse($formation->date)->format('m-Y') }}</span></span>
                  </div>
                </div>
              @endforeach
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
