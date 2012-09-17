
  <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">

      <div class="row-fluid">

        <div class="span10">
          <br>
          <h1>Duda web services <small>framework</small></h1>
          <p>
             Duda I/O is an event driven web services framework which exposes a friendly C API.
          </p>
          <p>
             It has been designed to be very scalable with low memory and CPU consumption, the perfect solution for embedded
             and high production environments. Made for ARM, x86 and x86_64.
             <br><br>
          </p>

          <div class="row-fluid">
            <div class="span6" style="text-align:center">
                  <a class="btn btn-warning btn-large"
                     href="http://git.monkey-project.com/?p=duda;a=summary">
                  <i class="icon-white icon-download-alt"></i>
                     GIT Repository... &raquo;
                  </a>
            </div>
            <div class="span6" style="text-align:center">
                  <a class="btn btn-info btn-large" href="./about">
                  <i class="icon-white icon-info-sign"></i>
                  Learn more... &raquo;</a>
            </div>
          </div> <!-- end of row-fluid -->
        </div> <!-- end of span8 -->

        <div class="span2">
           <br>
           <h2>Shortcuts</h2>
		<ul>
			<li><a href='http://git.monkey-project.com'>Browse Code</a></li>
			<li><a href='http://lists.monkey-project.com/listinfo/duda'>Mailing List</a></li>
		</ul>
        </div>

      </div>   <!-- end of row -->
      </div>

      <div class="row">
          <div class="span6">
                 <h2>Why Duda ?</h2>
                  <p></p>
	          <p>
                       Most of web services implementations around lack of good perfomance and in order to have an optimal performance requires
                        to consume high system resources.
                       As opposite, Duda is built with high performance and low resources consumption in mind, it takes the most of Monkey web server
                       to archieve it goals.
 	          </p>
                  <p>
                       We invite you to review our initial blog post about Duda and a comparisson about performance and resources usage:
                       <br>
                       <ul>
                       <? echo $html->link('Duda web services framework for Monkey', 'http://blog.monkey-project.com/2012/03/13/duda-web-services-framework-for-monkey/');?>
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
          <div class="span3">
           <h2>The Stack</h2>
               <p>The HTTP core is powered by <a href="http://monkey-project.com">Monkey</a>, a strong and mature open source web server for GNU/Linux.
                  <a href="http://duda.io">Duda</a> is
                  implemented as a plugin who wraps the Monkey internals and expose a <a href="http://duda.io/api">C friendly API</a> in pseudo-objects style.
               </p>
               <p>
                  Besides the core objects, it provides a packages system, so every web service can load on startup a third party object, at the moment the
                  following packages are available: Websocket, JSON, SQLite, SHA1 and Base64.
               </p>
               <p>
                  The networking model is based in asynchronous sockets balanced through a number of fixed threads, on this way it archieve huge performance
                  and scale properly ondemand.
               </p>
          </div>
          <div class="span3">
                 <? echo $html->image('duda_architecture.png'); ?>
          </div>
      </div>
      <div class="row">
          <div class="span12">
                 <h2>API</h2>
                 <p>
                    Duda framework offers an easy to use API which expose core objects and the availability to include packages:
                    <h3>Core Objects</h3>
                    <ul>
                      <li>Global: handle global variables</li>
                      <li>Param: manage URL parameters or POST content</li>
                      <li>Sendfile: send a file using asynchronous mechanism</li>
                      <li>Session: helper to handle user sessions</li>
                      <li>Utils: utilities</li>
                      <li>XTime: time related methods</li>
                      <li>Console: print out information from the webservice</li>
                      <li>Debug: debug object to trace the web service behavior</li>
                    </ul>

                    <h3>Packages</h3>
                    <ul>
                      <li>SHA1: provides SHA1 encription routines</li>
                      <li>Base64: provides Base64 encription routines</li>
                      <li>JSon: object to compose JSON content</li>
                      <li>SQLite: object to manage a SQLite DB instance</li>
                    </ul>
                 </p>
        <br>
          </div>
      </div>