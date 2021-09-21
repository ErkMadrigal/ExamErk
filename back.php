<?php 

class database{
    private $host = "b7fyw3exg6zlczdg7qqt-mysql.services.clever-cloud.com";
    private $user = "u9qijvmap9pxl3wd";
    private $password = "bFo8QMiZyITufgkN0fLp";
    private $db = "b7fyw3exg6zlczdg7qqt";

    
    // private $host = "localhost";
    // private $user = "root";
    // private $password = "";
    // private $db = "erkexam";

    public function getConnection(){
        $dbc = new PDO("mysql:host=$this->host;dbname=$this->db;",$this->user,$this->password);
        return $dbc;
    }

}

class consultas{

    public function ListarUsuario(){
        $respuesta = null; 
        try{
            $sql = "SELECT * FROM usuarios";
            $database = new database();
            $db = $database->getConnection();
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $respuesta["estatus"] = "ok";
            $respuesta["mensaje"] = $data;
        }catch(PDOException $e){
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = $e->getMessage();
        }
        return $respuesta;
       
    }

    public function nivel($nivel){
        $respuesta = null; 
        try{
            $sql = "SELECT count(*) as cantidadUsr FROM usuarios WHERE nivel = :nivel";
            $database = new database();
            $db = $database->getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":nivel", $nivel);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $respuesta["estatus"] = "ok";
            $respuesta["mensaje"] = $data;
        }catch(PDOException $e){
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = $e->getMessage();
        }
        return $respuesta;
       
    }

    public function nivelTotal(){
        $respuesta = null; 
        try{
            $sql = "SELECT count(*) as cantidadUsr FROM usuarios";
            $database = new database();
            $db = $database->getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":nivel", $nivel);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $respuesta["estatus"] = "ok";
            $respuesta["mensaje"] = $data;
        }catch(PDOException $e){
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = $e->getMessage();
        }
        return $respuesta;
       
    }

}

class inserciones{

    public function RegistrarUsuario($nombre, $correo, $telefono, $direccion, $ocupacion, $ingreso, $nivel){

        $respuesta = null;

        try{

            $sql = "insert into usuarios (nombre, correo, telefono, direccion, ocupacion, ingreso, nivel)
                                    values(:nombre, :correo, :telefono, :direccion, :ocupacion, :ingreso, :nivel)";
            
            $database = new database();
            $db = $database->getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":correo", $correo);
            $stmt->bindParam(":telefono", $telefono);
            $stmt->bindParam(":direccion", $direccion);
            $stmt->bindParam(":ocupacion", $ocupacion);
            $stmt->bindParam(":ingreso", $ingreso);
            $stmt->bindParam(":nivel", $nivel);
            $stmt->execute();
            $respuesta["estatus"] = "ok";
            $respuesta["mensaje"] = "Se han regitrado correctamente";
        }catch(PDOException $e){
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = $e->getMessage();
        }

        return $respuesta;
    }
}


$inserciones = new inserciones();
$consultas = new consultas();


$respuesta = null;

$opcion=(isset($_POST["opcion"]))?$_POST["opcion"]:'';


switch( $opcion ){
    case "agregarDatos":
      

        $datos = json_decode($_POST['data']);


        for ($i=0; $i < count($datos) ; $i++) { 
            $nombre = $datos[$i]->nombre;
            $correo = $datos[$i]->correo;
            $telefono = $datos[$i]->telefono;
            $direccion = $datos[$i]->direccion;
            $nivel = $datos[$i]->nivel;
            $ocupacion = $datos[$i]->ocupacion;
            $ingreso = $datos[$i]->ingreso;
    
            $respuesta = $inserciones->RegistrarUsuario($nombre, $correo, $telefono, $direccion, $ocupacion, $ingreso, $nivel);
                    
        }

    break;

    case "niveles":
        $respuesta['prim'] = $consultas->nivel(1);
        $respuesta['sec'] = $consultas->nivel(2);
        $respuesta['pre'] = $consultas->nivel(3);
        $respuesta['lic'] = $consultas->nivel(4);
        $respuesta['mae'] = $consultas->nivel(5);
        $respuesta['doc'] = $consultas->nivel(6);
        $respuesta['total'] = $consultas->nivelTotal();
    break;

    case "ListarDatos":
        $respuesta = $consultas->ListarUsuario();
    break;

}
    echo json_encode($respuesta);


 
?>
