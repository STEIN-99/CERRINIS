<?php
include '../funciones/BaseDatos.php';
 ?>

 
 <!-- CONTEIDO E-->
 <div class="contenedor-form">
                <ul class="tabs-links">
                    <li class="tab-link active">Usuarios y contraseñas</li>
                </ul>

            <div class="documentos active">
            <div class="main-container">
                <table>
                    <thead>
    <thead class="thead">
      <tr>
        <th scope="col">Id del usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Tipo</th>
        
        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
                $sucur= mysqli_query($con,
                "SELECT ID_USUA, USUARIO, PASS, TIPO 
                FROM login 
                Order by ID_USUA desc");

                while($varia1=mysqli_fetch_array($sucur)){
                ?>

  <tr>
  <td> <?php echo $varia1[0]?> </td>
  <td> <?php echo $varia1[1]?> </td>
  <td> <?php echo $varia1[2]?> </td>
  <td> <?php echo $varia1[3]?> </td>



  <td class="text-center">
  <button class="btnrojo" onclick="eliminarUser(<?php echo $varia1['ID_USUA']?>)">Eliminar</button>
  </td>
      </tr>
      <?php } ?>
    </tbody>
                </table>

                <br>
                <button onclick=" modalRusuario();" class="btnverde" >Agregar</button>
            </div>
            </div>
            

            </div>
