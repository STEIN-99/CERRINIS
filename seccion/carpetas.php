<?php
include '../funciones/BaseDatos.php';
 ?>

 
 <!-- CONTEIDO E-->
 <div class="contenedor-form">
                <ul class="tabs-links">
                    <li class="tab-link active">Pago, Entrega</li>
                </ul>

            <div class="documentos active">
            <div class="main-container">
                <table>
                    <thead>
    <thead class="thead">
      <tr>
        <th scope="col">Id del usuario</th>
        <th scope="col">Nombre</th>
        
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
                $sucur= mysqli_query($con,
                "SELECT ENTREGA, NOMBRE
                FROM entrega 
                Order by ENTREGA desc");

                while($varia1=mysqli_fetch_array($sucur)){
                ?>

  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>



  <td class="text-center">
  <button class="btnazul" onclick="eliminarProducto(<?php echo $varia1['ENTREGA']?>)">Editar</button>
  </td>

  <td class="text-center">
  <button class="btnrojo" onclick="eliminarUser(<?php echo $varia1['ENTREGA']?>)">Eliminar</button>
  </td>
      </tr>
      <?php } ?>
    </tbody>
                </table>

                <br>
                <button onclick=" modalRusuario();" class="btnverde" >Agregar</button>
                <br>
                <br>


    <table>
                    <thead>
    <thead class="thead">
      <tr>
        <th scope="col">Id del usuario</th>
        <th scope="col">Nombre</th>
        
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
                $sucur= mysqli_query($con,
                "SELECT PAGO, NOMBRE
                FROM tpago
                Order by PAGO desc");

                while($varia1=mysqli_fetch_array($sucur)){
                ?>

  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>


  <td class="text-center">
  <button class="btnazul" onclick="eliminarProducto(<?php echo $varia1['PAGO']?>)">Editar</button>
  </td>

  <td class="text-center">
  <button class="btnrojo" onclick="eliminarUser(<?php echo $varia1['PAGO']?>)">Eliminar</button>
  </td>
      </tr>
      <?php } ?>
    </tbody>
                </table>
                <button onclick=" modalRusuario();" class="btnverde" >Agregar</button>
                <br>
                <br>

            </div>
            </div>
            

            </div>
