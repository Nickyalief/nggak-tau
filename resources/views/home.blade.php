@extends('halamanutama')
<a class="navbar-brand" href="#"><img src="/img/PRAKARSAicon.png" alt="" class="navbar-brand" width="40"><span
    class="text-warning">SCOUT</span>PRAKARSA</a>
 <!-- gambar -->
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/caraka.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>CARAKA 2023</h5>
          <p>Ayo dukung penanaman karakter nilai kebangsaan Gerakan Pramuka. Milenial Scout For Indonesia⚜️
          </p>
         <a href="#event"> <button type="button" class="btn buttonnav text-white mt-4 btn-header">Explore now!</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/pta.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block about-text">
          <h5>PTA 2023</h5>
          <p>Selamat datang untuk kakak kakak yang resmi jadi anggota Prakarsa, Semoga bisa betanggung jawab atas tugasnya⚜️</p>
          <a href="#event"><button type="button" class="btn buttonnav text-white mt-4 btn-header">Explore now!</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/sout.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>SCOUTFEST V</h5>
          <p>"Puspa Warna Budaya Nusantara" Lomba Pramuka tinggat penggalang se-Pasuruan Raya.⚜️</p>
         <a href="#event"> <button type="button" class="btn buttonnav text-white mt-4 btn-header">Explore now!</button></a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- gambar ends -->
  <!-- event strats -->
  <section class="event section-padding" id="event">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Event</h2>
            <p>Hal yang ditunggu tunggu telah tiba<br>nantikan pada tanggal 20 mei 2023 Scout Fest
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/20230312_193105_0000.png"></div>
              <h3 class="card-title">Scout Fest</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi
                temporibus
                alias iste. Accusantium?</p><button class="btn bg-warning text-dark">Learn More</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/gala.PNG"></div>
              <h3 class="card-title">Maskot Scout Fest</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi
                temporibus
                alias iste. Accusantium?</p><button class="btn bg-warning text-dark">learn More</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/wirakarsa.jpeg"></div>
              <h3 class="card-title">Menu Wirakarsa</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi
                temporibus
                alias iste. Accusantium?</p><button class="btn bg-warning text-dark">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- event ends -->
  <!-- about -->
  <section id="sec-2" class="py-5" >
    <div class="container my-4" >
      <div class="row gx-lg-5">
        <div class="col-lg-6 mb-5">
          <img src="img/smk.png" class="img-fluid" id="profil">
        </div>
        <div class="col-lg-6">
          <h3 >Pangkalan SMKN 1 PURWOSARI</h3>
          <p class="text-muted fw-light lh-lg my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit
            sequi iste accusamus blanditiis sit ex voluptates et qui iusto fugit, alias quod eveniet eum quidem culpa
            odio tenetur ea? Earum iste maiores vero tempora aperiam, quia perspiciatis eligendi nihil odit debitis eum,
            itaque dolorum cumque ad? Id expedita fugiat ut!</p>
         <a href="https://www.smkn1purwosari.sch.id"> <button type="button" class="btn buttonsmk btn-black mt-2">Read more</button></a>
        </div>
      </div>
    </div>
  </section>
  <!-- About ends -->
  <!-- viDEO -->
  <section id="sec-5" class="py-5">
    <div class="container my-4">
      <div class="row mb-5">
        <div class="col text-center">
          <h3 class="mb-4">AFTER MOVIE SCOUT FEST</h3>
          <p class="lh-lg fw-light pt-2 w-75 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Architecto, alias a natus deleniti neque ad cupiditate dicta explicabo nemo vel?</p>
        </div>
      </div>

      <div class="row">
        <video controls>
          <source src="img/scoutfest.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </section>

   <!-- footer starts -->
   <footer class="bg-orange">
    <div class="container">
      <div class="row pt-4 text-white">
        <div class="col-md-6 text-center text-md-start">
          <p><span class="fw-bold">Prakarsa &copy;</span> Copyright 2023</p>
        </div>
        <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
          <ul class="d-flex p-0">
            <a href=""><li><i class="fab fa-facebook-f px-2"></i></li></a>
            <a href="https://www.youtube.com/embed/PbepaedL2Js" target="_blank"><li><i class="fab fa-youtube px-2"></i></li></a>
            <a href="https://www.instagram.com/pramuka_smknpur/" target="_blank"><li><i class="fab fa-instagram px-2"></i></li></a>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer ends -->
