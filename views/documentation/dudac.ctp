<div class="hero-unit">
   <h2>Duda Client Manager (DudaC)</h2>
   <p>
       A tool for fast building and deployment of web services
   </p>
</div>


<h3>Introduction</h3>
<p>
   As described in the <?=$html->link('overview', 'overview');?> section, DudaC is a helper
   tool for fast building and deployment of web services. Before to run a web service, is required
   to have the development environment properly configured with their requirements.
</p>
<p>
   DudaC aims to make easier the setup of the environment and further run of web services from their
   source code. It takes care of download the stack components, configure and build them in a stage
   directory. On this document we will describe the basics of DudaC usage.
   <br><br>
</p>

<h3>Download</h3>
<p>
   The first step is to download DudaC from the
   <a href="http://github.com/monkey/dudac;a=summary">GIT repository</a>,
   for this you will need to have the GIT tools available in your system. The you need to run
   one simple command:
   <br><br>
   <ul>
   <pre>$ git clone https://github.com/monkey/dudac</pre>
   <br>
   </ul>
</p>
<p>
   DudaC is written in <a href="http://python.org">Python</a> and do not require any external
   dependency. Once you have cloned the repository you are ready to start playing with web
   services.
   <br><br>
</p>

<h3>Setting Up</h3>
<p>
   DudaC aims to download, build and configure every component of the stack to run a web service.            The first step after download it is to initialize the environment:
   <ul>
   <pre>$ cd dudac/
$ ./dudac -s</pre>
   </ul>
   <br>
   The flag <strong>-s</strong> instruct DudaC to use HTTPS protocol to fetch the Monkey and Duda
   sources. If you cannot connect directly using plain GIT, you can try the <strong>-g</strong> flag
   to use GIT over SSH. This step should take 1 or 2 minutes depending of your bandwith connection
   to internet, once it finish you should get an output like this:
   <br><br>
   <ul>
   <pre>$ ./dudac -s
Duda Client Manager - v0.18
http://duda.io
http://monkey-project.com

[+] Monkey: cloning source code                                            [OK]
[+] Duda: cloning source code                                              [OK]
[+] GIT Monkey  : switch HEAD to 'master'                                  [OK]
[+] GIT Monkey  : archive                                                  [OK]
[+] GIT Duda    : archive                                                  [OK]
[+] Monkey      : prepare build                                            [OK]
[+] Monkey      : building                                                 [OK]
</pre>
</ul>
</p>
<br>
<h3>Running a web service</h3>
<p>
   Once you have set the development environment you can run a web service pretty easy
   just pointing to the service source code directory, e.g:
   <ul>
   <pre>$ ./dudac -w /path/to/webservice/</pre>
   </ul>
   <br>
   The <strong>-w</strong> indicates where the web service source code is located. On a normal
   run you would see an output as follows:
   <br><br>
   <ul>
   <pre>$ ./dudac -w /path/to/webservice/
Duda Client Manager - v0.18
http://duda.io
http://monkey-project.com

[+] GIT Monkey  : switch HEAD to 'master'                                  [OK]
[+] GIT Duda    : switch HEAD to 'master'                                  [OK]
[+] GIT Monkey  : archive                                                  [OK]
[+] GIT Duda    : archive                                                  [OK]
[+] Monkey      : cleaning                                                 [OK]
[+] Monkey      : prepare build                                            [OK]
[+] Monkey      : building                                                 [OK]
[+] WebService  : clean                                                    [OK]
[+] WebService  : build                                                    [OK]
[+] Monkey      : configure HTTP Server                                    [OK]
[+] Service Up  : http://localhost:2001/service/</pre>
   </ul>
   <br>
   By default DudaC will rebuild the environment components, if you want a fast run you can add the
   <strong>-f</strong> flag:
   <br><br>
   <ul>
      <pre>$ ./dudac -f -w /path/to/webservice/
Duda Client Manager - v0.18
http://duda.io
http://monkey-project.com

[+] WebService  : clean                                                    [OK]
[+] WebService  : build                                                    [OK]
[+] Monkey      : configure HTTP Server                                    [OK]
[+] Service Up  : http://localhost:2001/service/</pre>
   </ul>
   <br>
   Make sure the service uses the proper TCP port that you want, by default it uses the port 2001,
   you can change that using the <strong>-p</strong> parameter:
   <br><br>
   <ul>
      <pre>$ ./dudac -f -w /path/to/webservice/ -p 8080
Duda Client Manager - v0.18
http://duda.io
http://monkey-project.com

[+] WebService  : clean                                                    [OK]
[+] WebService  : build                                                    [OK]
[+] Monkey      : configure HTTP Server                                    [OK]
[+] Service Up  : http://localhost:8080/service/</pre>
   </ul>
   <br>
</p>

<h3>Generic Help</h3>
<p>
  As most of command line programs, you can see the detailed options available using the
  <strong>-h</strong> parameter:
  <pre>$ ./dudac -h
Duda Client Manager - v0.18
http://duda.io
http://monkey-project.com

Usage: dudac [-g|-s] [-S] [-h] [-v] [-A] [-J] [-T] -w WEB_SERVICE_PATH

Stack Build Options
    -sGet stack sources using HTTPS
    -gGet stack sources using GIT protocol (SSH)
    -fDo not rebuild Monkey (fast-run)
    -rReset environment

Profiling and Trace
    -AUse libc memory allocator instead of Jemalloc (disabled)
    -XEnable Jemalloc statistics (disabled)
    -JEnable Jemalloc profiling and leaks detection (disabled)
    -TEnable Linux Trace Toolkit (disabled)

HTTP Server Options
    -p TCP_PORTSet TCP port (default 2001)
    -w WEB_SERVICESpecify web service source path
    -SWeb Service will run with SSL mode enabled
    -M 'k1=v1,kn=vn'Override some web server config key/value

Others
    -hPrint this help
    -uRedirect server output to STDOUT
    -vPrint version</pre>
</p>
