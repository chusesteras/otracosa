<?php require("general/session.php");?>
<?php require_once("general/funciones.php"); ?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="utf-8">
        <title>Ejemplo de Ajax con jQuery, PHP y JSON</title>
        <script src="js/jquery.js"></script>
        <script src="ejemplo_ajax_json_4/script.js"></script>
    </head>
    <body>
	<?php include("general/header.php"); ?>
  
  <table id="estructura">
    <tr>
      <td id="pagina">
      
      <p><select id="categorias">
        <option value="NULL">TODAS</option>
      </select></p>

        <div id="respuesta"></div>
     </td>
    </tr>
  </table>
  
<?php require_once("general/footer.php"); ?>
</body>
</html>
