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
	
	/**
	 * Whether the optional zf1/zend-search-lucene package is installed.
	 * When it is missing (e.g. prado-demos installed as a Composer dependency
	 * without the transitive zf1 package) search degrades gracefully instead
	 * of fataling with "Class Zend_Search_Lucene not found".
	 * @return bool true if the Lucene backend is available.
	 */
	public function getIsAvailable()
	{
		return class_exists('Zend_Search_Lucene');
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
		if(!$this->getIsAvailable())
			return array();
		return $this->getZendSearch()->find(strtolower($query));
	}
}

