<?php 
require_once 'classes/pdf.php';
require_once 'assets/fpdf/fpdf.php';
class ArticuloModel extends Model{

    private $id;
    private $titulo;
    private $resumen;
    private $fecha;
    private $autor;
    private $revision;
    private $texto_completo;
    private $topico;
    private $calificacion;
    private $id_calificador;
    private $id_estudiante;

    public function __construct()
    {
        parent::__construct();
        $this->titulo = '';
        $this->resumen = '';
       
        $this->autor = '';
        $this->revision = '';
        $this->id_calificador=0;
        $this->id_estudiante=0;
        $this->calificacion=0.0;
       
    }


    public function getDataAllArticulos($id){

        $connection = Database::getInstance();

        error_log("el id".$id);

        $query = "SELECT * FROM articulo WHERE id_estudiante ='$id'";
        $items = [];

        $records = $connection->execute($query);
       
       
        try{
         
            
            
            while ($row = mysqli_fetch_assoc($records)) {
                 $revision="";
                $item = new ArticuloModel();

                $item->setId($row['id']);
                $item->setTitulo($row['titulo']);
                $item->setResumen($row['resumen']);
                $item->setAutor($row['autor']);
                $item->setFecha($row['fecha']);
                if($row['estado']==0){
                    $revision = "NO";
                }else{
                    $revision = "SI";
                }
                $item->setRevision($revision);
                $item->setCalificacion($row['calificacion']);
                $item->setIdCalificador($row['id_calificador']);
                $item->setIdEstudiante($row['id_estudiante']);
               

                array_push($items, $item);

                unset($item);
            }

        }catch(mysqli_sql_exception $e){
            error_log($e->getMessage());
        }
    

        return $items;
    }


    public function getDataAllArticulosByCalificador($id_calificador){

        $connection = Database::getInstance();

    

        $query = "SELECT * FROM articulo WHERE id_calificador ='$id_calificador'";
        $items = [];

        $records = $connection->execute($query);
       
       
        try{
         
            
            
            while ($row = mysqli_fetch_assoc($records)) {
                 $revision="";
                $item = new ArticuloModel();

                $item->setId($row['id']);
                $item->setTitulo($row['titulo']);
                $item->setResumen($row['resumen']);
                $item->setAutor($row['autor']);
                $item->setFecha($row['fecha']);
                $item->setCalificacion($row['calificacion']);
                if($row['estado']==0){
                    $revision = "NO";
                }else{
                    $revision = "SI";
                }
                $item->setRevision($revision);
                $item->setIdCalificador($row['id_calificador']);
                $item->setIdEstudiante($row['id_estudiante']);
                error_log('el id autor es'.$row['id_estudiante']);
               

                array_push($items, $item);

                unset($item);
            }

        }catch(mysqli_sql_exception $e){
            error_log($e->getMessage());
        }
    

        return $items;
    
    }

    public function delete($id)
    {

        $connection = $this->db;
        $query =  "DELETE FROM articulo WHERE id = " . $id;

        try {
            $connection->execute($query);
            return true;
        } catch (mysqli_sql_exception $e) {
            error_log('USERMODEL::delete()-> error al eliminar : ' . $e);
            return false;
        }
    }

   public function  saveArticleByUser($array){

    $connection = $this->db;

    $query = "INSERT INTO articulo (titulo,palabras_clave,resumen,texto_completo,topico,autor, estado, id_estudiante, id_calificador) VALUES ('{$array['titulo']}','{$array['palabras']}','{$array['resumen']}','{$array['texto-articulo']}','{$array['topico']}','{$array['autor']}','0','{$array['id_estudiante']}','{$array['id_calificador']}')";
   try{
    $connection->execute($query);
    return true;
   }catch(mysqli_sql_exception $e){
     return false;
   }
    
   
   }

