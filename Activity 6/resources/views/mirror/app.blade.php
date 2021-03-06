<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="pstyle.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js"></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap"
      rel="stylesheet"
    />

    <title>Portfolio</title>
  </head>
  <body>
    <div class="container navigation pt-3">
      <div class="row">
        <div class="col-6 d-flex justify-content-start align-items-center">
          <i class="fas fa-code fa-2x text-warning pb-3"></i>
          <h5 class="d-inline pl-2 text-white">Portfolio</h5>
        </div>
        <div class="col-6 pt-2">
          <div
            class="row text-center p-0 d-flex justify-content-end align-items-center"
          >
            <div class="col-3">
              <a href="#about" class="text-white navigation-link">About</a>
            </div>
            <div class="col-3">
              <a href="#projects" class="text-white navigation-link"
                >Projects</a
              >
            </div>
            <div class="col-3">
              <a href="#social-media" class="text-white navigation-link"
                >Social Media</a
              >
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Main Container -->
    <div class="main-container container">
      <div class="row main_row">
        <div class="col-6">
          <h2 class="text-white">Hello, I'm</h2>
          <h1 class="text-warning m-heading">Pavithra devi</h1>
          <h2 class="text-white">Junior Web Developer</h2>
        </div>
        <div class="col-6">
          <img
            src="https://www.bing.com/th/id/OGC.6f0865ee1d5163846fc8829ecfe245f4?pid=1.7&rurl=http%3a%2f%2fwww.jaseir.com%2fwp-content%2fuploads%2f2018%2f06%2fCorporate_Woman_Talking_on_the_Phone_GIF_Animation_Loop.gif&ehk=qOBpH4rIA2zwnJUV8OEmooN0WTpop5B3AMVzwzFP2iQ%3d"
            class="img-fluid"
          />
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div id="about" class="container about p-5">
      <div class="row">
        <div class="col-6">
          <img src="https://www.bing.com/th/id/OGC.378a67e02367f897df8cba5e225fa20a?pid=1.7&rurl=https%3a%2f%2fi.pinimg.com%2foriginals%2fd6%2fa0%2fff%2fd6a0ff882784252f642390a299d0d65e.gif&ehk=w3Ju%2bLbYF5vqXcwES3tkssXRrXEUPUCAfxn2cQQCtxQ%3d" class="img-fluid" />
        </div>
        <div class="col-6 pl-5 pt-5 pb-5 text-white">
          <h3 class="text-warning">About Me</h3>
          <h1 class="m-heading">A little bit about me</h1>
          <p>
            I am currently working with Html,CSS,Bootstrap,TAilwind and Laravel.As a complete 
            <b class="text-warning">Junior web developer</b> 
          </p>
          <br />
          <p>
           After completeing my one month of <b class="text-warning">Engineering Intern Training</b>, I will be working as a junior developer at icrews system company.
        
          </p>
          <button class="btn btn-outline-warning">Learn More</button>
        </div>
      </div>
    </div>

    <!-- Projects Section -->
    <div id="projects" class="container mt-5 pt-5">
      <h1 class="text-warning mb-3 pb-2">My Projects</h1>
      <div class="row">
        <div class="col-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img
              src="https://www.bing.com/th/id/OGC.f5f8620b3fcedb50d226eba2b177b9f9?pid=1.7&rurl=https%3a%2f%2fmedia.giphy.com%2fmedia%2fxT1XGzPUJ5JTK6Vkn6%2fgiphy.gif&ehk=q1cvUCb56WQdtjp7Sz%2fx9ISztkB1egKRqUIcfBe2rZ4%3d"
              class="card-img-top"
              style="height: 13rem;"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Green life platform</h5>
              <p class="card-text">
                I created a <b class="text-warning">Green Life</b> website using Bootstrap.
              </p>
              <a href="#" class="btn btn-warning">See Project</a>
            </div>
          </div>
        </div>
        <br> <br><br><br>
        <div class="col-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img
              src="https://www.bing.com/th/id/OGC.dc7c685fbeaf4cb21affbc66f4f1ef0c?pid=1.7&rurl=https%3a%2f%2fcdn.dribbble.com%2fusers%2f1064794%2fscreenshots%2f6462067%2fdribbble_4.gif&ehk=D9m05SFnFM6vctvWqDQuzj%2fbWP5mRoFsnACEloZGCtI%3d"
              class="card-img-top img-fluid"
              alt="..."
              style="height: 13rem;"
            />
            <div class="card-body">
              <h5 class="card-title">Profile web platform</h5>
              <p class="card-text">
                I Designed a <b class="text-warning">Profile validation</b> using html,css, javascript.
              </p>
              <a href="#" class="btn btn-warning">See Project</a>
            </div>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>

    <!-- Social Media Section -->
    <div id="social-media" class="container-fluid">
      <div class="container text-white py-5">
        <h4 class="text-warning">Social Media</h4>
        <h1 class="m-heading">Let's be friends</h1>
        <div class="row pt-5">
          <div class="col-3 media_link btn" href="#">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">LinkedIn</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-linkedin-in fa-2x text-secondary"></i>
              </div>
            </div>
          </div>

          <div class="col-3 media_link btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">Github</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-github fa-2x text-secondary"></i>
              </div>
            </div>
          </div>

          <div class="col-3 media_link btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">Youtube</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-youtube fa-2x text-secondary"></i>
              </div>
            </div>
          </div>

          <div class="col-3 media_link bg-warning btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-dark">Email</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fas fa-envelope fa-2x text-secondary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container text-muted text-center py-3 mt-5">
        <h5>
          Copyright &copy; 2022 |
          <a class="text-warning text-decoration-none" href="#about"
            >Pavithra Devi</a
          >
        </h5>
      </div>
    </footer>
  </body>
</html>