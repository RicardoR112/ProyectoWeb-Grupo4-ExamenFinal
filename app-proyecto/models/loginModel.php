<?php
require_once 'models/userModel.php';
class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  function login($email, $password)
  {

    try {
      $connection = $this->db;
      $result = $connection->execute("SELECT * FROM users WHERE email ='$email'");
      $row_count = mysqli_num_rows($result);

      error_log('LoginModel::login() -> el row count es :' . $row_count . '');

      if ($row_count == 1) {
        $item = mysqli_fetch_assoc($result);
        $user = new UserModel();
        $user->from($item);
        
        if (password_verify($password, $user->getPassword())) {
          error_log('LoginModel::login() -> return user == new User()');
          error_log('Accion exitosa, estas logeado');
          
          return $user;
        } else {
          error_log('Error, algo ha ido mal, PASSWORD NO ES IGUAL');
          
          return NULL;
        }
      }else{ 
        error_log('LoginModel::login() -> return user == null');
        return NULL;
      }

    
    } catch (mysqli_sql_exception $e) {
      error_log('LOGIN_MODEL::login-> error : ' . $e);
      return NULL;
    }
  }
}

?>
