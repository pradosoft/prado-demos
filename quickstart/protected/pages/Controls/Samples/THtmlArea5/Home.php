<?php

class Home extends TPage
{
	public function onLoad($param)
	{
		parent::onLoad($param);
		$this->labLanguages->Text = implode(', ', $this->HtmlArea1->getAvailableLanguages());
		$this->labPlugins->Text = implode(', ', $this->HtmlArea1->getAvailablePlugins());
		$this->labThemes->Text = implode(', ', $this->HtmlArea1->getAvailableThemes());
	}

	public function button1Clicked($sender,$param)
	{
		$this->Result1->Text="You have entered: ".$this->HtmlArea1->Text;
	}

	public function button2Clicked($sender,$param)
	{
		$this->Result2->Text="You have entered: ".$this->HtmlArea2->Text;
	}

	public function button3Clicked($sender,$param)
	{
		$this->Result3->Text="You have entered: ".$this->HtmlArea3->Text;
	}
}

