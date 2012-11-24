<?php

require_once "ajax.php";

$ajax = ajax();


//button id, upload directory
$ajax->uploader('btn_saveForm', null, 
	//settings are optional
	array(
		'url' => 'ajax.php?upload_file/post', //post request after files are uploaded
		'suffix' => time(), // makes files names universally unique,
		'debug' => 'Debug Option is turned on this Demo.',
		'success_message' => 'File(s) @files successfully uploaded.' //@files tag is replaced by files uploaded.
	)
);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $ajax->init();?>
	<title>Ajax Uploader</title>
	<!-- These files below are only for presentation, not with the example itself. -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="resources/send_form/view.css" media="all">
	<script type="text/javascript" src="resources/send_form/view.js"></script>
</head>
<h2>Plugin Ajax Uploader</h2>

This plugin is the former $ajax->upload() API, converted into an stand alone plugin. If you were using the
$ajax->upload() APi, you must now download the plugin 'uploader'.

<br />
<h4>Download</h4>
<ul>
 <li><a target="_blank" href="http://sourceforge.net/projects/cjax/files/Plugins/">http://sourceforge.net/projects/cjax/files/Plugins/</a></li>
</ul>
<br />
Code Used:
<?php 
$code = $ajax->code("
//button id, upload directory
\$ajax->uploader('btn_saveForm', 'your/upload/directory', 
	//settings are optional
	array(
		'url' => 'ajax.php?upload_file/post', //submit request after files are uploaded
		'suffix' => time(), // makes files names universally unique
		'debug' => true, //Remove if you are not debugging.
		'success_message' => 'File(s) @files successfully uploaded.'//@files tag is replaced by files uploaded.
	)
);


");?>
Controller:
<?php 

$code .= $ajax->code("
//controllers/upload_file.php
class upload_file {

	function post(\$files)
	{
		\$ajax = ajax();
		
		\$ajax->wait(3);
		
		//files listed under 'files' array are files that were successfully uploaded
		\$ajax->alert(\"Controller Response:\\n\".print_r(\$files,1));
		
	}
}
");

$ajax->Exec('code', $ajax->dialog($code,'Code Used', array('width' => '900px','top'=> '30px')));
?>
<h3>See code used</h3>
<a id='code' href=''>View Code</a>
<br />
<h4>Note</h4>
Debug option is on this demo.
<body id="main_body" >
	<img id="top" src="resources/send_form/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Upload file using Ajax..</a></h1>

		<form id="form1" class="appnitro"  method="post" action="">
		<div class="form_description">
			<h2>Upload Files</h2>
			<p>Upload files using ajax...</p>
		</div>						
		<ul>
		<li id="li_3" >
		<label class="description" for="element_3">Select File </label>

		<div>
			<input name="my_file[]" class="element text medium" type="file" maxlength="255" value=""/> 
		</div> 
		</li>
		<li id="li_4" >
		<label class="description" for="element_4">Select File 2 </label>

		<div>
			<input name="my_file[]" class="element text medium" type="file" maxlength="255" value=""/> 
		</div> 
		</li>
		<li id="li_4" >
		<label class="description" for="element_4">Select File 3 </label>

		<div>
			<input name="xfile" class="element text medium" type="file" maxlength="255" value=""/> 
		</div> 
		</li>
		<li class="buttons">
				<input id="btn_saveForm" class="button_text" type="submit"  value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="resources/send_form/bottom.png" alt="">
	</body>
</html>
</body>
</html>
