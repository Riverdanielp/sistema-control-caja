<?php



/**
 * Skeleton subclass for representing a row from the 'cliente' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.scc
 */
class Cliente extends BaseCliente {
    
    static public function listaClientes() {
        $tilde_e = mb_convert_encoding("�fono","UTF-8","ISO-8859-1");
        $gxml = <<<ram
<rows>
<head>
<column width="70" type="ro" align="center" color="white" sort="na">Id Cliente</column>
<column width="195" type="ro" align="left" color="white" sort="na">Nombre</column>
<column width="105" type="ro" align="left" color="white" sort="na">RUC</column>
<column width="125" type="ro" align="center" color="white" sort="na">Tel$tilde_e</column>
</head>
ram;
        $cliente = new Cliente();
        $clientes = ClienteQuery::create()
                ->orderByIdCliente()
                ->find();
        foreach($clientes as $cliente) {
            $gxml .= '<row id="'.$cliente->getIdCliente().'">';
            $gxml .= '<cell>'.$cliente->getIdCliente().'</cell>';
            $gxml .= '<cell>'.$cliente->getApellido()." ".$cliente->getNombre().'</cell>';
            $gxml .= '<cell>'.$cliente->getRuc().'</cell>';
            $gxml .= '<cell>'.$cliente->getTelefono().'</cell>';
            $gxml .= '</row>';
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    static public function guardaCliente($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME);
            $cliente = new Cliente();
            $cliente->setNombre($_REQUEST[$_REQUEST['ids'].'_nombre']);
            $cliente->setApellido($_REQUEST[$_REQUEST['ids'].'_apellido']);
            $cliente->setRuc($_REQUEST[$_REQUEST['ids'].'_ruc']);
            $cliente->setTelefono($_REQUEST[$_REQUEST['ids'].'_telefono']);
            $cliente->setDireccion($_REQUEST[$_REQUEST['ids'].'_direccion']);
            $cliente->setEmail($_REQUEST[$_REQUEST['ids'].'_correo']);
            $cliente->setContacto($_REQUEST[$_REQUEST['ids'].'_contacto']);
            $cliente->setFechaNacimiento($_REQUEST[$_REQUEST['ids'].'_fechanac']);
            $con->beginTransaction();
            $cliente->save($con);
            Log::registraLog($idPersona,'Cliente','Cliente # '.$cliente->getIdCliente().': '.$cliente->getApellido().' '.$cliente->getNombre(),'I',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$cliente->getIdCliente().'" tid="'.$cliente->getIdCliente().'"></action><action type="reg_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_reg">No fue posible registrar el nuevo cliente</action></data>';
        }
        return $gxml;
    }
    
    static public function seleccionarCliente($idCliente) {
        try {
            $cliente = ClienteQuery::create()
                        ->findPk($idCliente);
            $gxml = '<data>';
            $gxml .= '<nombre>'.$cliente->getNombre().'</nombre>';
            $gxml .= '<apellido>'.$cliente->getApellido().'</apellido>';
            $gxml .= '<ruc>'.$cliente->getRuc().'</ruc>';
            $gxml .= '<telefono>'.$cliente->getTelefono().'</telefono>';
            $gxml .= '<direccion>'.$cliente->getDireccion().'</direccion>';
            $gxml .= '<correo>'.$cliente->getEmail().'</correo>';
            $gxml .= '<contacto>'.$cliente->getContacto().'</contacto>';
            $gxml .= '<fechanac>'.$cliente->getFechaNacimiento('Y-m-d').'</fechanac>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Log::logError($e);
        }
        return $gxml;
    }
    
    static public function actualizarCliente($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME);
            $cliente = ClienteQuery::create()
                    ->findPk($_REQUEST['ids']);
            if($cliente) {
                $cliente->setNombre($_REQUEST[$_REQUEST['ids'].'_nombre']);
                $cliente->setApellido($_REQUEST[$_REQUEST['ids'].'_apellido']);
                $cliente->setRuc($_REQUEST[$_REQUEST['ids'].'_ruc']);
                $cliente->setTelefono($_REQUEST[$_REQUEST['ids'].'_telefono']);
                $cliente->setDireccion($_REQUEST[$_REQUEST['ids'].'_direccion']);
                $cliente->setEmail($_REQUEST[$_REQUEST['ids'].'_correo']);
                $cliente->setContacto($_REQUEST[$_REQUEST['ids'].'_contacto']);
                $cliente->setFechaNacimiento($_REQUEST[$_REQUEST['ids'].'_fechanac']);
                $con->beginTransaction();
                $cliente->save($con);
                Log::registraLog($idPersona,'Cliente','Cliente # '.$cliente->getIdCliente().': '.$cliente->getIdCliente(),'M',$con);
                $con->commit();
                $gxml = '<data><action type="update" sid="'.$cliente->getIdCliente().'" tid="'.$cliente->getIdCliente().'"></action><action type="act_ok"></action></data>';
            }
            else
                $gxml = '<data><action type="no_act">No fue posible actualizar el cliente</action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_act">No fue posible actualizar el cliente</action></data>';
        }
        return $gxml;
    }
    
    static public function eliminarCliente($idPersona) {
        try {
            $gxml = "";
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME);
            $cliente = new Cliente();
            $cliente = ClienteQuery::create()
                    ->findPk($_REQUEST[$_REQUEST['ids'].'_gr_id']);
            $nombre = $cliente->getNombre()." ".$cliente->getApellido();
            $con->beginTransaction();
            $cliente->delete();
            Log::registraLog($idPersona,'Cliente','Cliente # '.$_REQUEST[$_REQUEST['ids'].'_gr_id'].': '.$nombre,'E',$con);
            $con->commit();
            $gxml = '<data><action type="update" sid="'.$cliente->getIdCliente().'" tid="'.$cliente->getIdCliente().'"></action><action type="eli_ok"></action></data>';
        }
        catch(Exception $e) {
            $con->rollBack();
            Log::logError($e);
            $gxml = '<data><action type="no_eli">No fue posible eliminar el cliente</action></data>';
        }
        return $gxml;
    }

} // Cliente
