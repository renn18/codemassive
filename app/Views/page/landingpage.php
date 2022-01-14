<?= $this->extends('templating/page-layout')?>

<?= $this->section('content')?>

  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/1.jpeg');">
      </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Software Engineering GCS 2020</h1>
          <div class="text-center">
            <a href="#" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-google-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Hello! Welcome to my Project</h2>
            <h5 class="description">Perkenalkan saya Muhammad Putra Pratama selaku pembuat serta penanggung jawab project ini ingin memperkenalkan sebuah project hasil kerja keras selama ini. Kritik dan masukan sangat bermanfaat bagi kelangsungan project ini.</h5>
          </div>
        </div>
        <div class="separator separator-primary"></div>
        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('./assets/img/bg00.jpg')">
               
                <p class="blockquote blockquote-primary">"Before software can be reusable it first has to be usable."<br>
                  <span class="text-success">"Sebelum sebuah software dapat dipergunakan ulang, software tersebut harus dapat dipergunakan."</span>
                  <br>
                  <br>
                  <small>-Ralph Johnson</small>
                </p>
              </div>
           
              <div class="image-container" style="background-image: url('./assets/img/internship-rendi-photo-backend.png')"></div>
            </div>
            <div class="col-md-5">
             
              <div class="image-container image-right" style="background-image: url('./assets/img/shutterstock_660705379-1.jpg')"></div>
              <h3>Project ini bergerak pada bidang IT dan bertujuan sebagai Website Belajar secara online</h3>
              <p>Seiring berkembangnya waktu, metodologi pembelajaran akan berubah mengikuti perkembangan teknologi yang jauh lebih modern. Sebagai contoh pada masa abad 19 metode belajar yang diterapkan adalah membaca dan menulis menggunakan media belajar seperti alat tulis menulis, dan buku. Namun pada abad 20 seperti saat sekarang metode seperti itu telah diabaikan dikarenakan tidak efisien waktu dan tenaga.
              </p>
              <p>
                Situasi seperti saat ini memaksa seluruh umat manusia untuk memahami dasar teknologi agar tidak ketinggalan informasi. Informasi bisa didapatkan dengan gampangnya di internet dan bukan cuman terpaku hanya beberapa informasi saja seperti pada koran, namun informasinya tak terbatas. Namun terdapat beberapa dampak buruk jika kita tak dapat memanfaatkan kegunaan teknoogi dengan baik, antaranya kejahatan siber (cyber crime), kecanduan game online dan sebagainya yang dapat merugikan diri sendiri ataupun orang lain.
              </p>
              <p>Kami berusaha berinovasi dan menciptakan sebuah platform website dan mempermudah seseorang untuk belajar dunia teknologi dengan terstruktur dan efisien. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-team bg-primary text-center" >
      <div class="container">
        <h2 class="title text-white">Profile</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              <div class="card">
                <div class="team-player">
                  <img src="./assets/img/1627212950289.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised mt-4">
                  <h4 class="title">Muhammad Putra Pratama</h4>
                  <p class="category text-primary">Frontend Web Developer</p>
                    <div class="card-header">
                      <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#intro" role="tab">
                            <i class="now-ui-icons objects_umbrella-13"></i> Intro
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                            <i class="now-ui-icons shopping_cart-simple"></i> Profile
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tugas" role="tab">
                            <i class="now-ui-icons shopping_shop"></i> Tasks
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#skills" role="tab">
                            <i class="now-ui-icons ui-2_settings-90"></i> Skills
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <!-- Tab panes -->
                      <div class="tab-content text-center">
                        <div class="tab-pane active" id="intro" role="tabpanel">
                          <p>Biasa dipanggil Ren, Saya adalah seorang yang menekuni frontend web developer dan metode belajar yang ototidak. Seringkali saya sudah mengetahui ilmu yang ingin diajarkan oleh dosen sehingga saya memutuskan untuk  belajar ototidak. Keahlian saya adalah web programming, IT support (hardware & software), Design Graphic.</p>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                          <p>Nama Lengkap <span class="text-primary">Muhammad Putra Pratama</span><br>
                            TTL <span class="text-primary">Padang Sappa, 01 Januari 2002</span><br>
                            Alamat <span class="text-primary">Jl. Goa Ria no.17b Sudiang, Kec. Biring Kanaya Kota Makassar</span><br>
                            Hobi <span class="text-primary">Game, Musik</span><br>
                            Ketertarikan <span class="text-primary">Web Development</span>
                            

                          </p>
                        </div>
                        <div class="tab-pane" id="tugas" role="tabpanel">
                          <p>
                            Membuat wireframe sebuah website<br>
                            Mengatur tata letak (layout) halaman<br>
                            Memaksimalkan kenyamanan tampilan untuk kepuasan user<br>
                          </p>
                        </div>
                        <div class="tab-pane" id="skills" role="tabpanel">
                          <p>
                            Java Programming<br>
                            HTML, CSS<br>
                            Javascript<br>
                            Bootstrap, Angular.js<br>
                            PHP & MySQL<br>
                            Graphic Design (ex. Photoshop, pixellab)
                          </p>
                        </div>
                      </div>
                    </div>
                  <a href="https://wa.me/+6281345275818" class="btn btn-primary btn-icon btn-round" target="_blank"><i class="fab fa-whatsapp"></i></a>
                  <a href="https://www.instagram.com/_iamrenn" class="btn btn-primary btn-icon btn-round" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.facebook.com/zpaver007" class="btn btn-primary btn-icon btn-round" target="_blank"><i class="fab fa-facebook-square"></i></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="section section-contact-us text-center">
      <div class="container">
        <h2 class="title">Ingin bekerja bersama saya?</h2>
        <p class="description">Bagi yang tertarik pada project bisa mengisi form berikut</p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Nama...">
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email...">
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Alasan "></textarea>
            </div>
            <div class="send-button">
              <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Kirim</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<?= $this->endSection()?>