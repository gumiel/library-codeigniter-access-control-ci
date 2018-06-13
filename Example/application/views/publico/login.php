

    <form action="<?php echo site_url("publico/loginProcess") ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="usuario[cuenta]" value="admin"  placeholder="Usuario">        
      </div>
      <div>
        <input type="password" name="usuario[password]" value="admin" placeholder="Contraseña">        
      </div>
      <div class="row">        
        <!-- /.col -->        
          <button type="submit">Ingresar</button>        
        <!-- /.col -->
      </div>
    </form>

    <br>
    Probar link de pagina privada <a href="<?php echo site_url('usuario/index'); ?>">usuario/index</a><br>
    Probar link de pagina privada <a href="<?php echo site_url('ruta/index'); ?>">ruta/index</a><br>
    Probar link de pagina privada <a href="<?php echo site_url('rol/index'); ?>">rol/index</a><br>
    <br>
    <br>
    Probar link de pagina publicas <a href="<?php echo site_url('publico/inicio'); ?>">publico/inicio</a><br>
    Probar link de pagina publicas <a href="<?php echo site_url('publico/patrocinadores'); ?>">publico/patrocinadores</a><br>   
