<?php
$index = "./index.php";

?>

<div class="container mx-auto">
<div class="bg-white">
  <a href="./addmenu.php" class="w-25 bg-indigo-700 rounded-lg px-3 py-1.5 text-base font-semibold text-white hover:bg-indigo-600">Agregar</a>
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 flex">
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <?php 
          include("./auth/dbcon.php");
          $query = "SELECT * FROM menus";
          $result = mysqli_query($conexion, $query);
          while ($row = mysqli_fetch_array($result)) {?>
          <a href="#" class="">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-50 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://explorelompoc.com/wp-content/uploads/2021/06/food_placeholder.jpg" alt="Tall slender porcelain bottle with natural clay textured body and 
          cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
            <form  method="get" action="menu.php?id=<?=$row['idmenus'] ?>">
              <h3 class="mt-4 text-sm text-gray-700"><?= $row['menu']; ?></h3>
              <p class="mt-1 text-lg font-medium text-gray-900"><?= $row['precio']; ?></p>
            </form>  
          </div>
        </a>
        <?php }
        ?>
    </div>
  </div>
</div>
</div>
