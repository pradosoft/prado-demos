<!DOCTYPE html>
<html lang="en">
<com:THead Title="SQLMap for PHP Manual">
	<meta charset="utf-8" />
</com:THead>

<body>
<com:TForm>
<div id="header">
<div class="title">PRADO Time Tracker Guide</div>
<div class="image_sqlmap"></div>
</div>

<com:TPanel ID="MainMenu" CssClass="mainmenu">
<a href="?">Home</a> |
<a href="https://github.com/pradosoft/prado">Prado framework</a> |
<com:THyperLink ID="PrinterLink" Text="Printer-friendly Version" />
</com:TPanel>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" width="1">
<com:Application.pages.Manual.TopicList ID="TopicPanel" />
</td>
<td valign="top">
<div id="content">
<com:TContentPlaceHolder ID="body" />
</div>
</td>
</tr>
</table>

<div id="footer">
Copyright &copy; 2005-<%= date('Y') %> <a href="https://github.com/pradosoft">The PRADO Group</a>.
<br/><br/>
</div>

</com:TForm>
</body>
</html>