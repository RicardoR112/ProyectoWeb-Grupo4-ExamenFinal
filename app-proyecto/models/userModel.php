<?php

class UserModel extends Model implements IModel
{
    private $id;
    private $nombres;
    private $apellidos;
    private $role;
    private $photo;
    private $sexo;
    private $email;
    private $documento;
    private $tipo_documento;
    private $fecha_nac;
    public function __construct()
    {
        parent::__construct();
        $this->nombres = '';
        $this->apellidos = '';
        $this->password = '';
        $this->role = 2;
        $this->photo = '';
        $this->fecha_nac = '';
        $this->sexo = '';
        $this->email = '';
        $this->documento = '';
        $this->tipo_documento = '';
    }

    public function save()
    {
        $connection = $this->db;
        $query =  "INSERT INTO users(nombres,apellidos,password,email,documento,tipo_documento,tipo_user,sexo,fecha_nac,profile_img) VALUES ('$this->nombres','$this->apellidos','$this->password','$this->email','$this->documento','$this->tipo_documento','$this->role','$this->sexo','$this->fecha_nac','$this->photo')";

        try {
            $connection->execute($query);
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::save()-> error al guardar : ' . $e);
            return false;
        }
    }



    function updateData($id, $nombres, $apellidos, $email, $document, $tipo_document, $fecha_nac, $sexo)
    {
        try {
            $connection = $this->db;
            $connection->execute("UPDATE users SET nombres = '$nombres', apellidos = '$apellidos',email='$email', documento='$document',tipo_documento='$tipo_document',fecha_nac='$fecha_nac',sexo='$sexo' WHERE id='$id'");
            error_log('guarde el usuario correctamente');
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log('error al actualizar datos user');
            return false;
        }
    }



