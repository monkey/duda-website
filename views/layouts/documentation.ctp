<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
                Monkey HTTP Daemon - Documentation:
                <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('bootstrap');
                echo $html->css('bootstrap-responsive');

		echo $scripts_for_layout;
	?>
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
              <div class="span1" style="padding-top: 0.3em;">
                  <? echo $html->image('monkey_head.png'); ?>
              </div>
              <div class="span8">
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

                  <li class="divider-vertical"></li>

                  </ul>
             </div> <!-- end span8 -->
          </div> <!-- end row fluid -->

        </div>
      </div>
    </div>
   </div>

   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span2">
           <!-- Left menu -->
           <ul class="nav nav-list">
               <li class="nav-header">
                  GETTING STARTED
               </li>
               <li>
                  <?=$html->link('Overview', array('action' => 'overview'));?>
               </li>
               <li>
                 <?=$html->link('Manual Setup', array('action' => 'manual_setup'));?>
               </li>
               <li>
                  <?=$html->link('Duda Client (DudaC)', array('action' => 'dudac'));?>
               </li>
               <li class="nav-header">
                  Tutorials
               </li>
               <li>
                  <?=$html->link('Hello World ! in 5 steps', array('action' => 'hello_world_5_steps'));?>
               </li>
             </ul>
      </div>
      <div class="span7">
          <?php $session->flash(); ?>
          <?php echo $content_for_layout; ?>
      </div>
    </div>
    <hr>
    <footer>
      <p>&copy; Copyright 2012-2014 / Duda I/O - Eduardo Silva</p>
      </footer>
   </div> <!-- container -->

</body>
</html>
