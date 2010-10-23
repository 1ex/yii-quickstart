<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset-fonts-grids.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

</head>
<body>
	<div id="doc3" class="yui-t2">
		<div id="header" >
			<!-- header --> &nbsp;
			<h1>Header</h1>
		</div> 
		<div id="bd">
   			<!-- body -->
			<div id="yui-main">
				<div class="yui-b" id="rightcolumn">
					<!-- right --> &nbsp;
				  <div id="content">
					<?php echo $content; ?>
					</div>
				</div>
			</div>
		        <div class="yui-b" id="leftcolumn"> 
			<?php
								$w=$this->widget('zii.widgets.CMenu',array(
										'items'=>$this->mainMenu,
										'id'=>'mainmenu'
								));
			 ?>
					<!-- right --> &nbsp;
			</div>
		</div> 
		<div id="footer">
			<!-- footer -->
			<h1>Footer</h1>
		</div> 
</div>
</body>
</html>
