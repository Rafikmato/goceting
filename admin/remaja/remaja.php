
     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Status Gizi Usia Dewasa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?module=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dewasa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

              <?php
                  $umur = $_POST['umur'];
                  $tinggi_badan = $_POST['tinggi_badan']*$_POST['tinggi_badan'];
                  $berat_badan = $_POST['berat_badan'];

                  $hsl = $berat_badan/$tinggi_badan;

                ?>

      <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Status Gizi Dewasa</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            	<form action="?module=dewasa" method="POST">
                <div class="form-group">
                  <label for="exampleSelectRounded0">Jenis Kelamin</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option selected="" disabled=""> -- Pilih Salah Satu --</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
	           	   
	              <div class="form-group">
                  <label for="umur">Umur</label>
                  <input type="text" required="" name="umur" id="umur" placeholder="cth : 20" class="form-control">
                </div>
  

              <div class="form-group">
                  <label for="tinggi_badan">Tinggi Badan</label>
                  <input type="text" required="" placeholder="cth : 1.70" name="tinggi_badan" id="tinggi_badan" class="form-control">
                </div>


	              <div class="form-group">
	                <label for="berat_badan">Berat Badan</label>
	                <input type="text" required="" placeholder="cth : 83" name="berat_badan" id="berat_badan" class="form-control">
	              </div>
	               <div class="row">
			        <div class="col-12">
			          <input type="reset" value="Reset" class="btn btn-secondary">
			          <input type="submit" value="Hitung Status Gizi Dewasa" class="btn btn-success float-right">
			        </div>
			      </div>
	            </div>
	            <!-- /.card-body -->  	
	        </form>


          </div>
          <!-- /.card -->



                 <?php

                    if ($hsl <= 18.5) {
                      ?>

                      <div class="row">
                        <div class="col-lg-12 col-12">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner" style="text-align: center;">

                                <h1>Kurus</h1>
                   
                              <!-- <h1><?php echo $berat_badan; ?></h1> -->

                            </div>

                          </div>
                          <div class="callout callout-info">
                              <h5><strong><u>Catatan :</u> </strong> </h5>
                              <p style="text-align: justify;">
                                  Pada dasarnya, penanganan kurang gizi akan berbeda-beda dari satu orang dengan orang lainnya. Ini semua tergantung pada keparahan yang dialami, dan penyakit penyerta (komplikasi) juga yang timbul. Ada beberapa perubahan pola makan yang harus Anda perhatikan:
                                <ol style="text-align: justify;">
                                  <li>
                                    Makan makanan yang lengkap mengandung kalori serta bergizi, bukan hanya tinggi kalori saja
                                  </li>
                                  <li>
                                   Makan sedikit- sedikit tapi sering
                                  </li>
                                  <li>
                                  Makan snack di antara waktu makan besar.
                                  </li>
                                  <li>
                                  Minum minuman yang mengandung kalori
                                  </li>
                                </ol>
                                </p> 
                            </div>
                        </div>
                      </div>

                      <?php
                    }else if ($hsl <= 25.1){
                      ?>
                      <div class="row">
                        <div class="col-lg-12 col-12">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner" style="text-align: center;">

                                <h1>Normal</h1>
                              <!-- <h1><?php echo $berat_badan; ?></h1> -->
                            </div>

                          </div>
                        </div>
                      </div>
                      <?php
                    }elseif ($hsl >= 25.0) {
                      ?>
                        <div class="row">
                          <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                              <div class="inner" style="text-align: center;">

                                  <h1>Gemuk</h1>
                                <!-- <h1><?php echo $berat_badan; ?></h1> -->
                              </div>

                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  

                  ?>
  
        
 </div>

