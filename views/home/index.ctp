
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
  <div class="row-fluid">
    <div class="span12">
      <h1>Duda I/O <small>High Performance Web Backends / Development Stack</small></h1>
      <p>
        Duda I/O is an event driven web services framework. It has been designed to be very
        scalable with low memory and CPU consumption, the perfect solution High Production
        servers and Embedded environments, it's made for x86_64, x86 and ARM.
      </p>
      <p>
        Achieve high performance is one of the principal goals, for hence the architecture
        is designed to take the most of the Linux Kernel. It provides a flexible packaging
        system, expose a friendly C API and support many features such as WebSockets, NoSQL,
        In-memory Key/Value store and much more.
        <br><br>
      </p>

      <div class="row-fluid">
        <div class="span4" style="text-align:center">
          <a class="btn btn-warning btn-large"
             href="https://github.com/monkey/duda">
            <i class="icon-white icon-download-alt"></i>
            GIT Repository... &raquo;
          </a>
        </div>
        <div class="span4" style="text-align:center">
          <a class="btn btn-info btn-large" href="./documentation/overview">
            <i class="icon-white icon-info-sign"></i>
            Learn more... &raquo;</a>
        </div>
        <div class="span4" style="text-align:center">
          <a class="btn btn-success btn-large" href="./slides/">
            <i class="icon-white icon-info-sign"></i>
            Presentation... &raquo;</a>
        </div>

      </div> <!-- end of row-fluid -->
    </div> <!-- end of span8 -->
  </div>   <!-- end of row -->
</div>

<div class="row-fluid">
  <div class="span4">
    <h2>Why Duda ?</h2>
    <p></p>
    <p>
      Most of web services implementations around lack of good perfomance and requires high system resources.
      As opposite, Duda is built with high performance and low resources consumption in mind, it takes the most of Monkey web server
      to achieve it goals.
    </p>
    <p>
      We invite you to review our presentation slides to see a comparisson about performance and resources usage:
      <br>
      <ul>
        <? echo $html->link('Duda I/O Presentation', 'http://duda.io/slides/');?>
      </ul>
    </p>
    <br>
    <h2>License: LGPLv2</h2>
    <p></p>
    <p>
      Duda is an open source project under the <a href="http://www.gnu.org/licenses/lgpl-2.1.html">GNU Lesser General Public License v2</a>. It means that you
      <b>don't</b> need to open source your project (as well you <b>don't</b> need to  pay any fee for the stack). If is the case, you are only forced to release the modifications performed to
      some stack component.
    </p>
    <br>
  </div>
  <div class="span4">
    <h2>The Stack</h2>
    <p>The HTTP core is powered by <a href="http://monkey-project.com">Monkey</a>, a strong and mature open source web server for GNU/Linux.
      <a href="http://duda.io">Duda</a> is
      implemented as a plugin who wraps the Monkey internals and expose a <a href="http://duda.io/api">C friendly API</a> in pseudo-objects style.
    </p>
    <p>
      Besides the core objects, it provides a packages system, so every web service can load on startup a third party object, at the moment the
      following packages are available: Websocket, JSON, SQLite, SHA1, Base64 and many others.
    </p>
    <p>
      The networking model is based in asynchronous sockets balanced through a number of fixed threads, on this way it achieve high performance
      and scale properly on demand.
    </p>
  </div>
  <div class="span4">
    <? echo $html->image('duda_architecture.png'); ?>
  </div>
</div>

<div class="row-fluid">
  <div class="span12">
    <h2>Enterprise & Stability</h2>
    <p>
      On e of the major concerns when developing on top of a framework, is about the stability and how the ongoing development may break
      your code when new changes or features arrives. At Duda I/O we understand Enterprise needs so we make sure to provide stable API levels
      where your service belongs to. Each API Level is under a long-term support mode where it only receive bug fixes. When a new API Level
      is released, a migration guide is provided and of course the migration optional. Keep safe and secure running your service for a long
      period of time.
    </p>
    <br>
  </div>
</div>

<div class="row-fluid">
  <div class="span12">
    <h2>Join us!</h2>
    <p>
      If you are interested into participate on this project feel free to contact us
      on irc.freenode.net #monkey or through our new
      <a href="http://lists.monkey-project.com/listinfo/duda">mailing list</a>.
    </p>
    <br>
  </div>
</div>
