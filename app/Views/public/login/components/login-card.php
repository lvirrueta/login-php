<div class="card">
  <div class="card-body">
    <!-- Form -->
    <form action="<?php echo base_url('/login') ?>" method = "POST">


      <!-- Email -->
      <div class="mb-3">
        <label for="user" class="form-label">Usuario</label>
        <input type="text" class="form-control" aria-describedby="emailHelp"  name="user" required>
      </div>
      <!-- End Email -->


      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="inputPassword" name="password" required>
      </div>
      <!-- End Password -->


      <!-- Toggle -->
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" onclick="togglePassword()">
        <label class="form-check-label">Mostrar Contraseña</label>
      </div>
      <!-- END Toggle -->


      <!-- Button -->
      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
      </div>
      <!-- END Button -->


    </form>
    <!-- End Form -->
    
  </div>
</div>

<script>
  const togglePassword = () => {
    const inputPassword = document.getElementById('inputPassword');
    inputPassword.type = inputPassword.type === 'password' ? 'text' : 'password';
  }
</script>
