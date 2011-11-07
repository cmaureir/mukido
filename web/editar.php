<?php require_once("header.php"); ?>
    <div id="content">

       <div class="wrapper">
      <?php require_once("sidebar.php"); ?>
         <div class="mainContent">
            <div class="breadCrumbHolder module"><div id="breadCrumb0" class="breadCrumb module">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="editar.php">Editar</a></li>
                    </ul>
            </div></div>
              <h2>Editar</h2>
               <div class="line-hor"></div>
               <?php
               if (!isset($_SESSION['username'])) {
                  echo"
                  <SCRIPT LANGUAGE=\"javascript\">location.href = \"login.php\";</SCRIPT>";
               }
               else{?>
               <p align="center">
               <a class="button blue" href="editar_club.php">Club</a>
               <a class="button blue" href="editar_couta.php">Cuota</a>
               <a class="button blue" href="editar_alumno.php">Alumno</a>
               <br/>
               <br/>
               <br/>
               <a class="button blue" href="editar_examen.php">Examen</a>
               <a class="button blue" href="editar_campeonato.php">Campeonato</a>
               <a class="button blue" href="editar_actividad.php">Actividad</a>
               <br/>
               <br/>
               <br/>
               <a class="button blue" href="editar_administrador.php">Administrador</a>
               </p>
               <?php }?>
         </div>

      </div>
    </div>
<?php require_once("footer.php"); ?>
