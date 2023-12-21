
 

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Status Gizi Bayi & Balita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?module=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Bayi Perempuan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


 <div class="container-fluid">
  <div style="text-align:center; ">
            <h1 class="respon">Pilih Jenis Kelamin</h1>
          </div>
    <div class="row">
         <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align: center;" class="respon">Laki - Laki</h3>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person"></i>
              </div>
              <a href="?module=umur_laki" class="small-box-footer">Pilih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #FF69B4; color: white;">
              <div class="inner">
                <h3 style="text-align: center;" class="respon">Perempuan</h3>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-dress"></i>
              </div>
              <a href="?module=umur_perempuan" class="small-box-footer">Pilih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    </div>
  </div>


  <div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Status Gizi Bayi Dan Balita</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <form action="/goceting/function/calculation.php" method="POST">
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <input type="text" value="Laki - Laki" readonly="" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
        </div>

        <div class="form-group">
          <label for="umur">Umur</label>
          <input type="text" value="0-24 Bulan" readonly="" name="umur" id="umur" class="form-control">
        </div>

        <div class="form-group">
          <label for="tb">Bulan</label>
          <select id="tb" required="" class="form-control custom-select" name="bulan">
            <option selected disabled value="">-- Pilih Bulan --</option>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM bayi_balita_perempuan");
            while ($d = mysqli_fetch_array($query)) {

            ?>
              <option value="<?php echo $d['bulan']; ?>"><?php echo $d['bulan']; ?> Bulan </option>
            <?php
            }

            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="tinggi">Tinggi Badan / Panjang Badan</label>
          <input type="text" required="" placeholder="cth : 1.9" name="tinggi" id="tinggi" class="form-control">
        </div>
        <div class="row">
          <div class="col-12">
            <input type="reset" value="Reset" class="btn btn-secondary">
            <input type="submit" value="Hitung Status Gizi Anak" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->


  </div>
  <!-- /.card -->

  <?php if (isset($_GET['result'])) : ?>

    <?php if ($_GET['result'] == 'Sangat Pendek') : ?>
      <div class="row">
        <div class="col-lg-12 col-12">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner" style="text-align: center;">

              <h1>Sangat Pendek (Stunting)</h1>

              <!-- <h1><?php echo $berat_badan; ?></h1> -->

            </div>

          </div>
          <div class="callout callout-info">
            <h5><strong><u>Catatan :</u> </strong> </h5>
            <p style="text-align: justify;">
              Tinggi badan anak dipengaruhi oleh kebutuhan gizi anak usia dini, jika hal tersebut tidak terpenuhi maka berisiko mengalami stunting atau gangguan pertumbuhan.
              Gangguan pertumbuhan anak atau stunting dapat terjadi jika sang anak tidak mendapatkan pemenuhan gizi yang cukup selama masa pertumbuhannya, dalam kata lain bahwa stunting membutuhkan waktu yang cukup lama. <br>
              Masalah gizi pada balita atau bayi yang baru berusia 3 bulan telah berisiko mengalami stunting lebih tinggi hingga anak telah berusia 3 tahun.
              Agar anak tidak mengalami kurang gizi maka orang tua harus berusaha keras untuk memenuhi nutrisi yang seimbang. Masa pertumbuhan anak sangat bergantung kepada apa yang ia makan.
              Lebih baik mencegah daripada mengobati, oleh sebab itu berikanlah makanan kepada anak yang mempunyai gizi seimbang, yaitu:

            <ol style="text-align: justify;">
              <li>
                Kebutuhan bayi dan balita per harinya adalah 550 – 1400 kkal dengan karbohidrat sebanyak 59 – 220 gr. Makanan yang mempunyai sumber kabohidrat, yaitu kentang, roti, nasi dan sagu dll dengan porsi sebanyak 35% dari ukuran 1 piring anak.
              </li>
              <li>
                Kebutuhan protein bayi dan balita per harinya adalah 9 – 25 gr. Makanan yang mempunyai sumber protein, yaitu daging, telur, ikan dll dengan porsi sebanyak 15% dari ukuran 1 piring anak.
              </li>
              <li>
                Buah dan sayur juga penting untuk menunjang pertumbuhan sang anak. Kebutuhan serat bayi dan balita per harinya adalah 0 – 20 gr. Memberikan buah dan sayur dalam setiap menu makanan seperti bayam, wortel, kangkung, pisang, papaya dan jeruk dengan prosi 25% dari 1 piring anak
              </li>
              <li>
                Memberikan asupan vitamin dari susu dan produk turunannya.
              </li>
            </ol>
            </p>
          </div>
        </div>
      </div>

    <?php endif; ?>

    <?php if ($_GET['result'] == 'Pendek') : ?>
      <div class="row">
        <div class="col-lg-12 col-12">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner" style="text-align: center;">

              <h1>Pendek</h1>
              <!-- <h1><?php echo $berat_badan; ?></h1> -->
            </div>

          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($_GET['result'] == 'Normal') : ?>
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
    <?php endif; ?>

    <?php if ($_GET['result'] == 'Tinggi') : ?>
      <div class="row">
        <div class="col-lg-12 col-12">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner" style="text-align: center;">

              <h1>Tinggi</h1>
              <!-- <h1><?php echo $berat_badan; ?></h1> -->
            </div>

          </div>
        </div>
      </div>
    <?php endif; ?>

  <?php endif; ?>



</div>