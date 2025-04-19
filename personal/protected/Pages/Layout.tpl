<!DOCTYPE html>
<html lang="en">
<com:THead Title="Your Name Here | Home">
	<meta charset="utf-8" />
</com:THead>

<body>
<com:TForm>

<div class="header">
<h1>Your Name Here</h1>
<h2><%$siteName%></h2>

<div class="mainmenu">
<com:MainMenu />
</div>

</div>

<div class="shim column"></div>

<div class="page" id="home">

<div id="sidebar">
<com:TContentPlaceHolder ID="sidebar"/>
</div>

<div id="content">
<com:TContentPlaceHolder ID="content"/>
</div>

</div>

<div class="footerbg">
<div class="footer">
<com:MainMenu />
<br/>
Copyright &copy; 2006-2015 Your Name here.<br/>
Powered by <a href="https://github.com/pradosoft/prado">PRADO</a>.
</div>
</div>

</com:TForm>
</body>
</html>