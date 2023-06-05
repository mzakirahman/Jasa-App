<!-- CONTENT START -->
<!-- SCRIPT MITRANS -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-zNogHI4yBCDTjR0x"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- AKHIR SCRIPT MITRANS -->
<div class="col-lg-9 col-md-7">
  <!-- FORM BAWAAN DARI MITRANS YANG BERTYPE HIDDEN -->
  <!-- <?= validation_errors(); ?> -->
  <form id="payment-form" method="post" action="<?= site_url() ?>/jasa/finish">
    <input type="hidden" name="result_type" id="result-type" value="">
    <input type="hidden" name="result_data" id="result-data" value="">
    <!-- GET DARI API -->
    <input type="hidden" name="harga" id="harga" value="<?= $jasa['harga']; ?>">
    <input type="hidden" name="nama" id="nama" value="<?= $jasa['nama']; ?>">
    <input type="hidden" name="jasa_id" id="jasa_id" value="<?= $jasa['user_id']; ?>">
  <p><a href="#" class="text-dark">jasa elektronik > </a><a href="#" class="text-primary">Detail Jasa</a>
  <div class="row row-cols-2">
    <div class="col">
      <img class="img-fluid" width="100%" height="80%" src="<?= base_url('assets/picture/') . $jasa['foto']; ?>">
    </div>
    <div class="col">
      <h3><b><?= $jasa['juduljasa']; ?></b></h3>
      <h5 class="mt-3"> Rp. <?= $jasa['harga']; ?></h5>
      <h5 class="mt-3"> <?= $jasa['nama']; ?></h5>
      <a href="#" class="badge badge-success"><i class="fa fa-whatsapp" aria-hidden="true"> <?= $jasa['no']; ?></i></a>
      <h5 class="mt-3"> <i class="fa fa-thumb-tack" aria-hidden="true"></i> <?= $jasa['alamat']; ?></h5>
      <p class="text-secondary"><?= $jasa['deskripsi']; ?></p>
      <!-- <p class="text-secondary">user_id <?= $jasa['user_id']; ?></p> -->

    </div>
  </div>
  <div class="row">
    <div class="col">
        <label for="basic-url">Nama</label>
        <div class="input-group ">
          <input type="text" name="namapemesan" placeholder="Alamat detail" class="form-control" required >
        </div>
        <label for="basic-url">No Handphone</label>
        <div class="input-group ">
          <input type="number" name="nohp" placeholder="Alamat detail" class="form-control" required>
        </div>
    </div>
    <div class="col ">
      <label  for="basic-url">Jenis Kerusakan</label>
      <div class="input-group">
        <input type="text" name="jeniskerusakan" placeholder="Jenis Kerusakan" class="form-control" required>
      </div>
      <label for="basic-url">Alamat</label>
      <div class="input-group ">
        <input type="text" name="alamat" placeholder="Alamat detail" class="form-control" >
      </div>
    </div>
  </div>
  <!-- end form -->
  <button type="submit" id="pay-button" class="site-btn mt-3">Pesan Jasa</button>
</form>

      <!-- AKHIR SCRIPT MITRANS -->
      <script type="text/javascript">
    $('#pay-button').click(function(event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
      // tangkap harga nama 
      var nama = $("#nama").val();
      var harga = $("#harga").val();
      $.ajax({
        type: 'post',
        url: '<?= site_url() ?>/jasa/token',
        data: {
          nama: nama,
          harga: harga
        },
        cache: false,

        success: function(data) {
          //location = data;
          console.log('token = ' + data);
          var resultType = document.getElementById('result-type');
          var resultData = document.getElementById('result-data');
          function changeResult(type, data) {
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
            //resultType.innerHTML = type;
            //resultData.innerHTML = JSON.stringify(data);
          }
          snap.pay(data, {
            onSuccess: function(result) {
              changeResult('success', result);
              console.log(result.status_message);
              console.log(result);
              $("#payment-form").submit();
            },
            onPending: function(result) {
              changeResult('pending', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            },
            onError: function(result) {
              changeResult('error', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            }
          });
        }
      });
    });
  </script>
</div>
<!-- CONTENT END -->
</div>
</div>
</section>

