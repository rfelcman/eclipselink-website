<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Nav->setLinkList( array() );
$Nav->addNavSeparator( "Project Name", "/shortname" );
$Nav->addCustomNav( "About This Project",
    "/projects/project_summary.php?projectid=rt.eclipselink", "", 1  );

	
	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: mkeith, frostc, dclarke, pkrogh
 *    
 *******************************************************************************/

	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, project, eclipselink, persistence";
	$pageAuthor		= "Doug Clarke";
	$pageTitle 		= "EclipseLink Home";
	
	ob_start();
?>
<div class="logoBanner"><a href="/eclipselink"><img src="/eclipselink/images/logo.png" /></a></div>
<div id="bigbuttons">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="bigbuttonsAbout">
					<a href="/projects/project_summary.php?projectid=rt.eclipselink"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/projects/project_summary.php?projectid=rt.eclipselink">Project Summary</a>, 
						<a href="/eclipselink/releases">Releases</a>, <br/>
						<a href="/eclipselink/team/">Committers</a> and more...
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsDocumentation">
					<a href="/eclipselink/documentation/index.php"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/eclipselink/documentation/index.php">Doc Center</a>,
						<a href="/eclipselink/api/index.php"> Java Docs</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/Examples"> Examples</a>,
						<a href="http://wiki.eclipse.org/EclipseLink/FAQ"> FAQ</a>, <br/>
						<a href="/eclipselink/releases/2.4.php">2.4 New and Noteworthy</a>
					</span>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="bigbuttonsCommunity">
					<a href="/eclipselink/community.php"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="http://wiki.eclipse.org/EclipseLink">Wiki</a>,
						<a href="/forums/index.php/f/111/"> Newsgroup</a>,<br/>
						<a href="http://dev.eclipse.org/mhonarc/lists/eclipselink-users/maillist.html">User Mailing List</a>
					</span>
				</div>
			</td>
			<td>
				<div class="bigbuttonsDownloads">
					<a href="/eclipselink/downloads/"><div class="bigbuttonsTitleLink"></div></a>
					<span>
						<a href="/eclipselink/releases">Releases</a>,
						<a href="/eclipselink/downloads">Latest Release</a>,
						<a href="/eclipselink/downloads/milestones.php">Milestone Builds</a>, 
						<a href="/eclipselink/downloads/nightly.php">Nightly Builds</a>, and
						<a href="http://wiki.eclipse.org/EclipseLink/Maven">Maven</a>, 
					</span>
				</div>
			</td>
		</tr>
	</table>
</div>

