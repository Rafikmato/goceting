<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    

    <style>
      #more {display: none;}
      #more1 {display: none;}
      #more2 {display: none;}

      .itang:hover .card-img-top{
        opacity: 0.5;
        transform: scale(1.2);
        transition: 0.5s ease-in-out;
      }
      .itang {
        background-color: black;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
      
      a {
        text-decoration: none;
      }

      .under{ 
        margin: 20px; 
        height: 160px;
        padding: 0px;   
      }
      .under h4{ 
        list-style: none; 
        position: relative; 
        display: inline;
        color:#333; 
        text-decoration: none;
      }
      
      .under h4:after{ 
        content: ''; 
        position: absolute; 
        left: 0px; 
        bottom: -2px; 
        width:0px; 
        height: 2px; 
        background: #333; 
        transition: all 0.45s;
      }
      .under h4:hover:after{ 
        width: 100%;
      }
      .under h4 a:hover{ 
        text-decoration: none;
      }

      .arc {
        text-align: justify;
      }
    </style>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
              <div class="card-columns">
                <div class="card">
                  <div class="itang">
                    <a href="?module=artikel-1">
                      <img class="card-img-top" src="dist/img/MPASI.jpg" alt="MP-ASI" style="max-height: 250px; min-height: 250px;">
                    </div>
                    <div class="card-body under">
                      <h4 class="card-subtitle" style="color: black;">Pentingnya Pemberian MP-ASI</h4>
                      <p class="card-text" style="color: black;">World Health Organization (WHO) merekomendasikan para ibu untuk menyusui secara eksklusif selama 6 bulan, melanjutkan dengan memberikan makanan pendamping ASI dari ...</p>
                    </div>
                  </a>
                </div>
                <div class="card">
                  <div class="itang">
                    <a href="?module=artikel-2">
                      <img class="card-img-top" src="dist/img/resep.gif" alt="Card image top" style="max-height: 250px; min-height: 250px;">
                    </div>
                    <div class="card-body under">
                      <h4 class="card-subtitle" style="color: black;">Resep MP-ASI</h4>
                      <p class="card-text" style="color: black;">
                          Bayi 6-8 bulan :
                          Bahan matang:
                          1.	Nasi putih 30 gr
                          2.	Telur dadar 35gr
                          3.	Sayur kare wortel 20gr
                          Cara membuat : ...
                          </p>
                    </div>
                  </a>
                </div>
                <div class="card">
                  <div class="itang">
                    <a href="?module=artikel-3">

                      <img class="card-img-top" src="dist/img/pangan.jpg" alt="Card image top" style="max-height: 250px; min-height: 250px;">
                    </div>
                    <div class="card-body under">
                      <h4 class="card-subtitle" style="color: black;">Pangan Lokal Gorontalo</h4>
                      <p class="card-text" style="color: black;">Sejak dulu secara turun-temurun masyarakat desa terbiasa memanfaatkan sumber-sumber pangan yang beragam itu sebagai basis pemenuhan kebutuhan pangan pokok seharihari maupun sebagai camilan...</p>
                    </div>
                  </a>
                </div>
              
          </div>

        </div>

        <!-- <section class="content mb-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="simple-results.html" class="float-right">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-md" placeholder="Cari Judul Artikel...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-md btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->


        <div class="row">

          <div class="card" style="width: 100%;">
          <div class="card-header">
            <h3 class="card-title">APA ITU STUNTING ?</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i> -->
              </button>
            </div>
          </div>
          <div class="card-body">
          <p class="arc">
            World Health Organization (WHO) mendefinisikan stunting sebagai kondisi anak dibawah usia lima tahun yang memiliki perbandingan tinggi badan yang tidak sebanding dengan umurnya. Faktor Stunting terjadi akibat gangguan kurang gizi dalam jangka waktu yang lama atau kronis sehingga menganggu pertumbuhan tinggi badan. <span id="dots">...</span><span id="more">Kondisi stunting akan nampak setelah bayi berumur 2 tahun. Stunting disebabkan oleh banyak faktor, diantaranya asupan makanan, berat lahir, penyakit, ASI, pendidikan orang tua, usia balita dan ekonomi keluarga. Keturunan hanya menyumbang 15% penyebab stunting.  
            Jika pada masa balita tidak mendapatkan cukup gizi maka akan mengalami kekurangan gizi. Selain itu, anak umur 24-59 bulan lebih menyukai makanan jajanan.dan kurang mengkonsumsi makanan pokok sehingga dapat mengalami kekurangan gizi akibat pilihan makanan yang kurang tepat. Oleh karena itu, mengatasi masalah kurang gizi khususnya stunting diperlukan perbaikan kualitas makanan dengan memanfaatkan pangan lokal yang memiliki harga terjangkau dengan kualitas gizi yang cukup baik mikronutrien maupun makronutrien yang dibutuhkan oleh balita stunting.</span></p>
            <button onclick="myFunction()" id="myBtn" class="btn btn-info">Baca Selengkapnya</button>
          
  
          </div>
          </div>
          <div class="card" style="width: 100%;">
          <div class="card-header">
            <h3 class="card-title">PENTINGNYA STATUS GIZI BAGI REMAJA</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i> -->
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="arc">
              Salah  satu  cara  untuk  mengetahui pertumbuhan remaja adalah dengan melakukan pengukuran  status  gizi,  baik  secara  langsung maupun  tidak  langsung.  Salah  satu  cara sederhana  adalah  dengan  melakukan pengukuran  berat  badan,  tinggi  badan  serta pengukuran komposisi tubuh pada remaja. <span id="dots1">...</span><span id="more1">
              Pengetahuan tentang pentingnya status gizi pada remaja dapat mencegah masalah yang akan timbul kedepannya seperti stunting. Manusia harus mempersiapkan dirinya sejak remaja agar ketika dewasa nanti tidak akan ada kekhawatiran tentang status gizi anaknya. Kurangnya pengetahuan tentang status gizi membuat remaja tidak memperhatikan asupan makanan sehingga cenderung mengonsumsi makanan yang tidak sehat seperti junk food  sehingga mempengaruhi status gizinya.</span></p>
              <button onclick="myFunction1()" id="myBtn1" class="btn btn-info">Baca Selengkapnya</button>
            </p>
  
          </div>
          <!-- /.card-body -->
          <!-- <div class="card-footer">
            Footer
          </div> -->
          <!-- /.card-footer-->
          </div>
          <div class="card" style="width: 100%;">
          <div class="card-header">
            <h3 class="card-title">PENTINGNYA STATUS GIZI BAGI IBU HAMIL</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i> -->
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="arc">
              Di Indonesia, salah satu parameter untuk menentukan status gizi ibu hamil adalah Indikator antropometri Lingkar Lengan Atas (LiLA) pada ibu, dimana asupan energi dan protein yang tidak mencukupi pada ibu hamil dapat menyebabkan Kurang Energi Kronis (KEK). Wanita hamil berisiko mengalami KEK jika memiliki Lingkar Lengan Atas (LILA).<span id="dots2">...</span><span id="more2"> Faktor resiko terjadinya Stunting antara lain, status gizi ibu hamil terhadap pertumbuhan dan perkembangan janinnya, dimana permasalahan gizi harus diperhatikan sejak masih dalam kandungan. Jika terjadi kekurangan status gizi awal kehidupan maka akan berdampak terhadap kehidupan selanjutnya seperti Pertumbuhan Janin Terhambat (PJT), Berat Badan Lahir Rendah (BBLR), kecil, pendek, kurus, daya tahan tubuh rendah dan risiko meninggal dunia.</span></p>
            <button onclick="myFunction2()" id="myBtn2" class="btn btn-info">Baca Selengkapnya</button>
          </div>
          <!-- /.card-body -->
          <!-- <div class="card-footer">
            Footer
          </div> -->
          <!-- /.card-footer-->
          </div>
        </div>
        

      



        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->


    </section>
    <script>
      //selengkapnya
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Baca Selengkapnya";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Lebih Sedikit";
          moreText.style.display = "inline";
        }
      }
      function myFunction1() {
        var dots = document.getElementById("dots1");
        var moreText = document.getElementById("more1");
        var btnText = document.getElementById("myBtn1");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Baca Selengkapnya";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Lebih Sedikit";
          moreText.style.display = "inline";
        }
      }
      function myFunction2() {
        var dots = document.getElementById("dots2");
        var moreText = document.getElementById("more2");
        var btnText = document.getElementById("myBtn2");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Baca Selengkapnya";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Lebih Sedikit";
          moreText.style.display = "inline";
        }
      }
    </script>
    <!-- /.content -->