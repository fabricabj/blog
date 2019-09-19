<?php

  $destinatario='colavella22@gmail.com';
  $nombre=$_POST['nombre'];
  $mail=$_POST['mail'];
  $mensaje=$_POST['mensaje'];
  $header="enviado desde la pagina de fabri";
  $mensajeCompleto=$mensaje."\n Atentamente".$nombre;

  @mail($destinatario,$nombre,$mail,$mensaje,$header);
  echo "<script>alert('mail enviado')</script>";
?>