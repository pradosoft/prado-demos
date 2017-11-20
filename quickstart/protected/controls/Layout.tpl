<!DOCTYPE html>
<html lang="en">
<com:THead Title="PRADO QuickStart Tutorial">
	<meta charset="utf-8" />
</com:THead>

<body>
<com:TForm>
<div id="header">
<div class="title">Prado QuickStart Tutorial</div>
<div class="image"></div>
</div>

<com:TPanel ID="MainMenu" CssClass="mainmenu">
<div style="float:left; color:black; margin-top:-5px">
	<com:SearchBox />
</div>
<a href="?">Home</a> |
<a href="https://github.com/pradosoft/prado">Prado framework</a> |
<com:THyperLink ID="PrinterLink" Text="Printer-friendly Version" />
</com:TPanel>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" width="1">
<com:TopicList ID="TopicPanel" />
</td>
<td valign="top">
<!---
<com:TRepeater ID="languages" OnItemCreated="languageLinkCreated">
	<prop:HeaderTemplate>
		<div class="languages">Available Languages: <ul>
	</prop:HeaderTemplate>
	<prop:ItemTemplate>
		<li><com:THyperLink ID="link" Text=<%# $this->DataItem %> /></li>
	</prop:ItemTemplate>
	<prop:FooterTemplate>
		</ul></div>
	</prop:FooterTemplate>
</com:TRepeater>
--->
<div id="content">
<p class="block-content" id="top-content" style="border-color: transparent; height:1px; margin: 0; padding: 0; background-color: transparent"></p>
<com:TContentPlaceHolder ID="body" />
</div>
</td>
</tr>
</table>

<div id="footer">
Copyright &copy; 2005-<%= date('Y') %> <a href="https://github.com/pradosoft">The PRADO Group</a>.
<br/><br/>
<%= Prado::poweredByPrado() %>
</div>

</com:TForm>
</body>
</html>