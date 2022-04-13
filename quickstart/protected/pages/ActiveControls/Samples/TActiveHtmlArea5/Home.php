<?php

class Home extends TPage
{
	public function button1Clicked($sender,$param)
	{
		$this->Result1->Text="You have entered: <xmp>".$this->HtmlArea1->Text."</xmp>";
	}

	public function button2Clicked($sender,$param)
	{
		$this->Result2->Text="You have entered: <xmp>".$this->HtmlArea2->Text."</xmp>";
	}

	public function button3Clicked($sender,$param)
	{
		$this->Result3->Text="You have entered: <xmp>".$this->HtmlArea3->Text."</xmp>";
	}

	public function button1bClicked($sender,$param)
	{
		$this->HtmlArea1->setText('<p>This is a <b>sample</b> Text, to demonstrate how to change the content during <u>callback</u>. Updated at <i>' . date('Y-m-d H:i:s') . '</i>.</p>');
	}

	public function button2bClicked($sender,$param)
	{
	  $this->HtmlArea2->setText('<p>This is a <b>sample</b> Text, to demonstrate how to change the content during <u>callback</u>. Updated at <i>' . date('Y-m-d H:i:s') . '</i>.</p>');
	}

	public function button3bClicked($sender,$param)
	{
	  $this->HtmlArea3->setText('<p>This is a <b>sample</b> Text, to demonstrate how to change the content during <u>callback</u>. Updated at <i>' . date('Y-m-d H:i:s') . '</i>.</p>');
	}

	public function button4bClicked($sender,$param)
	{
	  $this->HtmlArea4->setText('<p>This is a <b>sample</b> Text, to demonstrate how to change the content during <u>callback</u> - even if read-only. Updated at <i>' . date('Y-m-d H:i:s') . '</i>.</p>');
	}
}

