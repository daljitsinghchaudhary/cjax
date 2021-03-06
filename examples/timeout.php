<?php
//core file, reference..
require_once "ajax.php";

$ajax = ajax();



//timeout 5 seconds
$ajax->wait(5);

//alert after the 5 seconds
$ajax->overlayContent("5 seconds passed before displaying this.");

//update the content on the page
$ajax->update('wait_div','wait 3 more..');

//wait 3 more seconds
$ajax->wait(4);

//clear overlay
$ajax->overlayContent();

//display a message in the middle of the screen, in warning format
$ajax->warning("3 more seconds passed before displaying this.");

//wait 2 more seconds
$ajax->wait(4);

//update page content
$ajax->update('wait_div','This was a timeout example..');

$ajax->wait(false);

$ajax->process("This message is last... but it has no waiting time..");
?>
<!doctype html>
<head>
    <link rel="stylesheet" type="text/css" href="resources/css/user_guide.css" media="all">
    <title>Ajax Timeouts</title>
    <?php echo $ajax->init(false);?>
</head>
<body>
<header>
    <div style='padding: 15px;'>
        <a href='http://cjax.sourceforge.net'><img src='http://cjax.sourceforge.net/media/logo.png' border=0/></a>
    </div>
</header>
<!-- START NAVIGATION -->
<div id="nav"><div id="nav_inner"></div></div>
<div id="nav2"><a name="top">&nbsp;</a></div>
<div id="masthead">
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%">
        <tr>
            <td><h1>Cjax Framework</h1></td>
            <td id="breadcrumb_right"><a href="#">Demos</a></td>
        </tr>
    </table>
</div>
<!-- END NAVIGATION -->



<!-- START BREADCRUMB -->
<table cellpadding="0" cellspacing="0" border="0" style="width:100%">
    <tr>
        <td id="breadcrumb">
            <a href="http://cjax.sourceforge.net/">Project Home</a> &nbsp;&#8250;&nbsp;
            <a href="./">Demos</a> &nbsp;&#8250;&nbsp;
            Ajax Timeouts
        </td>
        <td id="searchbox"><form method="get" action="http://www.google.com/search"><input type="hidden" name="as_sitesearch" id="as_sitesearch" value="cjax.sourceforge.net/" />Search Project User Guide&nbsp; <input type="text" class="input" style="width:200px;" name="q" id="q" size="31" maxlength="255" value="" />&nbsp;<input type="submit" class="submit" name="sa" value="Go" /></form></td>
    </tr>
</table>
<!-- END BREADCRUMB -->

<br clear="all" />

<div id="content">


    <!-- Text -->


    <br />

    <h3>Examples</h3>


    <!-- Code Used -->
    <br />
    <?php
    echo $ajax->code("
\$ajax->wait(5);
\$ajax->overlayContent(\"5 seconds passed before displaying this.\");
\$ajax->update('wait_div','wait 3 more..');
\$ajax->wait(3);
//clear overlay
\$ajax->overlayContent();
\$ajax->warning(\"3 more seconds passed before displaying this.\");
\$ajax->wait(2);
\$ajax->update('wait_div','This was a timeout example..');
\$ajax->wait(false);
\$ajax->process(\"This message is last... but it has no waiting time..\");
", true, true);?>


    <!-- HTML -->
    <div id='wait_div'>
        Please wait.. (5 seconds )
    </div>

    <br />
</div>
<!-- END CONTENT -->

<div id="myfooter">
    <p>
        Previous Topic:&nbsp;&nbsp;<a href="#">Previous Class</a>
        &nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;
        <a href="#top">Top of Page</a>&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;
        <a href="http://cjax.sourceforge.net/examples">Demos Home</a>&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;
        <!-- Next Topic:&nbsp;&nbsp;<a href="#">Next Class</a> -->
    </p>
    <p>
        <a href="http://codeigniter.com">CodeIgniter</a> &nbsp;&middot;&nbsp; Copyright &#169; 2006 - 2012 &nbsp;&middot;&nbsp;
        <a href="http://cjax.sourceforge.net/">Cjax</a>
    </p>
</div>

</body>
</html>