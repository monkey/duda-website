<div class="hero-unit">
   <h2>Hello World ! in 5 steps</h2>
   <p>
     A simple 5 steps tutorial to deploy a Hello World web service
   </p>
</div>


<h3>For the impacient</h3>
<p>
   The steps mentioned in this document requires that you have running a Linux
   box with Python and GIT tools. Let's go:
</p>

<br>
<p>
   1) Get DudaC, the client manager:
</p>
<pre>$ git clone https://github.com/monkey/dudac</pre>
<br>
<p>
   2) Get the Web Services examples:
</p>
<pre>$ git clone https://github.com/monkey/duda-examples</pre>
<br>

<p>
   3) Initialize DudaC environment
</p>
<pre>$ cd dudac/
$ ./dudac -s</pre>
<br>

<p>
   4) Run the Hello Webservice
</p>
<pre>$ ./dudac -w ../duda-examples/001_hello_world/</pre>
<br>

<p>
   5) Test your web service:
</p>
<pre>$ firefox http://localhost:2001/hello/</pre>
<br>

<h3>Source code</h3>
<p>The hello world is made with the following source code:</p>
<pre>#include "webservice.h"

DUDA_REGISTER("Duda I/O Examples", "Hello World");

void cb_hello(duda_request_t *dr)
{
    response->http_status(dr, 200);
    response->printf(dr, "Hello World!");
    response->end(dr, NULL);
}

int duda_main()
{
    map->static_add("/", "cb_hello");

    return 0;
}
</pre>
<br>

<h3>About Duda</h3>
<p>
   <a href="http://duda.io">Duda</a> is a powerful and flexible framework to build C Web Services.
   It's under heavy development, if you want to know more about the project feel free to contact us
   on irc.freenode.net #monkey or through our new
   <a href="http://lists.monkey-project.com/listinfo/duda">mailing list</a>.
</p>
