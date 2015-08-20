<?php

namespace app\model;

use app\model\Banco;

class TbUsuario extends Banco
{

	private $tabela = 'tb_usuario';

	private $usu_codigo = 'usu_codigo';
	private $usu_nome = 'usu_nome';
	private $usu_sobrenome = 'usu_sobrenome';
	private $usu_email = 'usu_email';
	private $usu_ramal = 'usu_ramal';
	private $dep_codigo = 'dep_codigo';
	private $tac_codigo = 'tac_codigo';
	private $usu_cargo = 'usu_cargo';
	private $usu_drt = 'usu_drt';
	

	#Lista de Ramais usado na Intranet
	public function listarRamaisIntranet()
	{
		
		$query = ("SELECT concat(usu_nome,' ',usu_sobrenome) AS nome, usu_ramal AS ramal,
                          usu_email AS email, DEP.dep_descricao AS departamento
						FROM tb_usuario AS USU
						INNER JOIN tb_departamento AS DEP
						ON USU.dep_codigo = DEP.dep_codigo
						INNER JOIN tb_acesso AS ACE
						ON USU.usu_codigo = ACE.usu_codigo
						WHERE ace_ativo = 'S' AND USU.usu_codigo != 1
						");
	
		try{
			
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return($stmt);
				
		} catch (\PDOException $e){
			throw new \PDOException($e->getMessage(),$e->getCode());
		}
	}
	

	
}
?>