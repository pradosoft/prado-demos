<?php

class DocLink extends THyperLink
{
	const BASE_URL='http://pradosoft.github.io/docs/manual';

	public function getClassPath()
	{
		return $this->getViewState('ClassPath','');
	}

	public function setClassPath($value)
	{
		$this->setViewState('ClassPath',$value,'');
	}

	public function onPreRender($param)
	{
		parent::onPreRender($param);
		$classFile='class-'.$this->getClassPath();
		$this->setNavigateUrl(self::BASE_URL . '/' . $classFile);
		if($this->getText() === '')
			$this->setText('API Manual');
	}
}

