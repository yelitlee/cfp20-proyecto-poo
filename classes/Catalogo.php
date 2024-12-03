<?php

class Catalogo
{

    protected $id;
    protected $nombre;
    
    //metodos 
    //devolver el listado completo 

    public function lista_completa(): array
    {
        $resultado = [];

        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM catalogo";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetchAll();

        return $resultado;
    }

    // devuelve datos de uno  en particular 
    public function catalogo_completo(int $id)
    {


        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM catalogo WHERE id = $id";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetch();

        if (!$resultado) {
            return null;
        }

        return $resultado;
    }

    // Devuelve el nombre  

    public function getTitulo($animalito = false)
    {

        if ($animalito) {
            $result = "$this->nombre";
        } else {
            $result = "$this->nombre";
        }

        return $result;
    }


    /* Metodo para insertar nuevo animal */

    public function insert($nombre)
    {

        $conexion = (new Conexion())->getConexion();

        $query = "INSERT INTO catalogo VALUES(null, :nombre)";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute(
            [
                'nombre' => $nombre,
            
            ]
        );
    }

    /* metodo para editar catalogo  */

    public function edit($nombre, $id)
    {

        $conexion = (new Conexion())->getConexion();

        $query = "UPDATE catalogo SET nombre = :nombre WHERE id = :id";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute(
            [
                'id' => $id,
                'nombre' => $nombre,
                
            ]
        );
    }



    
  public function delete() {
    $conexion = (new Conexion())->getConexion();

    $query = "DELETE FROM catalogo WHERE id  = ?";

    $PDOStatment = $conexion->prepare($query);

    $PDOStatment->execute([$this->id]);
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
