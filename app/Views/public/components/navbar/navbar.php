<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/') ?>">App</a>

    <!-- Back Button -->
    <div id="backButton">
      <a class="btn btn-outline-danger" href="<?php echo base_url('/') ?>">Regresar</a>
    </div>
    <!-- END Back Button -->


    <!-- Login Button -->
    <div id="loginButton">
      <a class="btn btn-outline-success" href="<?php echo base_url('/login') ?>">Login</a>
    </div>
    <!-- END Login Button -->


  </div>
</nav>

<script>
  const backButton = document.getElementById('backButton');
  const loginButton = document.getElementById('loginButton');
  const url = window.location.href;

  if( url.includes('login') ) {
    loginButton.remove();
  } else {
    backButton.remove();
  }
</script>
