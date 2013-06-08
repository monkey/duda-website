<?php

class DocumentationController extends AppController {
	var $name = 'Documentation';
	var $helpers = array('Html');
	var $uses = array();

	function index(){
	}

        function overview() {
          $this->pageTitle = 'Duda: Overview';
        }

        function dudac() {
          $this->pageTitle = 'DudaC - Client Manager';
        }

        function manual_setup() {
          $this->pageTitle = 'Duda: Manual Setup';
        }

        function hello_world_5_steps() {
          $this->pageTitle = 'Duda: Hello World! in 5 steps';
        }

        function beforeFilter() {
          parent::beforeFilter();

          if ($this->action != "index") {
            $this->layout = "documentation";
          }
	}

        function beforeRender() {
          $this->set('title_for_layout', $this->pageTitle);
        }
}

?>
