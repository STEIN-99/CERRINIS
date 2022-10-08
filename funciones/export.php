<?php
include '../funciones/BaseDatos.php';

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

$usua = "SELECT o.NO_ORDEN, t.NOMBRE, e.NOMBRE, o.TIEMPO, o.CONCEPTO, o.MONTO 
FROM ordenes as o, tpago as t, entrega as e
WHERE o.PAGO=t.PAGO AND o.ENTREGA=e.ENTREGA AND TIEMPO BETWEEN '$fecha1' AND '$fecha2'
Order by NO_ORDEN desc";

 ?>
<table id="table">
                    <thead>
    <thead class="thead">
      <tr>
        <th scope="col">No_Orden</th>
        <th scope="col">Tipo Pago</th>
        <th scope="col">Tipo Entrega</th>
        <th scope="col">Tiempo</th>
        <th scope="col">Concepto</th>
        <th scope="col">Monto</th>
      </tr>
    </thead>
    <tbody>
    <?php
                $sucur= mysqli_query($con, $usua);

                while($varia1=mysqli_fetch_array($sucur)){
                ?>
  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>
  <td> <?php echo $varia1[2]?> </td>
  <td> <?php echo $varia1[3]?> </td>
  <td> <?php echo $varia1[4]?> </td>
  <td> <?php echo $varia1[5]?> </td>


  <?php } ?>
    </tbody>
                </table>
                <script src="../js/table2excel.js"></script>
    <script>
              var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("table"));
        location.href = '../admin.php';
    </script>