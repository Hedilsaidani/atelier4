<?php
require 'dbconnect.class.php';
class Students{
    private $cnx;
    public function __construct()
    {
        $db= new BasesDonnees ;
        $this->cnx =$db->connectDB();

    }
    public function readAllStudents()
    {
        try {
            
          $req='SELECT * FROM students';
          $result =$this->cnx->prepare($req);
          $result->execute();
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage()  ;
        }
    }


    public function createStudents($firstname,$lastname,$email,$phone){

    try {
            
        $sql ="INSERT INTO students(id,firstname,lastname,email,phone) VALUES (null,:clt_firstname,:clt_lastname,:clt_email,:clt_phone)";
        $result =$this->cnx->prepare($sql);

        $result->bindParam (":clt_firstname", $firstname);
        $result->bindParam (":clt_lastname", $lastname);
        $result->bindParam (":clt_email", $email);
        $result->bindParam (":clt_phone", $phone);
        $result->execute();
        return $result;
        } catch (PDOException $ex) {
            echo $ex->getMessage()  ;
        }
    }

    public function storeStudents(){
      try{

        $sql="INSERT INTO students(firstname,lastname,email,phone) VALUES (:clt_firstname, :clt_lastname, :clt_email, :clt_phone)";
        $result =$this->cnx->prepare($sql);
   
        $result->bindParam (":clt_firstname", $firstname);
        $result->bindParam (":clt_lastname", $lastname);
        $result->bindParam (":clt_email", $email);
        $result->bindParam (":clt_phone", $phone);
        $result->execute();
        return $result;
        } catch (PDOException $ex) {
            echo $ex->getMessage()  ;
        }

    }


    public function updateStudents($id,$firstname,$lastname,$email,$phone){

      try {
            
        $sql ='UPDATE students
        SET firstname =clt_firstname;
            lastname=clt_lastname;
            email=clt_email;
            phone=clt_phone;
        WHERE id=clt_id';
        $result=$this->cnx->prepare->$sql;
        $result->bindParam (":cltid", $id);
        $result->bindParam (":clt_firstname", $firstname);
        $result->bindParam (":clt_lastname", $lastname);
        $result->bindParam (":clt_email", $email);
        $result->bindParam (":clt_phone", $phone);
        $result->execute();
        return $result;
        } catch (PDOException $exception) {
           echo $exception->getMessage()  ;
          }
    }


public function deleteStudents($id){
  try{
      $sql='DELETE FROM students where id=:clt_id';
      $result =$this->cnx->prepare($sql);
      $result->bindparam(":clt_id", $id);
      $result->execute();
    } catch (PDOException $e) {
      echo $e->getMessage()  ;
    }
}

}
?>
