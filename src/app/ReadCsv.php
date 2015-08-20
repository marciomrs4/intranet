<?php
namespace app;

class ReadCsv
{
	
	private $array = array();
	
	private $lines = array();
	private $column = array();
	
	public function readFileCsv($file,$sepator=';')
	{
		
		foreach(file($file) as $linhas ){
			$this->array[] = explode($sepator,$linhas); 
		}
		
		$this->column = array_shift($this->array);
		$this->lines = $this->array;
	}
	
	public function getColumn()
	{
		return $this->column;	
	}
	
	public function getLines()
	{
		return $this->lines;
	}
	
}