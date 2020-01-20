  
<?php get_header( 'test' ) //template name: Solicitud de Socio ?>



<div class="contenedor pagina seccion no-sidebar">
  <div class="contenido-principal">

      <form action="#" method="post">
        <div class="form-group">
        <label>Name socios</label>
          <input type="text"  name="nombre" class="form-control" id="tag" placeholder="nombre" required ><br>
          <!-- <textarea  type="text"  name="msn" class="form-control" required></textarea><br> -->
          <label>Docuemnto</label>
          <select class="form-control" name="docs">
            <option selected="selected" disabled>Selected</option>
            <option value="dni">Dni</option>
            <option value="nie">Nie</option>
            <option value="passport">Passport</option>
          </select>
          <br>
          <label>Texto</label>
          <textarea  type="text"  name="descripcion" class="form-control" required></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Save">
        <br><br>
      </form>


      <?php
          // cargar hostales
          error_reporting(0);
          global $wpdb;
          $registros = $wpdb->get_results($wpdb->prepare("INSERT INTO wp_socios (nombre, docs, descripcion) VALUES ('$_POST[nombre]','$_POST[docs]','$_POST[descripcion]')"));




          global $wpdb;
          $registros3 = $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_socios"));
          foreach ( $registros3 as $i => $page ){
            echo $page->nombre;
            echo "<br>";
            echo $page->docs;
            echo "<br>";
            echo $page->descripcion;
            echo "<br> <hr>";
           
          }
      ?>
  </div>
</div>

<?php get_footer(); ?>