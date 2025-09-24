<!DOCTYPE html>
<html lang="es">
<?php
$servername = "localhost";
$username = "u826340212_landingcwo"; // Cambia esto si es necesario
$password = "Cwo9982061148"; // Cambia esto si es necesario
$dbname = "u826340212_landingcwo"; // Cambia esto por el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);


    


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Fechas</title>
<style>
body
{
   background-color: #000000;
   color: #ffffff;
   font-family: "Open Sans";
   font-weight: Normal;
   font-size: 13px;
   line-height: 1.1875;
   margin: 0;
   padding: 0;
}
label
{
    color:#14fff9;
    font-weight: bold;
    font-size:20px;
    
}
input
{
    background-color: #ffffff;
    color:blue;
    font-weight: normal;
    font-size:20px;
    text-align:center;
    
    
}
textarea
{
    background-color: #ffffff;
    color:blue;
    font-weight: normal;
    font-size:20px;
}

/* Responsive improvements for the admin form */
@media (max-width: 767.98px) {
    body {
        padding: 10px !important;
    }
    
    h1 {
        font-size: 20px !important;
        text-align: center !important;
        margin: 10px 0 !important;
    }
    
    label {
        font-size: 16px !important;
        display: block !important;
        margin: 10px 0 5px 0 !important;
    }
    
    input, textarea {
        width: 100% !important;
        max-width: 100% !important;
        font-size: 16px !important;
        padding: 10px !important;
        border-radius: 5px !important;
        border: 1px solid #ccc !important;
        box-sizing: border-box !important;
        margin: 5px 0 !important;
    }
    
    input[type="submit"] {
        background-color: #14fff9 !important;
        color: #000 !important;
        font-weight: bold !important;
        padding: 12px 20px !important;
        border-radius: 10px !important;
        cursor: pointer !important;
        font-size: 16px !important;
        margin: 20px 0 !important;
    }
    
    textarea {
        min-height: 80px !important;
        resize: vertical !important;
    }
    
    center {
        text-align: center !important;
        padding: 0 10px !important;
    }
    
    div[style*="font-size"] {
        font-size: 18px !important;
        margin: 15px 0 !important;
    }
}

@media (max-width: 575.98px) {
    h1 {
        font-size: 18px !important;
    }
    
    input, textarea, label {
        font-size: 14px !important;
    }
    
    div[style*="font-size"] {
        font-size: 16px !important;
    }
}

</style>
</head>

<body>
    <center><h1>Datos de la Pagina Landing de Franquicias</h1></center>
    <form action="guardar_fechas.php" method="POST">
        <center>
            <div style="font-size:25px;color:green;font-weight:bold">Vendedores</div>
            <br>
            <?php        
                $result=mysqli_query($conn,"SELECT * FROM users");
                while($ver=mysqli_fetch_row($result)){
                    $id=$ver[0];
                    $clave=$ver['1'];
                    $nombre=$ver['2'];
                    $telefono=$ver['3'];
                    if ($id==1){
                        $timer=$ver['4'];
                    }
            ?>
            <center>
            <input type="number" name="id" id="id" value="<?php echo $id?>" required style="display:none">
            
            <label for="clave">Clave:</label>
            <input type="tex" name="clave[]" id="clave" value="<?php echo $clave?>" required disabled>
            <br><br>
            
            <label for="nombre">Nombre:</label><br>
            <textarea type="text" name="nombre[]" id="nombre" cols="25" rows="2" required disabled><?php echo $nombre?></textarea>
            <br><br>
            
            <label for="telefono">Telefono:</label>
            <input type="tex" name="telefono[]" id="telefono" value="<?php echo $telefono?>" required disabled>
            <br><br>
            <div>_____________________________________________________________________________________</div>
            <?php }?>
            <label for="timer">Tiempo de la promoción:</label>
            <input type="date" name="timer" id="timer" value="<?php echo $timer?>" required >
            <br><br>
            
        </center>
        
        <center><input style="background-color:red;color:#67ff6c" type="submit" value="Guardar Datos"></center>
    </form>
</body>

</html>
