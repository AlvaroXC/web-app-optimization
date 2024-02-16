<?php
    require_once ("Connection.php");

    class NoticiaModel{
        private $db;

        private $pages;

        public function __construct(){
            $this->db = Connection::connection();
            $this->pages = ceil(self::getCount() / 5);
        }

        public function getPage($page){
            $noticias = [];
            $offset = ((int)$page -1) * 5;
            $result_query = $this->db->query("SELECT * FROM NOTICIAS LIMIT ". 5 . " OFFSET " . $offset);

            while ($filas=$result_query->fetch(PDO::FETCH_ASSOC)) {
                $noticias[] = $filas;
            }
            return $noticias;
        }

        private function getCount(){
            $result_query = $this->db->query("SELECT COUNT(*) AS total_rows FROM NOTICIAS");
            $row = $result_query->fetch(PDO::FETCH_ASSOC);
            $total_rows = $row["total_rows"];
            return $total_rows;
        }

        public function getPages() {
            return $this->pages;
        }
    }
