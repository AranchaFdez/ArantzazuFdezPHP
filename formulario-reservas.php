<?php

include "./temple/nav.html";

?>
<h2 class="title">Realiza tu reserva</h2>


<form action="reservas-realizadas.php" method="post" class="shadow p-3 mb-5 bg-white rounded">

  <div class="row mb-2">
    <div class="col-sm-10 col-md-6  ">
        <label for="nombre" class="label"><i class="bi bi-person-circle "></i> Coordinador </label>
        <input type="text" class="form-control" id="nombre" name="nombre" autofocus required  placeholder="Nombre de la reserva">
      </div> 
    <div class="col-sm-10 col-md-6 ">
      <label for="fecha"  class="label"><i class="bi bi-calendar-date-fill"></i> Seleccione la fecha y hora</label>
        <input type="datetime-local" class="form-control" id="fecha" name="fecha" required placeholder="Fecha de la reserva">
      </div> 
  </div>
  
  <div class="row mb-2">
    <div class="col-sm-10 col-md-3  ">
        <label for="numPersona"  class="label" > <i class="bi bi-people-fill"></i> Nº personas</label>  
        <input type="number" class="form-control" id="numPersona"  name="numPersona" required placeholder="Nº de comensales" min="1" max="20" default="1">
    </div> 
    <div class="col-sm-10 col-md-5 ">
      <label for="mail"  class="label" > <i class="bi bi-envelope-fill"></i>Email de contacto</label>  
      <input type="email" class="form-control" id="mail"  name="mail" required placeholder="Correo electrónico" >
   
    </div> 
    <div class="col-sm-10 col-md-4 ">
      <label for="telf"  class="label"> <i class="bi bi-telephone-fill"></i>Teléfono de contacto</label>  
      <input type="text" class="form-control" id="telf"  name="telf" required placeholder="Teléfono">
    </div> 
  </div>

  <div class="form">
    <label for="obs"  class="label" ><i class="bi bi-chat-square-text"></i>Observaciones</label>  
    <textarea class="form-control" placeholder="Escriba aqui su mensaje" id="obs" style="height: 200px"  name="observaciones"></textarea>
  </div>
  <div class="boton">
      <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>


<?php


include "./temple/footer.html";
?>