<div id="midcolumn">
	
	<div class="homeitem3col">
		<h2>EclipseLink Project</h2>
		<p>
			The EclipseLink project delivers a comprehensive open-source Java persistence solution addressing relational, XML, and database web services.
		</p>
	</div>

 

	<div class="homeitem3col">
			<h3>Getting Started</h3>
			<p>
				Select a persistence service and learn more about how to
				get started developing with EclipseLink.
			</p>
		<table width="100%">
		<tr align="center">
			<td width="33% align="center">
				<p style="text-align:center">
				<a href="jpa.php">
				<font size=+4>JPA<br/>Relational</font><br/>
				<img src="/eclipselink/images/Eclipselink_jpa.png" border="0" /><br/>
				</a></p>
			</td>
			<td width="33% align="center">
				<p style="text-align:center">
				<a href="moxy.php">
				<font size=+4>MOXy Binding<br/>XML and JSON</font><br/>
				<img src="/eclipselink/images/Eclipselink_moxy.png" border="0" /><br/>
				</a></p>
			</td>
			<td width="33% align="center">
				<p style="text-align:center">
				<a href="dbws.php">
				<font size=+4>Database Web Services<br/>JAX-WS and JAX-RS</font><br/>
				<img src="/eclipselink/images/Eclipselink_dbws.png" border="0" /><br/>
				</a></p>
			</td>
			<td width="33% align="center">
				<p style="text-align:center">
				<a href="dbws.php">
				<font size=+4>NoSQL</font><br/>
				<img src="/eclipselink/images/nosql.jpg" border="0" /><br/>
				</a></p>
			</td>
		</tr>
		</table>
	</div>

	<div class="section">
			<h3>News</h3>
			<ul>
				<li><a href="/eclipselink/releases/2.4.php">EclipseLink 2.4.1 released</a> - <i>Oct 10th, 2012</i></li>
				<li><img src="http://marketplace.eclipse.org/sites/all/themes/nova/images/favorite.png"><a href="/eclipselink/releases/2.4.php">EclipseLink 2.4.0 (Juno) released</a> - <i>June 27, 2012</i></li>
				<li><a href="/eclipselink/releases/2.3.0.php">EclipseLink 2.3.3 released</a> - <i>July 3rd, 2012</i></li>
				<li><a href="/eclipselink/releases/2.3.0.php">EclipseLink 2.3.2 released</a> - <i>Dec 9th, 2011</i></li>
				<li><a href="/eclipselink/releases/2.3.0.php">EclipseLink 2.3.1 released</a> - <i>Nov 11 th, 2011</i></li>
			</ul>
	</div>

	<div class="section">
			<h3>Learn More</h3>
			<ul>
				<li><a href="http://refcardz.dzone.com/refcardz/eclipselink-jpa">EclipseLink RefCard</a> - <i>May 30, 2011</i></li>
			</ul>
			<ul>
				<li>Article: <a href="http://eclipse.dzone.com/articles/introducing-eclipselink">Introducing EclipseLink (Eclipse Zone)</a> - <i>June 30, 2008</i></li>
			</ul>
	</div>

</div>

<div id="rightcolumn">


		<div class="sideitem">
			<h6>EclipseLink Search</h6>
<div id="cse-search-form" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.SHINY});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var customSearchControl = new google.search.CustomSearchControl(
      '016171230611334810008:ob2bbia9swa', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);

    var googleAnalyticsOptions = {};
    googleAnalyticsOptions['queryParameter'] = 'q';
    googleAnalyticsOptions['categoryParameter'] = '';
    customSearchOptions['googleAnalyticsOptions'] = googleAnalyticsOptions;  var customSearchControl = new google.search.CustomSearchControl(
      '016171230611334810008:ob2bbia9swa', customSearchOptions);
    
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    options.enableSearchboxOnly("http://www.google.com/cse?cx=016171230611334810008:ob2bbia9swa");
    customSearchControl.draw('cse-search-form', options);
  }, true);
</script>
		</div>


		<div class="sideitem">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'eclipselink',
  interval: 6000,
  title: 'What is being said about...',
  subject: 'EclipseLink',
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: '#8ec1da',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: true,
    behavior: 'default'
  }
}).render().start();
</script>
		</div>
		
		<div class="sideitem">
			<h6>Blogs</h6>
			<ul>
			    <li><a href="http://eclipselink.blogspot.com">EclipseLink</a></li>
			    <li><a href="http://java-persistence.blogspot.com">Java Persistence</a></li>
			    <li><a href="http://onpersistence.blogspot.com">On Persistence</a></li>
			    <li><a href="http://bdoughan.blogspot.com">Java XML Binding</a></li>
			</ul>
		</div>

		<div class="sideitem">
			<h6>EclipseLink Powered</h6>
			<ul>
				<li><a href="http://glassfish.java.net/">GlassFish Server</a></li>
				<li><a href="http://www.oracle.com/technetwork/middleware/toplink/overview/index.html">Oracle TopLink</a></li>
				<li><a href="http://www.oracle.com/technetwork/middleware/weblogic/index.html">Oracle WebLogic Server</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
		<div align="center">
			<a href="/eclipsert/"><img src="/equinox/images/EclipseRT.png" alt="EclipseRT"></a>
		</div>
		<script type="text/javascript" src="http://www.ohloh.net/p/13434/widgets/project_partner_badge.js"></script>
		</div>
</div>

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>