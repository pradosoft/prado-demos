<?php

class LabeledTextBox extends TControl
{
	private $_label;
	private $_textbox;

	protected function createChildControls()
	{
		$this->_label=new TLabel;
		$this->_label->setID('Label');
		$this->getControls()->add($this->_label);
		$this->getControls()->add('&nbsp;');
		$this->_textbox=new TTextBox;
		$this->_textbox->setID('TextBox');
		$this->getControls()->add($this->_textbox);
	}

	public function getLabel()
	{
		$this->ensureChildControls();
		return $this->_label;
	}

	public function getTextBox()
	{
		$this->ensureChildControls();
		return $this->_textbox;
	}
}

?>