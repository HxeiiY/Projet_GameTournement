<?php
include('../includeUser.php');
?>
  <head>
    <!-- Mon CSS -->
    <link href="../../TOOLS/CSS/PageStyle.css" rel="stylesheet">
  </head>

  <body id="page-top">

      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Barre Horizontale II -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <span>Bienvenue : <?php 
              if(isset($_SESSION['Pseudo'])){
                echo $_SESSION['Pseudo']; 
              }
              ?> </span>
            </li>
          </ol>

          <!-- LE CODE COMMENCE ICI -->

          
    </div>


  </div></div></body>

</html>
