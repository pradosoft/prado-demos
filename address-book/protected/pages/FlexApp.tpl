<script src="<%= $this->BinDirectory %>/AC_OETags.js" language="javascript"></script>
<script language="JavaScript" type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Globals
// Major version of Flash required
var requiredMajorVersion = 9;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Minor version of Flash required
var requiredRevision = 0;
// -----------------------------------------------------------------------------
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
// Version check for the Flash Player that has the ability to start Player Product Install (6.0r65)
var hasProductInstall = DetectFlashVer(6, 0, 65);

// Version check based upon the values defined in globals
var hasRequestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);


// Check to see if a player with Flash Product Install is available and the version does not meet the requirements for playback
if ( hasProductInstall && !hasRequestedVersion ) {
	// MMdoctitle is the stored document.title value used by the installation process to close the window that started the process
	// This is necessary in order to close browser windows that are still utilizing the older version of the player after installation has completed
	// DO NOT MODIFY THE FOLLOWING FOUR LINES
	// Location visited after installation is complete if installation is required
	var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
	var MMredirectURL = window.location;
    document.title = document.title.slice(0, 47) + " - Flash Player Installation";
    var MMdoctitle = document.title;

	AC_FL_RunContent(
		"src", "<%= $this->BinDirectory %>/playerProductInstall",
		"FlashVars", "MMredirectURL="+MMredirectURL+'&MMplayerType='+MMPlayerType+'&MMdoctitle='+MMdoctitle+"",
		"width", "<%= $this->Width %>",
		"height", "<%= $this->Height %>",
		"align", "<%= $this->Align %>",
		"id", "<%= $this->AppName %>",
		"quality", "<%= $this->Quality %>",
		"bgcolor", "<%= $this->BgColor %>",
		"name", "<%= $this->AppName %>",
		"allowScriptAccess","<%= $this->AllowScriptAccess %>",
		"type", "application/x-shockwave-flash",
		"pluginspage", "http://www.adobe.com/go/getflashplayer"
	);
} else if (hasRequestedVersion) {
	// if we've detected an acceptable version
	// embed the Flash Content SWF when all tests are passed
	AC_FL_RunContent(
			"src", "<%= $this->BinDirectory %>/<%= $this->AppName %>",
			"width", "<%= $this->Width %>",
			"height", "<%= $this->Height %>",
			"align", "<%= $this->Align %>",
			"id", "<%= $this->AppName %>",
			"quality", "<%= $this->Quality %>",
			"bgcolor", "<%= $this->BgColor %>",
			"name", "<%= $this->AppName %>",
			"flashvars",'<%= $this->FlashVars %>',
			"allowScriptAccess","<%= $this->AllowScriptAccess %>",
			"type", "application/x-shockwave-flash",
			"pluginspage", "http://www.adobe.com/go/getflashplayer"
	);
  } else {  // flash is too old or we can't detect the plugin
    var alternateContent = 'Alternate HTML content should be placed here. '
  	+ 'This content requires the Adobe Flash Player. '
   	+ '<a href=http://www.adobe.com/go/getflash/>Get Flash</a>';
    document.write(alternateContent);  // insert non-flash content
  }
// -->
</script>
<noscript>
  	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
			id="<%= $this->AppName %>" width="<%= $this->Width %>" height="<%= $this->Height %>"
			codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
			<param name="flashvars" value="<%= $this->FlashVars %>" />
			<param name="movie" value="<%= $this->BinDirectory %>/<%= $this->AppName %>.swf" />
			<param name="quality" value="<%= $this->Quality %>" />
			<param name="bgcolor" value="<%= $this->BgColor %>" />
			<param name="allowScriptAccess" value="<%= $this->AllowScriptAccess %>" />
			<embed src="<%= $this->BinDirectory %>/<%= $this->AppName %>.swf?<%= $this->FlashVars %>" quality="<%= $this->Quality %>" bgcolor="<%= $this->BgColor %>"
				width="<%= $this->Width %>" height="<%= $this->Height %>" name="<%= $this->AppName %>" align="<%= $this->Align %>"
				play="true"
				loop="false"
				quality="<%= $this->Quality %>"
				allowScriptAccess="<%= $this->AllowScriptAccess %>"
				type="application/x-shockwave-flash"
				pluginspage="http://www.adobe.com/go/getflashplayer">
			</embed>
	</object>
</noscript>
