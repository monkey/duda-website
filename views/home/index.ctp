
  <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">

      <div class="row-fluid">

        <div class="span10">
          <br>
          <h1>Duda web services <small>framework</small></h1>
          <p>
              Duda is a event-driven web services framework built on top of Monkey Web Server,
          </p>
          <p>
 It has been designed to
             be very scalable with low memory and CPU consumption, the perfect solution for embedded
             devices. Made for ARM, x86 and x86_64.
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
			<li><a href='http://lists.monkey-project.com'>Mailing Lists</a></li>
		</ul>
        </div>

      </div>   <!-- end of row -->
      </div>

      <div class="row">
          <div class="span12">
                 <h2>Why Duda ?</h2>
                  <p></p>
	          <p>
                       Most of web services implementations around lack of good perfomance or depends of high system resources.
                       Duda is a web services framework which works on top of Monkey Web Server so it take the most of it features
                       and expose it APIs in a friendly manner.
 	          </p>
                  <p>
                       We invite you to review our initial blog post about Duda and a comparisson about performance and resources usage
                       against NodeJS:
                       <br><br>
                       <? echo $html->link('Duda web services framework for Monkey', 'http://blog.monkey-project.com/2012/03/13/duda-web-services-framework-for-monkey/');?>
                 </p>
        <br>
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