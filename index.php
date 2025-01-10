<?php 
include "koneksi.php";
?>

<html data-bs-theme="light">
  <head>
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="img/logo.png" />
  </head>

  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top"> <!-- ini awalan navbar -->
      <div class="container" >
        <a class="navbar-brand" href="#">Album</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>  <!-- ini untuk menu home-->

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#article">article</a>
              </li>  <!-- ini untuk menu article-->

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#gallery">gallery</a>
            </li>  <!-- ini untuk menu galeri-->

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#schedule">schedule</a>
            </li>  <!-- ini untuk menu schedule-->

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#AboutMe">AboutMe</a>
            </li>  <!-- ini untuk menu AboutMe-->

            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>  <!-- ini untuk menu login -->


            <button id="darkMode" class="btn btn-dark"> <i class="bi bi-moon-stars" ></i> </button>
            <button id="lightMode" class="btn btn-danger"> <i class="bi bi-brightness-low-fill"></i> </button>

            <!-- <li class="nav-item d-flex align-items-center ms-2">  // ini awalan untuk wadah button theme 
              
              <button id="darkModeBtn" class="btn btn-outline-dark me-2"> // ini awalan button dark theme
                <i class="bi bi-moon-fill"></i> Dark
              </button> ini akhiran button dark theme

              <button id="lightModeBtn" class="btn btn-outline-light"> // ini awalan button light theme
                <i class="bi bi-sun-fill"></i> Light
              </button> // ini akhiran button light theme

            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
           <!-- <li class="nav-item dropdown"> ( ini untuk menu drop down )
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a> -->
             <!-- <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul> -->
          
          <!-- <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form> -->
        </div>
      </div>
    </nav>
    <!-- ini akhiran navbar -->

    <section id="hero text" class="isi text-xm-start text-center p-5 bg-danger-subtle"><!-- ini awalan section hero -->
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center"> <!--align-items-center bg-danger-subtle mb-5 p-3 ini tambahan yang sendiri-->
                <img src="https://th.bing.com/th/id/OIP.PgRq12CZ7ibvq9yOPCqXNAHaJ1?w=131&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" img-fluid width="300">
                <div>
                    <h1 fw-bold display-4>Lorem ipsum dolor sit amet consectetur.</h1>
                    <h4 lead display-6>Lorem ipsum dolor sit amet consectetur.</h4>
                </div>    
            </div>
        </div>
    </section> <!-- ini ahkiran section hero -->

    <section div id="article" class="isi container text-center p-5" >
      <!-- ini awalan section article --></section>
        <h1 id="text" class=" fw-bold display-4 pb-3 text-center ">judul article</h1>
        <div class="row row-cols-1 row-cols-md-5 g-4 justify-content-center">
            <div class="col">
            <div class="card h-100">
                <img src="https://th.bing.com/th/id/OIP.5BhXSIVxsUXIPsjmWqQIKgHaHa?w=174&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>

                <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>

            </div>
            </div>

            <div class="col">
            <div class="card h-100">
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>

                <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
                
            </div>
            </div>

            <div class="col">
            <div class="card h-100">
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>

                <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>

            </div>
            </div>
            
            <div class="col">
            <div class="card h-100">
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                
                <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>

            </div>
            </div>

            <div class="col">
            <div class="card h-100">
                <img src="http://ts4.mm.bing.net/th?id=OIP.tDcZuE0refjUZIcJqlBZaQHaHa&pid=15.1" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>

                <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>

            </div>
            </div>

            <div class="col mb-4">
            <div class="card h-100">
                <img src="https://th.bing.com/th/id/OIP.rZATsxuPyBc7C3Q40CJ0pAHaID?w=147&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>

                <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
                
            </div>
            </div>
                
        </div> <!-- ini ahkiran section article -->

    <section div class="isi container text-center p-5 bg-danger-subtle" id="gallery"><!-- ini awalan section gallery -->

    <?php 
     $sql = "SELECT * FROM article ORDER BY tanggal DESC";
     $hasil = $conn->query($sql);

     while ($row = $hasil->fetch_assoc()) {
    ?>
        <h1 class=" fw-bold display-4 pb-3 ">judul gallery</h1>
        <div id="carouselExample" class="carousel slide ">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <?php
                  if ($row["gambar"] != '') {
                    if (file_exists('img/' . $row["gambar"] . '')) {
                ?>
                    <img src="img/<?= $row["gambar"] ?>" width="100" class="d-block w-100" alt="...">
                <?php
                    }
                  }
                ?>
              </div>
              <div class="carousel-item active">
                <?php
                  if ($row["gambar"] != '') {
                    if (file_exists('img/' . $row["gambar"] . '')) {
                ?>
                    <img src="img/<?= $row["gambar"] ?>" width="100" class="d-block w-100" alt="...">
                <?php
                    }
                  }
                ?>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    <?php 
     }
    ?>
    </section><!-- ini ahkiran section gallery -->

    <section div id="schedule" class="isi container text-center p-5" ><!-- ini awalan section shcedule --></section>
        <h1 id="text" class=" fw-bold display-4 pb-3 text-center ">schedule</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
           
            <div class="col">
            <div class="card h-100 text-center">
                
                <div class="card-header bg-danger">
                    <h6 class="hari text-light text-center">Senin</h6>
                </div>

                <div class="card-body">
                    <p class="card-text text-center">
                        Basis data (P) <br>
                        10.20 - 12.00 | D.3.M <hr> <br>
                        techpre <br>
                        12.30 - 14.10 | Kulino
                    </p>
                </div>

            </div>
            </div>

            <div class="col">
                <div class="card h-100 text-center">
                    
                    <div class="card-header bg-danger">
                        <h6 class="hari text-light text-center">Selasa</h6>
                    </div>
    
                    <div class="card-body">
                        <p class="card-text text-center">
                            Sistem Operasi <br>
                            07.00 - 09.30 | H.4.10 <hr> <br>
                            Pemrograman Berbasis Web <br>
                            10.20 - 12.00 | D.2.J <hr> <br>
                            Pendidikan Kewarganegaraan <br>
                            12.30 - 14.10 | Aula 
                        </p>
                    </div>
    
                </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center">
                        
                        <div class="card-header bg-danger">
                            <h6 class="hari text-light text-center">Rabu</h6>
                        </div>
        
                        <div class="card-body">
                            <p class="card-text text-center">
                                Rekayasa Perangkat Lunak <br>
                                07.00 - 09.30 | H.5.14
                            </p>
                        </div>
        
                    </div>
                    </div>
                
                    <div class="col">
                        <div class="card h-100 text-center">
                            
                            <div class="card-header bg-danger">
                                <h6 class="hari text-light text-center">Kamis</h6>
                            </div>
            
                            <div class="card-body">
                                <p class="card-text text-center">
                                    Basis Data (T) <br>
                                    08.40 - 10.20 | H.5.14
                                </p>
                            </div>
            
                        </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 text-center">
                                
                                <div class="card-header bg-danger">
                                    <h6 class="hari text-light">Jumat</h6>
                                </div>
                
                                <div class="card-body">
                                    <p class="card-text">
                                        Logif <br>
                                        12.30 | H.4.9 <hr> <br>
                                        Probabilitas & statistik <br>
                                        15.30 - 18.00 | H.4.10
                                    </p>
                                </div>
                
                            </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 text-center">
                                    
                                    <div class="card-header bg-danger">
                                        <h6 class="hari text-light text-center">Sabtu</h6>
                                    </div>
                    
                                    <div class="card-body">
                                        <p class="card-text text-center">
                                           Free
                                        </p>
                                    </div>
                    
                                </div>
                                </div>
        </div> <!-- ini ahkiran section Schedule -->

        <section id="AboutMe text" class="isi text-xm-start text-left p-5 mt-3 bg-danger-subtle"><!-- ini awalan section AboutMe -->
          <div class="container">
              <div class="d-sm-flex flex-sm-row-reverse align-items-center"> <!--align-items-center bg-danger-subtle mb-5 p-3 ini tambahan yang sendiri-->
                  <div>
                      <h5>A11.2023.14983</h5>
                      <h2 fw-bold display-4>Muhammad Narendra Bagus Nurseto</h2>
                      <h5 lead display-6>Program Studi Teknik Informatika</h5>
                      <h5><a href="https://www.bing.com/ck/a?!&&p=7c74dbbd9b85f61e4c92b146017c164e4be98cdd29fe7932bab8d6dff652562cJmltdHM9MTczMDY3ODQwMA&ptn=3&ver=2&hsh=4&fclid=097947ab-e1a2-6406-1a22-54fce00e65e1&psq=udinus&u=a1aHR0cHM6Ly9kaW51cy5hYy5pZC8&ntb=1" class="text-dark text-decoration-none">Universitas Dian Nuswantoro</a></h5>
                  </div>
                  <img class="m-3 rounded-circle" src="data:image/jpeg;base64,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" img-fluid width="300">
              </div>
          </div>
      </section> <!-- ini ahkiran section AboutMe -->

    <footer id="text" class="text-center p-5"><!-- ini awalan footer -->
    <div class="text-dark"> <!--ini untuk logo -->
        <i class="bi bi-whatsapp h2 p-2 "></i>
        <i class="bi bi-instagram h2 p-2 "></i>
        <i class="bi bi-twitter h2 p-2"></i>
    </div>

    <div class="text-dark">
        Muhammad Narendra Bagus Nurseto © 2024 <br>
        A11.2023.14983
    </div>
    </footer><!-- ini akhiran footer -->

    <script type="text/javascript">
      document.getElementById("darkMode").onclick = function () {
  document.body.classList.add("bg-dark");

  document.getElementById("darkMode").classList.remove("btn-dark");
  document.getElementById("darkMode").classList.add("btn-danger");
  document.getElementById("lightMode").classList.remove("btn-danger");
  document.getElementById("lightMode").classList.add("btn-dark");

  //   document.getElementById("text").style.backgroundColor = "bg-dark-subtle";
  //   document.getElementById("text").style.Color = "white";
  //   document.getElementsByClassName("card").style.backgroundColor = "gray";

  const collection = document.getElementsByClassName("isi");
  for (let i = 0; i < collection.length; i++) {
    collection[i].classList.remove("bg-danger-subtle");
    collection[i].classList.add("bg-secondary");
    collection[i].classList.remove("text-dark");
    collection[i].classList.add("text-light");
  }
};

document.getElementById("lightMode").onclick = function () {
  document.body.classList.remove("bg-dark");
  document.body.classList.add("bg-light");

  document.getElementById("darkMode").classList.remove("btn-danger");
  document.getElementById("darkMode").classList.add("btn-dark");
  document.getElementById("lightMode").classList.remove("btn-dark");
  document.getElementById("lightMode").classList.add("btn-danger");

  //   document.getElementById("text").style.backgroundColor = "bg-dark-subtle";
  //   document.getElementById("text").style.Color = "white";

  const collection = document.getElementsByClassName("isi");
  for (let i = 0; i < collection.length; i++) {
    collection[i].classList.remove("bg-secondary");
    collection[i].classList.add("bg-danger-subtle");
    collection[i].classList.remove("text-light");
    collection[i].classList.add("text-dark");
  }
};

    </script>

  </body>
</html>