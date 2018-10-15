<?php

	/** Labores del Administrador de Contenido
	* 
	*/
	class Usuario{
		
		public function SubirContenido($Conexion, $Asunto){
			$query = "INSERT INTO Publicacion(Asunto)VALUES('$Asunto')";
			$Consulta = mysqli_query($Conexion, $query);
				if($Consulta){
				$Respuesta = "Publicacion subida con exito";
				}else{
					$Respuesta = "Problema al subir la publicacion, intente de nuevo";
				}
			return $Respuesta;
		}

		public function Consultar($Conexion){
        $query = "SELECT * FROM Publicacion";
        $Consulta = mysqli_query($Conexion,$query);
        return $Consulta;
    }

    	public function ConsultarAsunto($Conexion, $Asunto){
        $query = "SELECT * FROM Publicacion WHERE Asunto = $Asunto";
        $Consulta = mysqli_query($Conexion, $query);
        return $Consulta;
    }

    	public function Editar($Conexion, $Asunto) {
       $query = "UPDATE Publicacion SET Asunto ='$Asunto' WHERE Asunto ='$Asunto'";
       $Consulta = mysqli_query($Conexion, $query);
       
       if ($Consulta){
            $Respuesta = "Modificado con exito";
        } else {
            $Respuesta = "Problema al actualizar";
        }
        return $Respuesta;
    }

		public function EliminarContenido($Conexion){
			$query = "DELETE FROM";
			$Consulta = mysqli_query($Conexion, $query);
				if($Consulta === TRUE){
					$Respuesta = "Contenido eliminado con exito";				
				}else{
					$Respuesta = "Problema al eliminar el contenido";
				}
			return $Respuesta;
		}

		public function Video($Conexion, $Video){
			$query = "INSERT INTO Video(Video) VALUES ('$Video')";
			$Consulta = mysqli_query($Conexion, $query);
			if($Consulta){
				$Respuesta = "Video subido con exito";
			}else{
				$Respuesta = "Error al subir el video";
			}
		}

		public function VerVideo($Conexion){
			$query = "";
		}

		public function Foto($Conexion, $Foto){
			$query = "INSERT INTO Foto(Foto) VALUES ('$Foto')";
			$Consulta = mysqli_query($Conexion, $query);
			if($Consulta){
				$Respuesta = "Foto subida con exito";
			}else{
				$Respuesta = "Problema al subir la foto";
			}
		}
	}
?>