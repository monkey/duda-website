<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		Duda - Web Services Framework -
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('bootstrap');
                echo $html->css('bootstrap-responsive');

		echo $scripts_for_layout;
	?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41677523-1', 'duda.io');
  ga('send', 'pageview');

</script>

</head>
<body>
    <div class="navbar navbar-inner">
      <div class="navbar-inner">
        <div class="container">
         <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

         <div class="row-fluid">
           <div class="span1">
           </div>
           <div class="span1 offset1" style="padding-top: 0.3em; text-align:right;">
              <? echo $html->image('monkey_head.png'); ?>
           </div>
           <div class="span10">
             <? echo $html->link('Duda I/O',
                                      array('controller' => '/'),
                                      array('class' => 'brand', 'style' => 'color: #eae8d2;'));
                  ?>

             <div class="nav-collapse collapse">
               <ul class="nav">
                 <li class="">
                   <? echo $html->link('About', array('controller' => 'documentation',
                                                     'action' => 'overview')); ?>
                 </li>
                 <li class="">
                   <? echo $html->link('Documentation', array('controller' => 'documentation/')); ?>
                 </li>
                 <li class="">
                   <? echo $html->link('Download', array('controller' => 'download/')); ?>
                 </li>
               </ul>
             </div>

           </div> <!-- span8 -->
         </div>
        </div>
      </div>
    </div>

    <div class="container"  style="text-align:center">
      <div class="row-fluid">
        <div class="span10" style="text-align:left;">
          <?php $session->flash(); ?>
          <?php echo $content_for_layout; ?>
        </div>

        <div class="span2" style="text-align:left">
          <h4>Get started</h4>
          <ul>
	    <li><a href='http://git.monkey-project.com'>Browse Code</a></li>
	    <li><a href='http://lists.monkey-project.com/listinfo/duda'>Mailing List</a></li>
          </ul>
          <h4>Documentation</h4>
          <ul>
	    <li><a href='http://duda.io/api'>API</a></li>
	    <li><a href='http://duda.io/documentation'>How To's</a></li>
          </ul>

        </div>



      </div>
    </div>
    <hr>
      <footer style="text-align:center">
        <p>&copy; Copyright 2013 / Duda I/O - <a href="http://edsiper.linuxchile.cl">Eduardo Silva</a></p>
      </footer>


</body>
</html>
