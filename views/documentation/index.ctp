<div class="hero-unit">
      <h2>Documentation <small>how to's</small><h2>
      <p>
          Tutorials and generic documentation is being added, stay tuned!
      </p>
</div>

<div class="row-fluid">
  <div class="span5">
    <h3>Getting Started</h3>
    <p>
      <ul class="nav nav-list">
        <li><?=$html->link('Overview', array('action' => 'overview'));?></li>
        <li><?=$html->link('DudaC - Client Manager', array('action' => 'dudac'));?></li>
      </ul>
    </p>

    <h3>Tutorials</h3>
    <p>
      <ul class="nav nav-list">
        <li><?=$html->link('Hello World! in 5 steps', array('action' => 'hello_world_5_steps'));?> </li>
      </ul>
    </p>
  </div>
  <div class="span5">
    <h3>API Documentation</h3>
    <p>
      The API Objects and Packages are fully documented <a href="http://duda.io/api/">here</a>
    </p>
  </div>
</div>
