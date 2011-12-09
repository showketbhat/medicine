<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
  </head>
  <body>
    <?php echo $sf_content ?>
  </body>
</html>

<?php ?>

<!-- apps/frontend/templates/layout.php -->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	
<!-- 		<title>Jobeet - Your best job board</title> -->
	
		<!--Default Title For Pages Without Provided Title below way or the comented belower one -->
		<title>
			<?php include_slot('title', 'Jobeet - Your best job board') ?> 
		</title>
		
		
		
		<title><?php include_slot('title') ?></title>   <!-- page no. 54 (We are adding a Slot here) -->

</html>