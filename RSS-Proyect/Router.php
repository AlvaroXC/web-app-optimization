<?php 

    namespace MVC;

    class Router {

        public $rutasGET = [];
        public $rutasPOST = [];

        public function comprobarRutas() {

            // session_start();
            // $auth = $_SESSION['login'] ?? false;

            $rutasProtegidas = [];

            $urlAct = $_SERVER['PATH_INFO'] ?? '/';
            $metodo = $_SERVER['REQUEST_METHOD'];

            if ($metodo === 'GET') {
                $fn = $this->rutasGET[$urlAct] ?? null;
            } else {
                $fn = $this->rutasPOST[$urlAct] ?? null;
            }

            // if(in_array($urlAct, $rutasProtegidas) && !$auth) {
            //     header('Location: /');
            // }

            if ($fn) { 
                call_user_func($fn, $this);
            } else {
                echo "Página no encontrada";
            }
        }

        /**
         * @param $url representa la url de la ruta, $funcion representa el arreglo de las rutas obtenidas por GET
         */
        public function get($url, $funcion) {
            $this->rutasGET[$url] = $funcion;
        }

        /**
         * @param $url representa la url de la ruta, $funcion representa el arreglo de las rutas obtenidas por POST
         */
        public function post($url, $funcion) {
            $this->rutasPOST[$url] = $funcion;
        }

        /**
         * @param $view representa la vista cargada solicitada, $datos representa el arreglo de los datos requeridos
         */
        public function render($view, $datos = []) {

            foreach($datos as $key => $value) {
                $$key = $value;
            }

            ob_start();
            include __DIR__."/views/$view.php";
            $contenido = ob_get_clean();
            include __DIR__ . "/views/Layout.php";

        }
    }

?>