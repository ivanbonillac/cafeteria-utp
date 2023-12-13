<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Agrega Pedidos</title>
    <!--Incluimos Header--> 
    <?php include('includes/header.php')?>
</head>
<body>
<div class="container mx-auto w-1/4 py-8">
    <form action="indexlogged.php" method="post">
        <div class="">
            <h1 class="text-base font-semibold leading-7 text-gray-900">Agrega un menu</h1>
            <label for="first-name" class="mt-2 block text-sm font-medium text-gray-900">Nombre del Menu</label>
            <input type="text" name="menuname" id="menuname" class="block mt-2 w-1/2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <input type="text" name="preciomenu" id="preciomenu" class="block mt-2 w-1/2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <input type="submit" value="Añadir" class="mt-2 inline-flex items-center rounded-md bg-blue-800 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
        </div>
    </form>

    <?php
    include("auth/dbcon.php");
        if(isset($_POST['menuname'])){
            $menunombre = $_POST['menuname'];
            $preciocomida = $_POST['preciomenu'];
            
            $query = "INSERT INTO menus(menu,precio) VALUES('$menunombre','$preciocomida')";
            $result = mysqli_query($conexion, $query);
        }
    ?>

</div>

</body>
<footer>
    <?php include('includes/footer.php')?>
</footer>   
</html>