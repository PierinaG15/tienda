<?php
if(! iseet($_GET["id"])){
    header("Location: proveedores");
    exit(); 
}
include("partials/cabecera.php");

?>
<section>

</section>
<?php
include("partials/footer.php");
?>