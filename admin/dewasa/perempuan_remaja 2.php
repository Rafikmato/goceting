
 

     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Status Gizi Remaja Perempuan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?module=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Remaja</li>
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
              <a href="?module=laki_remaja" class="small-box-footer">Pilih <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="?module=perempuan_remaja" class="small-box-footer">Pilih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    </div>
  </div>


<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Status Gizi Remaja Perempuan</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <form action="/goceting/function/remaja_calculation.php" method="POST">
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <input type="text" value="Perempuan" readonly="" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
        </div>


        <div class="form-group">
          <label for="umur">Umur</label>
          <select id="umur" required="" class="form-control custom-select" name="umur">
            <option selected disabled value="">-- Pilih Umur --</option>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM wanita_remaja_2");
            while ($d = mysqli_fetch_array($query)) {

            ?>
              <option value="<?= $d['tahun'] ?>,<?= $d['bulan'] ?>"><?= $d['tahun'] ?> Tahun, <?= $d['bulan'] ?> Bulan </option>
            <?php
            }

            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="jenis_kelamin">Tinggi Badan</label>
          <input type="text" placeholder="cth : 1.55" required="" name="tinggi" id="tinggi" class="form-control">
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Berat Badan</label>
          <input type="text" placeholder="cth : 50" required="" name="bb" id="bb" class="form-control">
        </div>


        <!-- <div class="form-group">
          <label for="berat_badan">Indeks Massa Tubuh (IMT)</label>
          <input type="text" readonly="" value="<?php echo round($hasil, 1); ?>" name="imt" id="imt" class="form-control">
        </div> -->
        <div class="row">
          <div class="col-12">
            <input type="reset" value="Reset" class="btn btn-secondary">
            <input type="submit" value="Hitung Status Gizi Remaja" class="btn btn-success float-right">
          </div>
        </div>
    </div>
    <!-- /.card-body -->
    </form>


  </div>
  <!-- /.card -->


  <?php if (isset($_GET['result'])) : ?>
    <div class="hsl">

      <?php if ($_GET['result'] == 'Kurang') : ?>
        <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="text-align: center;">

                <h1>Kurang Gizi</h1>
                <!-- <h1><?php echo $imt; ?></h1> -->
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
                <!-- <h1><?php echo $imt; ?></h1> -->
              </div>

            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($_GET['result'] == 'Lebih') : ?>
        <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="text-align: center;">

                <h1>Berat Badan Lebih</h1>
                <!-- <h1><?php echo $imt; ?></h1> -->
              </div>

            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($_GET['result'] == 'Obesitas') : ?>
        <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner" style="text-align: center;">

                <h1>Obesitas</h1>
                <!-- <h1><?php echo $imt; ?></h1> -->
              </div>

            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
  <?php endif; ?>
</div>