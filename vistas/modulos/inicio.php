<div class="content-wrapper">

  <section class="content-header">


   

 
    <h1>
      
      
      
      <small><h1></h1></small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>

    </div> 

     <div class="row">
       
        <div class="col-lg-12">

         

        </div>

        <div class="col-lg-6">

         

        </div>

         <div class="col-lg-12">

          <?php

          if($_SESSION["perfil"] =="Administrador"){
          
           include "inicio/productos-recientes.php";

         }

          ?>

        </div>

         <div class="col-lg-20">
           
          <?php

          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

             echo
            '<div class="box box-success">
             <div class="box-header">
             <p class="login-box-msg1" > <h1>BIENVENIDO , para nosotros es muy importante que trabajes en nuestra empresa</h1></p>

             <strongh>'. $_SESSION["nombre"].'</strongh>

             </div>

             </div>';

          }

          ?>
 
         </div>

         <img src="vistas/img/plantilla/14.png" class="img-responsive" style="padding:30px 380px ">
