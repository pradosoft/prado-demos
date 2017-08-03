<!DOCTYPE html>
<html lang="en">
<com:THead Title=<%$ SiteTitle %> >
<meta charset="utf-8" />
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
</com:THead>

<body>
<div id="page">
<com:TForm>

<div id="header">
<h1 id="header-title"><a href="<%=$this->Request->ApplicationUrl %>"><%$ SiteTitle %></a></h1>
<h2 id="header-subtitle"><%$ SiteSubtitle %></h2>
</div><!-- end of header -->

<div id="main">
<com:TContentPlaceHolder ID="Main" />
</div><!-- end of main -->

<div id="sidebar">

<com:Application.Portlets.LoginPortlet Visible=<%= $this->User->IsGuest %>/>

<com:Application.Portlets.AccountPortlet Visible=<%= !$this->User->IsGuest %>/>

<com:Application.Portlets.SearchPortlet />

<com:Application.Portlets.CategoryPortlet />

<com:Application.Portlets.ArchivePortlet />

<com:Application.Portlets.CommentPortlet />

</div><!-- end of sidebar -->

<div id="footer">
Copyright &copy; <%= date('Y') %>, <%$ SiteOwner %>.<br/>
<%= Prado::poweredByPrado() %>
</div><!-- end of footer -->

</com:TForm>
</div><!-- end of page -->
</body>
</html>