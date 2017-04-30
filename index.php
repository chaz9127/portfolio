<!doctype html>

<html lang="en" ng-app="portfolio">
<head>
  <meta charset="utf-8">

  <title>CJ Douglas - Fullstack Engineer</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Requirements -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css">
  <script src="https://use.fontawesome.com/6b5e017b49.js"></script>
  <script src="lib/angular/angular.js"></script>
  <script src="lib/angular-bootstrap/ui-bootstrap-tpls.js"></script>
  <script src="lib/angular-typed/dist/angular-typed.js"></script>

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
      </div>
      <ul>
        <li class="active">Home</li>
        <li>My Work</li>
        <li>Contact</li>
      </ul>
    </nav>
    <div class="krabby-patty-menu">
      <img id="krabby-patty-menu-icon" src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png" />
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
          <button class="btn btn-primary for-hire"><span class="for-hire-text">I need a website </span><span class="for-hire-icon glyphicon glyphicon-chevron-right"></span></button>
        </div>
      </div>
    </div>
  </div> <!-- End Hero Container -->

  <div class="container">
    <div class="projects-container section row">
      <h1 class="section-header">My Work</h1>
      <div class="row project project-left">
        <div class="project-image col-sm-6 col-xs-12">
          <img src="http://mattfarley.ca/images/project-showcase-glc.png" />
        </div>
        <div class="col-sm-6 col-xs-12">
          <h2 class="project-header"><a class="project-header-link" href="https://www.gamersensei.com">Gamer Sensei</a></h2>
          <p class="project-description">
            GLC Solutions is a game changing technology consulting
            firm based out of Langley, BC. They help companies
            utilize and leverage technology for sustainable long
            term growth and profitability.
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
          <img src="http://mattfarley.ca/images/project-showcase-glc.png" />
        </div>
        <div class="project-description-wrapper col-sm-6 col-xs-12">
          <h2 class="project-header"><a class="project-header-link" href="https://www.frumpuskrumpus.com">Frumpus Krumps</a></h2>
          <p class="project-description">
            GLC Solutions is a game changing technology consulting
            firm based out of Langley, BC. They help companies
            utilize and leverage technology for sustainable long
            term growth and profitability.
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
  <div class="contact-container">
    <div class="container-fluid">
      <div class="col-xs-3 contact-social">
        <div class="contact-photo">
          <img src="http://www.philipkesslerphotography.com/images/headshots/headshots79.jpg" alt="CJ Douglas Photo"/>
        </div>
        <div class="contact-social-buttons">
          <i class="fa fa-github" aria-hidden="true"></i>
          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <i class="fa fa-skype" aria-hidden="true"></i>
        </div>
      </div>
      <div class="col-xs-9 contact-form">
        <form class="">
          <div class="col-md-4  col-sm-12 input-container">
            <input type="text" placeholder="Name" required/>
          </div>
          <div class="col-md-4  col-sm-12 input-container">
            <input type="email" placeholder="Email" required/>
          </div>
          <div class="col-md-4  col-sm-12 input-container">
            <input type="tel" placeholder="Phone®"/>
          </div>
          <br>
          <div class="col-md-12 input-container text-area">
            <textarea placeholder="What can I help you with?" required></textarea>
          </div>
          <button type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>

  <footer class="container">
    <div class="footer-logo"></div>
    <span class="footer-content"> &copy; 2017 CJ Douglas</span>
  </footer>


</body>
</html>