<?php
    class Crud{
        private $conexion;
        private $host ='localhost';
        private $user ='root';
        private $pass="";
        private $bd="agendados";
        
        public function __construct(){
            $this->conexion=new PDO("mysql:host=$this->host; dbname=$this->bd",$this->user,$this->pass);
        }
        public function read($id){
            $query ="SELECT contactos.id as id, contactos.nombre as nombre,contactos.telefono, categorias.nombre as nombreCategoria, contactos.email as email FROM contactos INNER JOIN categorias on contactos.categoria=categorias.id WHERE creadopor=:id;";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function readCategoria(){
            $query ="SELECT * FROM categorias";
            $stmt= $this->conexion->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function create($datos){
            $query="INSERT INTO contactos(nombre, telefono, email, categoria, creadopor) VALUES (:nombre, :telefono, :email, :categoria, :creadopor)";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->bindParam(":telefono", $datos["telefono"]);
            $stmt->bindParam(":email", $datos["email"]);
            $stmt->bindParam(":categoria", $datos["categoria"]);
            $stmt->bindParam(":creadopor", $datos["creadopor"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function createUser($datos){
            $query="INSERT INTO usuarios(nombre, pass) VALUES (:nombre, :pass)";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->bindParam(":pass", $datos["pass"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function update($datos){
            $query= "UPDATE contactos SET nombre=:nombre, telefono=:telefono, email=:email, categoria=:categoria WHERE id=:id and creadopor=:creadopor";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":id", $datos["id"]);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->bindParam(":telefono", $datos["telefono"]);
            $stmt->bindParam(":email", $datos["email"]);
            $stmt->bindParam(":categoria", $datos["categoria"]);
            $stmt->bindParam(":creadopor", $datos["creadopor"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function updateCategoria($datos){
            $query= "UPDATE categorias SET nombre=:nombre WHERE id=:id";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":id", $datos["id"]);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function delete($id){
            $query="DELETE FROM contactos WHERE id=:id";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function deleteCategoria($id){
            $query="DELETE FROM categorias WHERE id=:id";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function show($id){
            $query="SELECT contactos.id as id, categorias.id as idCategoria, contactos.nombre as nombre,contactos.telefono, categorias.nombre as nombreCategoria, contactos.email as email FROM contactos INNER JOIN categorias on contactos.categoria=categorias.id WHERE contactos.id=:id and creadopor=:creadopor";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":creadopor", $_SESSION['id_session']);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function showCategoria($id){
            $query="SELECT * FROM categorias WHERE id=:id";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function createCategoria($nombre){
            $query="INSERT INTO categorias(nombre) VALUES (:nombre)";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $nombre);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function login($datos){
            $query ="SELECT * FROM usuarios WHERE nombre=:nombre and pass=:pass";
            $stmt= $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->bindParam(":pass", $datos["pass"]);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result['id']!==0) {
                session_start();
                unset($this->conexion);
                $_SESSION['id_session']=$result['id'];
                return $result;
            }else{
                unset($this->conexion);
                return false;
            }
        }
    }
    
?>