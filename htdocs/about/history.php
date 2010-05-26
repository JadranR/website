<?php
  include('../engine/engine.inc');

  $page = new Page;
  $page->setDescription(__('History of WinMerge releases with version numbers, release dates and manuals.'));
  $page->setKeywords(__('WinMerge, history, version number, release date, manual, users guide'));
  $page->printHead(__('History'), TAB_ABOUT);
  
  $page->printHeading(__('History'));
?>
<div class="infocard">
  <h3>WinMerge 2.12</h3>
  <ul>
    <li>WinMerge 2.12.4 (2009-06-09)</li>
    <li>WinMerge 2.12.2 (2009-04-01)</li>
    <li>WinMerge 2.12.0 (2009-03-05)</li>
  </ul>
  <ul class="inline">
    <li><a href="/docs/manual/"><?php __e('Manual');?></a></li>
    <li><a href="/docs/changelog.php"><?php __e('Change Log');?></a></li>
  </ul>
</div>
<div class="infocard">
  <h3>WinMerge 2.10</h3>
  <ul>
    <li>WinMerge 2.10.4 (2009-01-13)</li>
    <li>WinMerge 2.10.2 (2008-11-06)</li>
    <li>WinMerge 2.10.0 (2008-09-17)</li>
  </ul>
</div>
<div class="infocard">
  <h3>WinMerge 2.8</h3>
  <ul>
    <li>WinMerge 2.8.6 (2008-08-07)</li>
    <li>WinMerge 2.8.4 (2008-06-17)</li>
    <li>WinMerge 2.8.2 (2008-06-12)</li>
    <li>WinMerge 2.8.0 (2008-04-03)</li>
  </ul>
</div>
<div class="infocard">
  <h3>WinMerge 2.6</h3>
  <ul>
    <li>WinMerge 2.6.14 (2008-01-17)</li>
    <li>WinMerge 2.6.12 (2007-09-26)</li>
    <li><del>WinMerge 2.6.10 (2007-09-25)</del> <em><?php __e('Withdrawn due to installer bug!');?></em></li>
    <li>WinMerge 2.6.8 (2007-06-19)</li>
    <li>WinMerge 2.6.6 (2007-03-29)</li>
    <li>WinMerge 2.6.4 (2007-01-17)</li>
    <li>WinMerge 2.6.2 (2006-12-14)</li>
    <li>WinMerge 2.6.0 (2006-10-12)</li>
  </ul>
</div>
<div class="infocard">
  <h3>WinMerge 2.4</h3>
  <ul>
    <li>WinMerge 2.4.10 (2006-08-10)</li>
    <li>WinMerge 2.4.8 (2006-06-13)</li>
    <li>WinMerge 2.4.6 (2006-02-28)</li>
    <li>WinMerge 2.4.4 (2005-12-15)</li>
    <li>WinMerge 2.4.2 (2005-11-10)</li>
    <li>WinMerge 2.4.0 (2005-09-29)</li>
  </ul>
</div>
<div class="infocard">
  <h3>WinMerge 2.2</h3>
  <ul>
    <li>WinMerge 2.2.4 (2005-05-31)</li>
    <li>WinMerge 2.2.2 (2005-03-23)</li>
    <li>WinMerge 2.2.0 (2004-11-10)</li>
  </ul>
</div>
<div class="infocard">
  <h3>WinMerge 2.0</h3>
  <ul>
    <li>WinMerge 2.0.2 (2003-12-10)</li>
    <li>WinMerge 2.0.0 (2003-08-04)</li>
  </ul>
</div>
<div class="infocard">
  <h3>WinMerge 1.7</h3>
  <ul>
    <li>WinMerge 1.7.1 (2000-11-03)</li>
  </ul>
</div>
<?php
  $page->printFoot();
?>