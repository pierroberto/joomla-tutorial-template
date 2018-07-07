<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>templates/mytemplate/css/main.css" type="text/css" />
    </head>
    <body>
    <jdoc:include type="modules" name="top" /> 
    <jdoc:include type="component" />
    <jdoc:include type="modules" name="bottom" />
    </body>
</html>