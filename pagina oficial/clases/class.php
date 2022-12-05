<?php 
//session_start();
require_once("conexion.php");

class Trabajo extends Conexion
{
	private $datos1;
	private $datos2;
	private $conexion;
	private $registros=array();

	public function __construct()
	{
		$this->conexion=new Conexion();
		$this->conexion=$this->conexion->abrir_Conexion();

	}

	public function corta_palabras($deta,$cant)
	{
		$largo=strlen($deta);
		$cadena=substr($deta,0,$cant);
		return $cadena;
	}
	
	public function traer_categorias()
	{
		$sql="select * from categorias";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function traer_noticias($inicio,$c)
	{
		$sql="select * from sistem_usu where nro_identidad=$c order by id_usuario desc limit $inic,5";
		
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function todas_not($inic)
	{
		$sql="select * from sistem_usu order by id_usuario asc limit $inic,10";
		
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	/*HASTA AQUI VA EL FUNCIONAMIENTO DE LA PAGINA PRINCIPAL*/ 

	/*FUNCIONES DEL CRUD AGREGAR,ACTUALIZAR,ELIMINAR Y SUBIR IMAGEN*/

	public function adicion_usu($b1,$b2,$b3)
	{
		$val="";
		$fech=date('y-m-d');
		$b2=password_hash($b2, PASSWORD_DEFAULT);

		$sql="insert into sistem_usu(login_usu, pass_usu, fech_act, Nro_identidad) values(:login, :pass, :fecha, :iden)";
		
		$consulta=$this->conexion->prepare($sql);
		//$consulta->BindValue(":secue",$val);
		$consulta->BindValue(":login",$b1);
		$consulta->BindValue(":pass",$b2);
		$consulta->BindValue(":fecha",$fech);
		$consulta->BindValue(":iden",$b3);
		$resultado=$consulta->execute();

		return $resultado;
	}


	public function eliminar_usu($b3){
		
		$sql="DELETE FROM sistem_usu WHERE nro_identidad=" .$_REQUEST['nrodocu'];
		
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function modificar_usu($b1,$b2,$b3){
		
		$sql="update sistem_usu set login_usu=:id, pass_usu=:pass where Nro_identidad=:iden";

		$consulta=$this->conexion->prepare($sql);
		//$consulta->BindValue(":secue",$val);
		$consulta->BindValue(":id",$b1);
		$consulta->BindValue(":login",$b2);
		$consulta->BindValue(":fecha",$fech);
		$consulta->BindValue(":iden",$b3);
		$resultado=$consulta->execute();

		return $resultado;
	}

	public function traer_usuarios(){
		
		$sql="select * usuarios_sis";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function sube_img($id_noti,$nombre)
	{
		$sql="update sistem_usu set imagen_not='$nombre' where id_noticias='$id_noti'";

		$result=$this->conexion->query($sql);
		echo "<script type='text/javascrit'>
			alert('Imagen Adicionada Correctamente....');
			window.location='sube_imagenes.php';
		</script>";
		
	}

	public function crud_comentarios($b1,$b2,$b3,$b4)
	{
		$val="";
		$fech=date('y-m-d');
		$b2=password_hash($b2, PASSWORD_DEFAULT);

		$sql="insert into coment_not(nombre_lector, correo_lector, wed_lector, texto_not, fecha_com) values(:nombre, :correo, :wed, :texto, :fecha)";
		
		$consulta=$this->conexion->prepare($sql);
		//$consulta->BindValue(":secue",$val);
		$consulta->BindValue(":nombre",$b1);
		$consulta->BindValue(":correo",$b2);
		$consulta->BindValue(":wed",$b3);
		$consulta->BindValue(":texto",$b4);
		$consulta->BindValue(":fecha",$fech);
		$resultado=$consulta->execute();

		return $resultado;
	}

	
	public function traer_todos()
	{
		$sql="select * from categorias";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}


}	

?>