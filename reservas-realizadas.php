<?php
include "./temple/nav.html";
include "./controller/controller-reservas.php";

?>
    <h2 class="title">Registro de reservas</h2>
    <div class="table-responsive">

        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><i class="bi bi-save-fill"></i> <br>Fecha  reserva</th>
                    <th scope="col"><i class="bi bi-person-circle "></i> <br>Nombre</th>
                    <th scope="col"><i class="bi bi-calendar-date-fill"></i><br>Fecha y Hora</th>
                    <th scope="col"><i class="bi bi-people-fill"></i><br>NºPersonas</th>
                    <th scope="col"><i class="bi bi-envelope-fill"></i><br>Email</th>
                    <th scope="col"> <i class="bi bi-telephone-fill"></i><br>Teléfono</th>
                    <th scope="col"><i class="bi bi-chat-square-text"></i><br>Observaciones</th>

                </tr>
            </thead>
            <tbody>
            
                <?php
                    include "registro-reservas.html";
                
                ?>
            </tbody>
        </table>
    </div>
    <a href="formulario-reservas.php"  class="btn btn-primary"> Volver</a>
<?php


include "./temple/footer.html";
?>