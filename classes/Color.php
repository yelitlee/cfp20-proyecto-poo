<?php
    class Color {
        protected $id;
        protected $nombre;
     

        //devolver el listado completo de series

    public function lista_completa(): array
    {
        $resultado = [];

        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM colores";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetchAll();

        return $resultado;
    }

         // devuelve los datos de los colores en particular 
         public function get_x_id(int $id) {
            
               
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM colores WHERE id = $id";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute();

            $resultado = $PDOStatment->fetch();

            if(!$resultado){
                return null;
            }

            return $resultado;
        }

        

       

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }
    }




?>