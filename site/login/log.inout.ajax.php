<?php
	session_start();
	if ( !isset($_SESSION['admonusuario_Gl']) && !isset($_SESSION['Id_UsuG']) ){
		if ( @$idcnx = @mysql_connect('localhost','root','') ){
			
			if ( @mysql_select_db('note_network',$idcnx) ){
				
				$sql = 'SELECT Id_UsuG, admonusuario_Gl, pass_adgr FROM admon_g WHERE admonusuario_Gl ="' . $_POST['login_username']. '" && pass_adgr="' . md5($_POST['login_userpass']) . '" LIMIT 1';
				if ( @$res = @mysql_query($sql) ){
					if ( @mysql_num_rows($res) == 1 ){
						
						$user = @mysql_fetch_array($res);
						
						$_SESSION['username']	= $user['user'];
						$_SESSION['userid']	= $user['id'];
						echo 1;
						
					}
					else
						echo 0;
				}
				else
					echo 0;
				
				
			}
			
			mysql_close($idcnx);
		}
		else
			echo 0;
	}
	else{
		echo 0;
	}
?>