    function updateProfilePictureUser($user)
    {
        $connection = $this->db;
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES["fileToUpload"]["type"])) {
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/app-proyecto/public/uploads/";
            $carpeta = $target_dir;
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
            }
            $profile_img = "public/uploads/" . basename($_FILES["fileToUpload"]["name"]);
            $target_file = $carpeta . basename($_FILES["fileToUpload"]["name"]);

            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {

                    $uploadOk = 1;
                } else {

                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {

                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 1524288) {

                $uploadOk = 0;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {

                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {

                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $user_id = $user->getId();
                    $photo = $user->getPhoto();




                    try {
                        $connection->execute("UPDATE users SET profile_img = '$profile_img' WHERE id = '$user_id'");
                        try {
                            $url = $_SERVER["DOCUMENT_ROOT"] . '/app-proyecto/' . $photo;
                            unlink($url);
                        } catch (Exception $e) {
                        }
                        echo $profile_img;
                    } catch (mysqli_sql_exception $e) {
                        echo '';
                    }
                } else {

                    echo '';
                }
            }
        }
    }

    public function updateUserByAdmin($id, $tipo_user, $nombres, $apellidos, $email, $documento, $tipo_documento)
    {
        $connection = $this->db;
        $query =  "UPDATE users SET tipo_user = '$tipo_user', nombres = '$nombres', apellidos = '$apellidos', email='$email', documento = '$documento',  tipo_documento='$tipo_documento' WHERE id = " . $id;
        try {
            $connection->execute($query);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function returnUserDataBySocialMedia()
    {
    }



    public function getAllEstudiantes()
    {

        $connection = $this->db;
        $query =  "SELECT * FROM users WHERE tipo_user = 2";

        $items = [];

        try {
            $result =  $connection->execute($query);



            while ($row = mysqli_fetch_assoc($result)) {

                $item = new UserModel();

                $item->setId($row['id']);
                $item->setNombres($row['nombres']);
                $item->setApellidos($row['apellidos']);
                $item->setPassword($row['password']);
                $item->setEmail($row['email']);
                $item->setDocument($row['documento']);
                $item->setTipoDoc($row['tipo_documento']);
                $item->setRole($row['tipo_user']);
                $item->setPhoto($row['profile_img']);
                $item->setSexo($row['sexo']);
                $item->setFechaNac($row['fecha_nac']);

                array_push($items, $item);

                unset($item);
            }



            return $items;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::getAll()-> error al obtener datos : ' . $e);
            return [];
        }
    }

    public function getAllCalificadores()
    {

        $connection = $this->db;
        $query =  "SELECT * FROM users WHERE tipo_user = 1";

        $items = [];

        try {
            $result =  $connection->execute($query);



            while ($row = mysqli_fetch_assoc($result)) {

                $item = new UserModel();

                $item->setId($row['id']);
                $item->setNombres($row['nombres']);
                $item->setApellidos($row['apellidos']);
                $item->setPassword($row['password']);
                $item->setEmail($row['email']);
                $item->setDocument($row['documento']);
                $item->setTipoDoc($row['tipo_documento']);
                $item->setRole($row['tipo_user']);
                $item->setPhoto($row['profile_img']);
                $item->setSexo($row['sexo']);
                $item->setFechaNac($row['fecha_nac']);

                array_push($items, $item);

                unset($item);
            }



            return $items;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::getAll()-> error al obtener datos : ' . $e);
            return [];
        }
    }

    public function getAll()
    {
        $connection = $this->db;
        $query =  "SELECT * FROM users WHERE id not in('$this->id') ";

        $items = [];

        try {
            $result =  $connection->execute($query);



            while ($row = mysqli_fetch_assoc($result)) {

                $item = new UserModel();

                $item->setId($row['id']);
                $item->setNombres($row['nombres']);
                $item->setApellidos($row['apellidos']);
                $item->setPassword($row['password']);
                $item->setEmail($row['email']);
                $item->setDocument($row['documento']);
                $item->setTipoDoc($row['tipo_documento']);
                $item->setRole($row['tipo_user']);
                $item->setPhoto($row['profile_img']);
                $item->setSexo($row['sexo']);
                $item->setFechaNac($row['fecha_nac']);

                array_push($items, $item);

                unset($item);
            }



            return $items;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::getAll()-> error al obtener datos : ' . $e);
            return [];
        }
    }

    
    public function get($id)
    {

        $connection = $this->db;
        $query =  "SELECT * FROM users WHERE id = '$id'";

        try {
            $respuesta =  $connection->execute($query);
            $user = mysqli_fetch_assoc($respuesta);
            $this->setId($user['id']);
            $this->setNombres($user['nombres']);
            $this->setApellidos($user['apellidos']);
            $this->setPassword($user['password']);
            $this->setEmail($user['email']);
            $this->setDocument($user['documento']);
            $this->setRole($user['tipo_user']);
            $this->setPhoto($user['profile_img']);
            $this->setSexo($user['sexo']);
            $this->setFechaNac($user['fecha_nac']);
            $this->setTipoDoc($user['tipo_documento']);



            return $this;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::getId()-> error al obtener datos : ' . $e);
        }
    }

    

    public function delete($id)
    {

        $connection = $this->db;
        $query =  "DELETE FROM users WHERE id = " . $id;

        try {
            $connection->execute($query);
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::delete()-> error al eliminar : ' . $e);
            return false;
        }
    }
    public function update()
    {

        $connection = $this->db;
        $query =  "UPDATE users SET username = '$this->username', password = '$this->password', email = '$this->email', document='$this->document', role = '$this->role',  photo='$this->photo', fullname = '$this->fullname', phonenumber='$this->phonenumber' WHERE id = " . $this->id;

        try {
            $connection->execute($query);
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::update()-> error al actualizar los datos : ' . $e);
            return false;
        }
    }
    public function from($array)
    {
        $this->id = $array['id'];
        $this->nombres = $array['nombres'];
        $this->apellidos = $array['apellidos'];
        $this->password = $array['password'];
        $this->email = $array['email'];
        $this->document = $array['documento'];
        $this->role = $array['tipo_user'];
        $this->photo = $array['profile_img'];
        $this->fecha_nac = $array['fecha_nac'];
        $this->sexo = $array['sexo'];
        $this->tipo_documento = $array['tipo_documento'];
    }

    public function exists($document)
    {
        $connection = $this->db;
        $query =  "SELECT documento FROM users WHERE documento = '$document'";
        try {
            $result = $connection->execute($query);
            $row_count = mysqli_num_rows($result);

            if ($row_count > 0) {
                return true;
            } else {
                return false;
            }
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::exists->MYSQLI_EXCEPTION : ' . $e);
            return false;
        }
    }

    public function comparePasswords($password, $id)
    {

        try {
            $user = $this->get($id);
            return password_verify($password, $user->getPassword());
        } catch (Exception $e) {
            error_log('USERMODEL::comparePasswords->MYSQLI_EXCEPTION : ' . $e);
            return false;
        }
    }

    private function getHashedPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setNombres($valor)
    {
        $this->nombres = $valor;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setApellidos($valor)
    {
        $this->apellidos = $valor;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setPassword($pass)
    {
        $this->password = $this->getHashedPassword($pass);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setSexo($valor)
    {
        $this->sexo = $valor;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setTipoDoc($valor)
    {
        $this->tipo_documento = $valor;
    }

    public function getTipoDoc()
    {
        return $this->tipo_documento;
    }



    public function getDocument()
    {
        return $this->documento;
    }

    public function setDocument($document)
    {
        $this->documento = $document;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFechaNac()
    {
        return $this->fecha_nac;
    }

    public function setFechaNac($valor)
    {
        $this->fecha_nac = $valor;
    }
}