  public function downloadArticleById($id_articulo,$nombre_calificador){

    $_connection = $this->db;
   
    

$item=[];
        $results = $_connection->execute("SELECT * FROM articulo WHERE id =" . $id_articulo);
        
        while($row = mysqli_fetch_assoc($results)){
              
            $item = new ArticuloModel();

                $item->setId($row['id']);
                $item->setTitulo($row['titulo']);
                $item->setFecha($row['fecha']);
                $item->setResumen($row['resumen']);
                $item->setAutor($row['autor']);
                $item->setRevision($row['estado']);
                $item->setCalificacion($row['calificacion']);
               $item->setTextoCompleto($row['texto_completo']);
                $item->setIdCalificador($row['id_calificador']);
                $item->setIdEstudiante($row['id_estudiante']);
                $item->setTopico($row['topico']);

        }

        $fecha = strftime("%d de %B del %Y", strtotime($item->getFecha()));

        $lenght= strlen($item->getTextoCompleto());
        error_log('lenght'.$lenght);
        $pdf = new PDF();
        $pdf->SetTitle($item->getTitulo());
        $pdf->AliasNbPages();
        $pdf->AddPage();

        
        $pdf->SetFont('Arial', 'B');
        $pdf->Cell(100, 14, 'Titulo Articulo: ', 0, 0, 'L');

        $pdf->SetFont('Arial', '');
        $pdf->Cell(100, 14,$item->getTitulo() , 0, 0);

        $pdf->Ln(20);

        
       
        $pdf->SetFont('', 'B');
        $pdf->Cell(30, 8, 'Topico', 1, 0, 'C');
        $pdf->Cell(124, 8, 'Autor', 1, 0, 'C');
        $pdf->Cell(37, 8, 'Calificacion', 1, 0, 'C', 0);
        $pdf->Ln(8);
        $pdf->SetFont('Arial', '');
        $pdf->Cell(30, 8, $item->getTopico(), 1, 0, 'C');
        $pdf->Cell(124, 8, $item->getAutor(), 1, 0, 'C');
        $pdf->Cell(37, 8, $item->getCalificacion(), 1, 0, 'C');


        $pdf->Ln(20);
        
        $pdf->Cell(186, 8, $item->getTitulo().' por '.$item->getAutor(), 1, 0, 'C');
        $pdf->Ln(18);

        $pdf->MultiCell(186, 8, utf8_decode($item->getTextoCompleto()));
       
      


        $pdf->Output();

   }
public function getDataAllArticulosbyAdmin(){

    $connection = $this->db;

    $query = "select *  from articulo  ";
    $results= $connection->execute($query);
    $items= [];
    
    while($row = mysqli_fetch_assoc($results)){
              
        $item = new ArticuloModel();

            $item->setId($row['id']);
            $item->setTitulo($row['titulo']);
            $item->setFecha($row['fecha']);
            $item->setResumen($row['resumen']);
            $item->setAutor($row['autor']);
            $item->setRevision($row['estado']);
            $item->setCalificacion($row['calificacion']);
           $item->setTextoCompleto($row['texto_completo']);
            $item->setIdCalificador($row['id_calificador']);
            $item->setIdEstudiante($row['id_estudiante']);
            $item->setTopico($row['topico']);

            array_push($items, $item);

            unset($item);

    }
return $items;

   


}
   public function calificarArticuloPorId($id,$calificacion){
    $connection = $this->db;

    $query = "UPDATE articulo SET calificacion ='$calificacion' WHERE id = '$id'";
try{

    $connection->execute($query);
    $connection->execute("UPDATE articulo SET estado =1 WHERE id = '$id'");
    return true;
}catch(mysqli_sql_exception $e){
    return false;
}
    



   }

    public function getId(){
        return $this->id;
    }

    public function setId($val){
         $this->id = $val;
    }

   
    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($val){
         $this->titulo = $val;
    }

    public function getTextoCompleto(){
        return $this->texto_completo;
    }

    public function setTextoCompleto($val){
         $this->texto_completo = $val;
    }
    public function getResumen(){
        return $this->resumen;
    }

    public function setResumen($val){
         $this->resumen = $val;
    }
    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($val){
         $this->fecha = $val;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($val){
         $this->autor = $val;
    }

    public function getRevision(){
        return $this->revision;
    }

    public function setRevision($val){
         $this->revision = $val;
    }

    public function getTopico(){
        return $this->topico;
    }

    public function setTopico($val){
         $this->topico = $val;
    }


    public function getCalificacion(){
        return $this->calificacion;
    }

    public function setCalificacion($val){
         $this->calificacion = $val;
    }

    public function getIdCalificador(){
        return $this->id_calificador;
    }

    public function setIdCalificador($val){
         $this->id_calificador = $val;
    }

    public function getIdEstudiante(){
        return $this->id_estudiante;
    }

    public function setIdEstudiante($val){
         $this->id_estudiante = $val;
    }






}
