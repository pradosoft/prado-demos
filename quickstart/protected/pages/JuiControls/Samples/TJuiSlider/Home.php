<?php

class Home extends TPage
{
	public function slider1_start($sender, $param)
	{
		$value = $param->getCallbackParameter()->value;
		$this->label1->Text = 'Start: ' . $value;
	}

	public function slider1_stop($sender, $param)
	{
		$value = $param->getCallbackParameter()->value;
		$this->label1->Text = 'Stop: ' . $value;
	}

	public function slider2_change($sender, $param)
	{
		$value = $param->getCallbackParameter()->value;
		$this->label2->Text = 'Value: ' . $value;
	}

	public function slider3_stop($sender, $param)
	{
		$value = $param->getCallbackParameter()->value;
		$this->label3->Text = 'Value: ' . $value;
	}

	public function slider4_stop($sender, $param)
	{
		$values = $param->getCallbackParameter()->values;
		$this->label4->Text = 'Range: ' . $values[0] . ' – ' . $values[1];
	}

	public function toggle_disable($sender, $param)
	{
		$this->slider1->getOptions()->disabled = $sender->getChecked();
		$this->label1->Text = $sender->getChecked() ? 'Slider disabled.' : 'Slider enabled.';
	}

	public function toggle_animate($sender, $param)
	{
		$this->slider1->getOptions()->animate = $sender->getChecked();
		$this->label1->Text = $sender->getChecked() ? 'Animate on.' : 'Animate off.';
	}

	public function change_step($sender, $param)
	{
		$step = (int) $sender->getSelectedValue();
		$this->slider1->getOptions()->step = $step;
		$this->label1->Text = 'Step set to ' . $step . '.';
	}
}
