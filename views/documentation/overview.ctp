<div class="hero-unit">
   <h2>Overview</h2>
   <p>
       A global overview of Duda technology and stack components
   </p>
</div>


<h3>Introduction</h3>
<p>
   Duda is a high performant framework which provides a complete software stack for the
   development and deployment of Web Services primary written in C language. The
   stack is optimized to be used on GNU/Linux distributions.
</p>
<p>
   The framework is composed by the following parts:

   <dl class="dl-horizontal">
     <dt>DudaC</dt>
     <dd>Formally <i>Duda Client Manager</i>, it is a helper for the development and easy
         deployment of web services. It takes care of the setup of the development environment cloning
         the respective stack components and building each one. It also allows to run a web service
         on fly just pointing to it source code.
         <br><br>
     </dd>

     <dt>Duda Plugin</dt>
     <dd>This plugin is an extension for <a href="http://monkey-project.com">Monkey Web Server</a>, it
         mainly wraps the Monkey API and expose a more friendly C API for building web services. This plugin
         also takes care to hide the complexity of the HTTP stack in terms of threading, balancing and
         asynchronous socket events.
         <br><br>
     </dd>

     <dt>HTTP Server</dt>
     <dd>
         As mentioned earlier, the HTTP stack is powered by <a href="http://monkey-project.com">Monkey</a>,
         a high performant and <i>Open Source Web Server</i>. Monkey is a HTTP/1.1 non-blocking web server
         implmented through a strategy of a number of fixed threads each one holding their own events
         queue. Its pretty scalable and can take the most of SMP systems.
         <br><br>
     </dd>

     <dt>Web Services</dt>
     <dd>
         A <i>Web Service</i> is a software component built on top of Duda Plugin API which execute different
         instructions through a mapping of HTTP URL requests and callback functions. In technical
         terms is a shared library loaded by Duda on runtime.
     </dd>
   </dl>
</p>

<h3>Non-blocking</h3>
<p>
   The whole HTTP stack is based in the non-blocking model for sockets, this means that it works on top
   of asynchronous events. Each working thread can scale to thousands of active connections. Is good to
   mention that a non-blocking model will not reduce the computing time or delays caused by the blocking
   calls used in your web service.
   <br><br>
</p>

<h3>Lightweight</h3>
<p>
   For a normal web service running, the global size of the running components in memory can be around
   of 400KB. The memory used will depends of your web service implementation and packages loaded. The
   stack components as Duda and Monkey aims to be lightweight and optimize the resources used.
   <br><br>
</p>

<h3>Service oriented</h3>
<p>
   One of the main features of Duda, is that it allow to register multiple web services under the same
   HTTP instance, as well each service can be assigned to a different Virtual Host (a Virtual Host can hold
                                                                                    multiple web services).
</p>
<p>
  Each service can map static URLs to specific callback functions or use the Map interfaces provided
  by Duda, this last one is pretty much similar to REST and provides a very useful set of methods to handle
  each request resources such as: methods, parameters and body content.
  <br><br>
</p>

<h3>API Objects</h3>
<p>
  When building/running a web service, a set of C pseudo-objects are exported to perform the setup and define
  callbacks for certains events, as well many objects are helpers to build responses and minimize the effort
  for the developer. Some API Objects available are:
  <ul>
     <li>Console</li>
     <li>Cookie</li>
     <li>Event</li>
     <li>Param</li>
     <li>Response</li>
     <li>Request</li>
     <li>Session</li>
  </ul>
   Each object expose a set of methods, for more details about the available methods for each objects refer
   to the <a href="http://duda.io/api/">API documentation</a>.
   <br><br>
</p>

<h3>API Packages</h3>
<p>
   Besides the built-in API Objects available, Duda supports a packages system which aims to load on demand
   external objects to extend the core API capabilities. Some packages available are the following:
   <ul>
     <li>Base64</li>
     <li>JSON</li>
     <li>SHA1</li>
     <li>SQLite</li>
     <li>Websocket</li>
   </ul>
   Packages are included in Duda per users demand, if you miss some specific package functionality let us
   know to consider it development and further inclusion.
   <br><br>
</p>

