<?php
include_once 'controladores/cards_mostrar.php';

$item = new Cards(4);
?>

<body>
<div class="row row-cols-4 row-cols-md-1" id="container">

  <?php
  echo $item->mostrarTotalResultados() . " resultados totales <br/>";
  ?>

  <div id="paginas">
    <?php
    $item->mostrarPaginas();
    ?>
  </div>

  <main class="cards-container">
      <?php
      $item->mostrarProductos();
      ?>
  </main>
</div>

</body>