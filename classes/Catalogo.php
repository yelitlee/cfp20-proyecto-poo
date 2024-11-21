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

        $query = "SELECT * FROM catalogos";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetchAll();

        return $resultado;
    }

    // devuelve datos de uno  en particular 
    public function get_x_id(int $id)
    {


        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM catalogos WHERE id = $id";

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

        $query = "INSERT INTO personajes(id,nombre,alias,biografia,creador,primera_aparicion,imagen) 
                     VALUES (NULL,:nombre,:alias,:biografia,:creador, :primera_aparicion,:imagen )";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute(
            [
                'nombre' => $nombre,
            
            ]
        );
    }

    /* metodo para editar un personaje  */

    public function edit($nombre, $id)
    {

        $conexion = (new Conexion())->getConexion();

        $query = "UPDATE personajes SET nombre = :nombre, alias = :alias, biografia = :biografia, creador = :creador, primera_aparicion = :primera_aparicion WHERE id = :id";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute(
            [
                'id' => $id,
                'nombre' => $nombre,
                
            ]
        );
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

