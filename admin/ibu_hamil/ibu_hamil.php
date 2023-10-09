
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Status Gizi Ibu Hamil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?module=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Ibu Hamil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


      <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Status Gizi Ibu Hamil</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            	<form action="?module=ibu_hamil" method="POST">

	              <div class="form-group">
	                <label for="lingkar_lengan">Lingkar Lengan</label>
	                <input type="text" required="" placeholder="Masukkan Ukuran Lingkar Lengan" name="lila" id="lila" class="form-control">
	              </div>
	               <div class="row">
			        <div class="col-12">
			          <input type="reset" value="Reset" class="btn btn-secondary">
			          <input type="submit" value="Hitung Status Gizi Ibu Hamil" class="btn btn-success float-right">
			        </div>
			      </div>
	            </div>
	            <!-- /.card-body -->  	
	        </form>


          </div>
          <!-- /.card -->

      <?php 
      $lila = $_POST['lila'];
        if ($lila != 0 && $lila <= 23.4){
          ?>
          <div class="row">
            <div class="col-lg-12 col-12">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner" style="text-align: center;">

                    <h1>Kekurangan Energi Kronis</h1>

                </div>

              </div>
              <div class="callout callout-info">
                <h5><strong><u>Catatan :</u> </strong> </h5>
                <p style="text-align: justify;">
                Status gizi pada ibu hamil penting untuk menentukan apakah seorang wanita dapat melewati masa kehamilannya dengan baik tanpa gangguan. Gizi yang diterima ibu hamil haruslah cukup, karena jika ibu hamil mengalami gizi kurang akan banyak komplikasi yang mungkin terjadi saat masa kehamilan. Ibu hamil kurang gizi akan menimbulkan dampak pada kesehatan janin dalam kandungannya. <br>
                Masalahnya, janin yang dikandung hanya akan mendapatkan asupan gizi dari ibunya. Jadi jika ibu tidak mendapatkan gizi yang baik maka anak yang dikandungnya pun tidak akan mendapatkan gizi yang baik juga. <br>
                Ibu hamil dengan gizi buruk juga akan mempengaruhi kesehatan dirinya sendiri. Gizi yang tidak cukup selama kehamilan akan menyebabkan beberapa gangguan kesehatan seperti anemia, merasa lelah dan lesuh, produktivitas rendah, dan menurunnya sistem kekebalan tubuh sehingga mudah terserang infeksi. Kekurangan gizi pada ibu hamil tidak hanya terjadi jika kurangnya nutrisi makronutrien. Kurang nutrisi pada ibu hamil dikaitkan dengan berbagai dampak buruk pada janin yang sedang berkembang, termasuk lambatnya pertumbuhan janin dan berat lahir rendah. Kekurangan gizi selama kehamilan akan meningkatkan risiko:

                  <ol style="text-align: justify;">
                    <li>
                     Stillbirth (bayi lahir mati)
                    </li>
                    <li>
                     Lahir prematur
                    </li>
                    <li>
                     Kematian perinatal (kematian bayi tujuh hari setelah lahir). Bayi yang memiliki berat kurang dari 2,5 kilogram (kg) kemungkinan 5 hingga 30 kali lebih besar untuk meninggal dalam tujuh hari pertama kehidupan dibandingkan dengan bayi dengan berat normal (≥2,5kg). Bayi yang memiliki berat badan kurang dari 1,5 kg memiliki peningkatan risiko kematian 70 hingga 100 kali dalam tujuh hari sejak lahir.
                    </li>
                    <li>
                     Gangguan sistem saraf, pencernaan, pernapasan, dan peredaran darah.
                    </li>
                    <li>
                    Cacat lahir
                    </li>
                    <li>
                    Kurang berkembangnya beberapa organ
                    </li>
                    <li>
                    Kerusakan otak
                    </li>
                  </ol>
                </p>
                  <p style="text-align: justify;">
                  Kebutuhan ibu hamil juga lebih banyak daripada yang lainnya. Karena janin yang di kandungan juga membutuhkan asupan yang berasal dari apa yang ibunya makan. Kebutuhan Energi ibu hamil per harinya itu ditaambah 180 – 300 kkal. Karbohidrat ditambah 25 – 40 kkal. Protein ditambah 1 – 30 gr. Lemak ditambah 2.3 gr.
                  </p> 
              </div>
            </div>
          </div>
          <?php
        }elseif($lila >= 23.5) {
          ?>
          <div class="row">
            <div class="col-lg-12 col-12">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner" style="text-align: center;">

                    <h1>Normal</h1>

                </div>

              </div>
            </div>
          </div>
          <?php
        }
      ?>

        
 </div>

