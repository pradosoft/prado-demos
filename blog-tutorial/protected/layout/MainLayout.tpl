<!DOCTYPE html>
<html lang="en">
<com:THead Title="PRADO Blog Tutorial">
	<meta charset="utf-8" />
</com:THead>

<body>
<com:TForm>
<div id="header">
<div class="title">PRADO for Dummies</div>
<div class="image"></div>
</div>

<com:TPanel ID="MainMenu" CssClass="mainmenu">
<a href="?">Home</a> |
<a href="https://github.com/pradosoft/prado">Prado Project</a>
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
		<li><com:THyperLink ID="link" Text=<%# $this->Data %> /></li>
	</prop:ItemTemplate>
	<prop:FooterTemplate>
		</ul></div>
	</prop:FooterTemplate>
</com:TRepeater>
--->
<div id="content">
<com:TContentPlaceHolder ID="Main" />
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