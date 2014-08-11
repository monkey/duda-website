<?
/* release  => directory */


$latest = "0.23";
$type   = "duda-client";

function release_line($version, $dir, $type="duda-client")
{
        $site = "http://duda.io/";
        ?>
            <a href="<?=$site."releases/".$type?>/dudac-<?=$version?>.tar.gz">dudac-<?=$version?>.tar.gz</a>
            <code><a href="<?=$site?>releases/dudac-<?=$version?>.tar.gz.md5">MD5</a></code>


        <?
}

?>
<div class="hero-unit">
  <h1>Downloads</h1>
</div>

<p>
  On this section you will find the latest releases of the Duda I/O stack components. We encourage to run updated packages
</p>

<div class="row-fluid">
  <div class="span5">
    <h3>Duda Client Manager</h3>
    <p>
      Duda Client Manager (DudaC) is a helper tool for fast building and deployment of web services. It will prepare
      your environment and configure the Duda I/O stack.
    </p>
    <p>
      <ul><br>
        <? release_line($latest, $dudac_dir); ?>
      </ul>
    </p>
    <p>
      If you use Pypi through the <i>pip</i> tool, you can get Duda Client issuing the following command:
      <ul>
        $ pip install dudac
      </ul>
    </p>
  </div>
  <div class="span5">
    <h3>Duda Plugin</h3>
    <p>
      To obtain Duda I/O source code, please check our <a href="https://github.com/monkey/duda">GIT repository</a>.
    </p>
  </div>
</div>
