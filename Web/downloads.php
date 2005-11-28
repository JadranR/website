<?php
  include('page.inc');

  $page = new Page;
  $page->printHead('WinMerge: Downloads', WINMERGE_USR);
?>
<h2>Downloads</h2>
<h3><a href="http://sourceforge.net/project/showfiles.php?group_id=13216&amp;package_id=11248&amp;release_id=369981">WinMerge 2.4.2</a></h3>
<dl>
  <dt><a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-Setup.exe">Installer</a></dt>
  <dd><p>The easiest way to install WinMerge is to download and run this installer. Read <a href="2.4/manual/installing.html">online manual</a> for help using it.</p></dd>
  <dt><a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-exe.zip">Binaries</a></dt>
  <dd><p>WinMerge binaries are also available in archive files (<a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-exe.zip">.zip</a> and <a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-exe.7z">.7z</a>).</p></dd>
  <dt><a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-src.zip">Source code</a></dt>
  <dd><p>Source code is available in archive files (<a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-src.zip">.zip</a> and <a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-src.7z">.7z</a>).</p></dd>
  <dt><a href="http://prdownloads.sourceforge.net/winmerge/Merge7z0016-311-429.7z">7-Zip Plugin</a> (DllBuild 0016)</dt>
  <dd>
    <p>This is the 7-Zip plugin for WinMerge.</p>
    <p>You can also read the <a href="http://sourceforge.net/project/shownotes.php?group_id=13216&amp;release_id=361995">Release Notes</a> or search for <a href="http://sourceforge.net/project/showfiles.php?group_id=13216&amp;package_id=143957">other versions</a>.</p>
  </dd>
  <dt><a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-manual.zip">Manual</a></dt>
  <dd><p>This is the offline version from our Manual in archive files (<a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-manual.zip">.zip</a> and <a href="http://prdownloads.sourceforge.net/winmerge/WinMerge-2.4.2-manual.7z">.7z</a>).</p></dd>
</dl>
<?php
  $page->printFoot();
?>