<?php

class Home extends TPage
{
	public function fileUploaded($sender,$param)
	{
		if($sender->HasFile)
		{
			$this->Result->Text="
				You just uploaded a file:
				<br/>
				Name: {$sender->FileName}
				<br/>
				Size: {$sender->FileSize}
				<br/>
				Type: {$sender->FileType}";
		}
	}

	public function fileUploadedMulti($sender,$param)
	{
	  foreach($sender->getFiles() as $file)
	  {
	    if($file->getHasFile()) {
	      $this->ResultMulti->Text.="
	  				<p>You just uploaded a file:
	  				<br/>
	  				Name: {$file->FileName}
	  				<br/>
	  				Size: {$file->FileSize}
	  				<br/>
	  				Type: {$file->FileType}</p>";
	    }
	  }
	}
}

