  <?php $this->load->view("side/head"); ?>
<?php $this->load->view("side/sidebar"); ?>
  <div id="wrapper">
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2 style="font-size: 25px">Kalendar Kegiatan</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="<?php echo base_url() ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="<?php echo base_url("Kalendar_kegiatan") ?>">Kalendar Kaegiatan</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h4>Kegiatan Badan Eksekutif Mahasiswa Selama 1 Periode</h4>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal Pelaksanaan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<?php $this->load->view("side/footer"); ?>
<?php $this->load->view("side/js"); ?>