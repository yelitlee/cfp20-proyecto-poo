<?php

    class Producto {
        //atributos
        protected $id;
        protected $nombre;
        protected $titulo;
        protected $descripcion;
        protected $stock;
        protected $precio;
        protected $imagen;
        protected $id_catalogo;
        protected $id_colores;
        


        /* metodo para insertar un nuevo producto en la BD */

        public function insert( $nombre, $titulo, $descripcion, $stock, $precio, $imagen, $id_catalogo, $id_colores )
        {

       $conexion = (new Conexion())->getConexion();

       $query = "INSERT INTO productos VALUES(null, :nombre,:titulo,:descripcion,:stock,:precio,:imagen,:id_catalogo,:id_colores,)";

       $PDOStatment = $conexion->prepare($query);

       $PDOStatment->execute(
           [
               'nombre' => $nombre,
               'titulo' => $titulo,
               'descripcion' => $descripcion,
               'stock' => $stock,
               'precio' => $precio,
               'imagen' => $imagen,
               'id_catalogo' => $id_catalogo,
               'id_colores' => $id_colores,
              
         ]
       );
   }

   /* editar un producto */


   
   public function edit($nombre, $titulo, $descripcion, $stock, $precio, $imagen, $id_catalogo, $id_colores,$id)
   {

  $conexion = (new Conexion())->getConexion();

  $query = "UPDATE productos SET 
     

     nombre = :nombre,
     titulo = :titulo,
     descripcion = :descripcion,
     stock = :stock,
     precio = :precio,
     imagen = :imagen,
     id_catalogo = :id_catalogo,
     id_colores = :id_colores
      WHERE id = :id
      ";

  $PDOStatment = $conexion->prepare($query);

  $PDOStatment->execute(
      [
          'id' => $id,
          'nombre' => $nombre,
          'titulo' => $titulo,
          'descripcion' => $descripcion,
          'stock' => $stock,
          'precio' => $precio,
          'imagen' => $imagen,
          'id_catalogo' => $id_catalogo,
          'id_colores' => $id_colores,
         
    ]
  );
}




  /* Metodo Reemplazar Imagen */

  public function reemplazar_imagen($imagen, $id)
  {

      $conexion = (new Conexion())->getConexion();

      $query = "UPDATE productos SET imagen = :imagen WHERE id = :id";

      $PDOStatment = $conexion->prepare($query);

      $PDOStatment->execute(
          [
              'id' => $id,
              'imagen' => $imagen
              
          ]
      );
  }

  /* Borrar Imagen  */

  public function delete() {
      $conexion = (new Conexion())->getConexion();

      $query = "DELETE FROM productos WHERE id  = ?";

      $PDOStatment = $conexion->prepare($query);

      $PDOStatment->execute([$this->id]);
  }

  






        //Metodos
        // Devuelve el catologo Completo
        public function catalogo_completo(): array {
               $catalogo= [];
               
              $conexion = (new Conexion())->getConexion();

              $query = "SELECT * FROM productos";

              $PDOStatment = $conexion->prepare($query);

              $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
              $PDOStatment->execute();

              $catalogo = $PDOStatment->fetchAll();

              return $catalogo;

         }

       // Devuelve el catalogo de productos de un personaje en particular 
       public function catalogo_x_catalogo(int $id_catalogo) {
            $catalogo= [];
                
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM productos WHERE id_catalogo = $id_catalogo";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute();

            $catalogo = $PDOStatment->fetchAll();

            return $catalogo;  
       }

       /* devolver es un producto en particular */

       /* marcador de posiciones , los marcadores de posiciones nos evitan vulnerabilidades como la inyeccion de SQL */

       public function producto_x_id(int $idProducto){

            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM productos WHERE id = :idProducto";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute(
                [
                    'idProducto' => $idProducto
                ]
            );

            $resultado = $PDOStatment->fetch();

            if(!$resultado){
                return null;
            }

            return $resultado;


       }
       




       //Traer los nombres de cada clase sin usar JOIN (utilizar los metodos)

       public function getCatalogo(){
          $catalogo = (new Catalogo())->get_x_id($this->id_catalogo);
          $nombre = $catalogo->getNombre();
          return $nombre;
        }

        public function getColor(){
          $color= (new Color())->get_x_id($this->id_colores);
          $nombre = $color->getNombre_completo();
          return $nombre;
        }

          public function nombre_completo(){
            return $this->getCatalogo();
          }
          

       
    }


?>