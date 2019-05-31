<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Destino Turisticos</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>

<body>

 <!--                             Modals Contactos                                       -->

<div class="modal" id="ModalModificarMsjCont">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modificar Mensaje Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
        <label for="comment">Mensaje:</label>

        <div class="form-group">
               
               <div>
                   <textarea class="form-control" rows="2" id="comment" placeholder="Puede Contactarnos en los siguientes numeros,correos u oficinas"></textarea>
                </div>

        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Cambiar Mensaje</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalNuevoContacto">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Nuevo Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
        <label for="comment">Seleccione el tipo de Contacto</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico</option>
  <option value="Lugar">Dirección Oficina</option>
  <option value="Telefono">Numero Telefonico</option>
</select>
        </div>

        <label for="comment">Ingrese el valor</label>
        <div class="form-group">
          <div>
                   <textarea class="form-control" rows="2" id="comment" placeholder=""></textarea>
                </div>

        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Nuevo Contacto</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="ModalEliminarContacto">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <label for="comment">Seleccione el Contacto que desea eliminar</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico, bermudez@hotmail.com</option>
  <option value="Lugar">Dirección Oficina, De la Iglesia San Bosco 200 mts Sur</option>
  <option value="Telefono">Numero Telefonico, 75059802</option>
     </select>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Eliminar Contacto</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  <div class="modal" id="ModalModificarContacto">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modificar Contacto</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

        <label for="comment">Seleccione el Contacto que desea Modificar</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico, bermudez@hotmail.com</option>
  <option value="Lugar">Dirección Oficina, De la Iglesia San Bosco 200 mts Sur</option>
  <option value="Telefono">Numero Telefonico, 75059802</option>
     </select>
</div>

        <label for="comment">Seleccione el tipo de Contacto</label>
        <div class="form-group">
        <select class="browser-default custom-select">
  <option value="email">Correo Electronico</option>
  <option value="Lugar">Dirección Oficina</option>
  <option value="Telefono">Numero Telefonico</option>
</select>
        </div>

        <label for="comment">Ingrese el valor</label>
        <div class="form-group">
          <div>
                   <textarea class="form-control" rows="2" id="comment" placeholder=""></textarea>
                </div>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Modificar Contacto</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>

</html>