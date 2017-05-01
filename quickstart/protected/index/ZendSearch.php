<?php
/*
 * Created on 7/05/2006
 */

class ZendSearch extends TModule
{
	private $_data;
	private $_ZF;
	private $_search;
	
	public function setIndexDataDirectory($path)
	{
		$this->_data = Prado::getPathOfNamespace($path);
	}
	
	public function getIndexDataDirectory()
	{
		return $this->_data;
	}
	
	protected function getZendSearch()
	{
		if(is_null($this->_search))
		{
		 	$this->_search = new Zend_Search_Lucene($this->_data);
		}
		return $this->_search;
	}
	
	public function find($query)
	{
		return $this->getZendSearch()->find(strtolower($query));
	}
} 

