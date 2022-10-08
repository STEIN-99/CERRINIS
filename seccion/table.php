<?php
include '../funciones/BaseDatos.php';
 ?>
 
 <!-- CONTEIDO E-->
        <div class="contenedor-form">
                <ul class="tabs-links">
                    <li class="tab-link active">Registros</li>
                </ul>

            <div class="documentos active">
            <div class="main-container">
                <table>
                    <thead>
    <thead class="thead">
      <tr>
        <th scope="col">No_Orden</th>
        <th scope="col">Tipo Pago</th>
        <th scope="col">Tipo Entrega</th>
        <th scope="col">Tiempo</th>
        <th scope="col">Concepto</th>
        <th scope="col">Monto</th>
        

        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
                $sucur= mysqli_query($con,
                "SELECT o.NO_ORDEN, t.NOMBRE, e.NOMBRE, o.TIEMPO, o.CONCEPTO, o.MONTO 
                FROM ordenes as o, tpago as t, entrega as e
                WHERE o.PAGO=t.PAGO AND o.ENTREGA=e.ENTREGA
                Order by NO_ORDEN desc");

                while($varia1=mysqli_fetch_array($sucur)){
                ?>

  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>
  <td> <?php echo $varia1[2]?> </td>
  <td> <?php echo $varia1[3]?> </td>
  <td> <?php echo $varia1[4]?> </td>
  <td> $<?php echo $varia1[5]?> </td>



  <td class="text-center">
  <button class="btnrojo" onclick="eliminarOrden(<?php echo $varia1['NO_ORDEN']?>)">Eliminar</button>
  </td>
      </tr>
      <?php } ?>
    </tbody>
                </table>

                <br>
                <button class="btnverde" onclick="modalROrden();">Agregar</button>
                <br>
                <br>
    <form method="post" class="form" action="funciones/export.php">
		<input type="date" name="fecha1">
		<input type="date" name="fecha2">
    <button class="btn" type="submit" name="generar_reporte">Importar</button>
		</form>

                <br>



            </div>
            </div>
            

            </div>
        <!-- CONTEIDO E--> 