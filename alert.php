<?php 
include "database.php";

?>
<div class="alert alert-success" id="successAlert" style="display: none;">
    Data berhasil ditambahkan!
  </div>

  <!-- Sertakan Bootstrap JS dan jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Script untuk menampilkan alert -->
  <script>
    function showSuccessAlert() {
      // Tampilkan alert
      $('#successAlert').fadeIn();

      // Sembunyikan alert setelah 3 detik
      setTimeout(function () {
        $('#successAlert').fadeOut();
      }, 3000);
    }
  </script>