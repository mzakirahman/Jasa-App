<!-- CONTENT START -->

<!-- SCRIPT MITRANS -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-zNogHI4yBCDTjR0x"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- AKHIR SCRIPT MITRANS -->
<div class="col-lg-9 col-md-7">
  <!-- FORM BAWAAN DARI MITRANS YANG BERTYPE HIDDEN -->
  <form id="payment-form" method="post" action="<?= site_url() ?>/jasa/finish">
    <input type="hidden" name="result_type" id="result-type" value="">
    <input type="hidden" name="result_data" id="result-data" value="">
    <!-- GET DARI API -->
    <input type="hidden" name="harga" id="harga" value="<?= $jasa['harga']; ?>">
    <input type="hidden" name="nama" id="nama" value="<?= $jasa['nama']; ?>">
  </form>

  <p><a href="#" class="text-dark">jasa elektronik > </a><a href="#" class="text-primary">Detail Jasa</a>
  <div class="row row-cols-2">
    <div class="col">
      <img class="img-fluid" width="100%" height="80%" src="<?= base_url('assets/picture/') . $jasa['foto']; ?>">
    </div>
    <div class="col">
      <h3><b><?= $jasa['juduljasa']; ?></b></h3>
      <h5 class="mt-3"> Rp. <?= $jasa['harga']; ?></h5>
      <h5 class="mt-3"> <?= $jasa['nama']; ?></h5>
      <h5 class="mt-3"> <i class="fa fa-whatsapp" aria-hidden="true"></i> <?= $jasa['no']; ?></h5>
      <h5 class="mt-3"> <i class="fa fa-thumb-tack" aria-hidden="true"></i> <?= $jasa['alamat']; ?></h5>
      <p class="text-secondary"><?= $jasa['deskripsi']; ?></p>
      
      <button id="pay-button" class="site-btn mt-3">Pesan Jasa</button>
      <!-- SCRIPT MITRANS -->
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
      <!-- AKHIR SCRIPT MITRANS -->
    </div>
  </div>
  <!-- Product Details Section End -->


</div>
<!-- CONTENT END -->
</div>
</div>
</section>

<!-- Product Section End -->