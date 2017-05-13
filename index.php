<!doctype html>

<html lang="en" ng-app="portfolio">
<head>
  <meta charset="utf-8">

  <title>CJ Douglas - Fullstack Engineer</title>
  <meta name="description" content="Websites made for you.">
  <meta name="author" content="CJ Douglas">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Requirements -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css">
  <script src="https://use.fontawesome.com/6b5e017b49.js"></script>
  <script src="lib/angular/angular.js"></script>
  <script src="lib/angular-bootstrap/ui-bootstrap-tpls.js"></script>
  <script src="lib/ngSmoothScroll/lib/angular-smooth-scroll.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/codekraft-studio/angular-typed/master/dist/angular-typed.min.js"></script>

  <!-- Custom -->
  <link rel="stylesheet" href="assets/stylesheets/styles.css">
  <script src="assets/scripts/main.js"></script>
  <script src="assets/scripts/controllers/home.js"></script>
  <script src="assets/scripts/directives/mobile-nav.js"></script>
</head>

<body>
  <div ng-controller="HomeController" class="wrapper container-fluid">
    <nav class="col-sm-12 col-xs-6 desktop-nav">
      <div class="logo">
        <img src="assets/files/images/logo.png" alt="CJ Douglas" title="CJ Douglas" />
      </div>
      <ul>
        <li class="active">Home</li>
        <li scroll-to="my-work">My Work</li>
        <li scroll-to="contact">Contact</li>
      </ul>
    </nav>
    <div class="krabby-patty-menu">
      <i class="fa fa-bars" id="krabby-patty-menu-icon" aria-hidden="true"></i>
    </div>
    <nav mobile-nav class="mobile-nav"></nav>
    <div class="hero row">
      <div class="hero-bg"></div>
      <div class="hero-bg-overlay"></div>
      <div class="hero-content col-xs-12">
        <div class="hero-text">
          <h1 class="hero-header">Websites made with <br>
            <typed start-timeout="3000"
              type-speed="20"
              back-speed="20"
              loop="true"
              type-strings="[
                '^400purpose.^1200',
                '^400design.^1200',
                '^400passion.^1200',
                '^400you^150 in mind.^500'
              ]">
            </typed>
          </h1>
          <p class="hero-description">
            I am a Fullstack Developer based out of Boston, MA with a deep passion for web development.
            I've had my hand in everything from early age start ups to large corporations. If you're looking
            for a determined and driven developer to create your web presence, please get in touch with me.
          </p>
          <a scroll-to="contact" class="btn btn-primary hero-btn need-website"><span class="hero-btn-text">I need a website </span><span class="hero-btn-icon glyphicon glyphicon-chevron-right"></span></a>
          <a href="/assets/files/Resume.pdf" class="btn btn-primary hero-btn resume"><span class="hero-btn-text">My Resume </span><span class="hero-btn-icon glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
    </div>
  </div> <!-- End Hero Container -->

  <div class="container">
    <div class="projects-container section row">
      <h1 id="my-work" class="section-header">My Work</h1>
      <div class="row project project-left">
        <div class="project-image col-sm-6 col-xs-12">
          <a href="https://www.gamersensei.com">
            <img src="assets/files/images/gamer-sensei-display.png" />
          </a>
        </div>
        <div class="col-sm-6 col-xs-12">
          <h2 class="project-header">
            <a class="project-header-link" href="https://www.gamersensei.com">Gamer Sensei</a>
          </h2>
          <p class="project-description">
            Gamer Sensei is the first mastery platform for competitive gamers who want to win more. I joined as their
            first full-time employee and helped grow the company through a redesign and Series A funding.
          </p>
          <div class="tag-container">
            <span class="tag">AngularJS</span>
            <span class="tag">Ruby on Rails</span>
            <span class="tag">Postgres</span>
            <span class="tag">RESTful API</span>
          </div>
        </div>
      </div>

        <div class="section-divider-top"></div>
        <div class="section-divider-bottom"></div>

      <div class="row project project-right">
        <div class="project-image col-sm-6 col-xs-12">
          <a href="https://www.frumpuskrumpus.com">
            <img src="assets/files/images/frumpus-krumpus-display.png" />
          </a>
        </div>
        <div class="project-description-wrapper col-sm-6 col-xs-12">
          <h2 class="project-header">
            <a class="project-header-link" href="https://www.frumpuskrumpus.com">Frumpus Krumpus</a>
          </h2>
          <p class="project-description">
            Frumpus Krumpus is a passion project depicting the life of 2 roommates and their weekly adventures.
            The comics themselves are created by a good friend of mine while I created the website from scratch.
            Fully equipped with an admin portal for him to upload the newest comic, the site basically runs itself!
          </p>
          <div class="tag-container">
            <span class="tag">AngularJS</span>
            <span class="tag">Ruby on Rails</span>
            <span class="tag">Postgres</span>
            <span class="tag">RESTful API</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="contact-container">
    <div class="container-fluid">
      <div class="col-xs-3 contact-social">
        <div class="contact-photo">
          <img src="assets/files/images/myself.jpg" alt="CJ Douglas Photo"/>
        </div>
        <div class="contact-social-buttons">
          <i class="fa fa-github" aria-hidden="true"></i>
          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <i class="fa fa-skype" aria-hidden="true"></i>
        </div>
      </div>
      <div class="col-xs-9 contact-form">
        <form action="mailer.php" method="post">
          <div class="col-md-4  col-sm-12 input-container">
            <input type="text" placeholder="Name" name="name" required/>
          </div>
          <div class="col-md-4  col-sm-12 input-container">
            <input type="email" placeholder="Email" name="email" required/>
          </div>
          <div class="col-md-4  col-sm-12 input-container">
            <input type="tel" placeholder="Phone" name="phone"/>
          </div>
          <br>
          <div class="col-md-12 input-container text-area">
            <textarea placeholder="What can I help you with?" name="message" required></textarea>
          </div>
          <button class="contact-submit" type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>

  <footer class="container">
    <span class="footer-content"> &copy; 2017 CJ Douglas</span>
  </footer>


</body>
</html>
