<?
/* release  => directory */

$dudac_versions = array('0.4.0'  => '0.4');
$dudap_versions = array();

foreach($dudac_versions as $dudac_latest => $dudac_dir) {
    break;
}

function release_line($version, $dir, $type="duda-client")
{
        $site = "http://duda.io/";
        ?>
            <a href="<?=$site."releases/".$type."/".$dir?>/dudac-<?=$version?>.tar.gz">dudac-<?=$version?>.tar.gz</a>
            <code><a href="<?=$site?>releases/<?=$type?>/<?=$dir?>/dudac-<?=$version?>.tar.gz.md5">MD5</a></code>


        <?
}

?>
<div class="hero-unit">
<h1>Downloads</h1>
</div>

<p>
On this section you will find the latest releases of the Duda I/O stack components. We encourage to run updated packages
</p>

<div class="row">
    <div class="span5">
       <h3>Duda Client Manager</h3>
       <p>
          Duda Client Manager (DudaC) is a helper tool for fast building and deployment of web services. It will prepare
          your environment and configure the Duda I/O stack.
       </p>
       <p>
         <ul><br>
             <? release_line($dudac_latest, $dudac_dir); ?>
         </ul>
       </p>
    </div>
    <div class="span1">
    </div>
    <div class="span5">
       <h3>Duda Plugin</h3>
       <p>
          No official releases yet, please check our <a href="http://git.monkey-project.com/?p=duda;">GIT repository</a>.

       </p>
    </div>
</div>
<br><br>