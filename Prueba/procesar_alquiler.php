<?php

// Recuperar los datos del formulario
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$estacion = $_POST['estacion'];
$cantidad = $_POST['cantidad'];

// Validar que los campos no estén vacíos
if (empty($fecha) || empty($hora) || empty($estacion) || empty($cantidad)) {
  $error = "Por favor, completa todos los campos.";
  include('alquiler.php');
  exit();
}

// Validar que la cantidad esté entre 1 y 10
if ($cantidad < 1 || $cantidad > 10) {
  $error = "Por favor, introduce una cantidad entre 1 y 10.";
  include('alquiler.php');
  exit();
}

// Validar que la fecha y hora seleccionadas estén disponibles
// (aquí deberíamos hacer una consulta a una base de datos o API)
$disponible = true;
if (!$disponible) {
  $error = "La fecha y hora seleccionadas no están disponibles. Por favor, selecciona otra fecha u hora.";
  include('alquiler.php');
  exit();
}
// Redirigir al usuario a la página de pago
header('Location: pago.php');
exit();

// Si hay algún error, mostrar el mensaje de error y volver a mostrar el formulario
$error = "Hubo un error al procesar la solicitud. Por favor, inténtalo de nuevo.";
include('alquiler.php');
exit();
