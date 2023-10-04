<form action="<?php echo base_url('/login') ?>" method = "POST">


  <!-- Email -->
  <div class="mb-3">
    <label for="user" class="form-label">Correo</label>
    <input type="text" class="form-control" aria-describedby="emailHelp"  name="user">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <!-- End Email -->


  <!-- Password -->
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <!-- End Password -->


  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</form>
