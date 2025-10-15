<?php
// VIZUALIZAR COMPONENTES (WEB)
class Controlador {
    public function verPagina($pagina) {
        // Detectar si la vista está en app o web
        if (strpos($pagina, '/app/') !== false) {
            include __DIR__ . '/../Vista/html/includes/header_app.php';
            include $pagina;
        } else {
            include __DIR__ . '/../Vista/html/includes/header_web.php';
            include $pagina;
            include __DIR__ . '/../Vista/html/includes/footer_web.php';
        }
    }
}

// VIZUALIZAR VISTA (WEB)
if (isset($_GET["accion"])) {
    $controlador = new Controlador();

    switch ($_GET["accion"]) {
    case "inicio":
        $controlador->verPagina(__DIR__ . '/../Vista/html/web/index.php');
        break;

    case "catalogo":
        $controlador->verPagina(__DIR__ . '/../Vista/html/web/catalogo.php');
        break;

    case "servicios":
        $controlador->verPagina(__DIR__ . '/../Vista/html/web/servicios.php');
        break;
    
    case "conocenos":
        $controlador->verPagina(__DIR__ . '/../Vista/html/web/conocenos.php');
        break;

    case "contacto":
        $controlador->verPagina(__DIR__ . '/../Vista/html/web/contacto.php');
        break;

    case "cuenta":
        $controlador->verPagina(__DIR__ . '/../Vista/html/web/cuenta.php');
        break;

    case "dashboard":
        $controlador->verPagina(__DIR__ . '/../Vista/html/app/dashboard.php');
        break;

    default:
        echo "Página no encontrada.";
        break;
}
}
?>