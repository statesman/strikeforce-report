<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => "8 key passages from the 21CT ‘strike force’ report",
        'description' => 'Read key excerpts from the 92-page report released by the “strike force” assembled in the wake of the 21CT contracting scandal.',
        'thumbnail' => 'http://projects.statesman.com/news/strikeforce-report/assets/share.jpg',
        'url' => 'http://projects.statesman.com/news/strikeforce-report/',
        'twitter' => 'statesman'
      );
    ?>

    <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
    <link rel="icon" type="image/png" href="//projects.statesman.com/common/favicon.ico">

    <link rel="canonical" href="<?php print $meta['url']; ?>" />

    <meta name="description" content="<?php print $meta['description']; ?>">

    <meta property="og:title" content="<?php print $meta['title']; ?>"/>
    <meta property="og:description" content="<?php print $meta['description']; ?>"/>
    <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
    <meta property="og:url" content="<?php print $meta['url']; ?>"/>

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
    <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
    <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
    <meta name="twitter:creator:id" content="15464292" />
    <meta name="twitter:creator:id" content="16235644" />
    <meta name="twitter:image:src" content="<?php print $meta['thumbnail']; ?>" />
    <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

    <link href="dist/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/advertising.inc";?>
    <?php include "includes/metrics-head.inc";?>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
            <img width="273" height="26" src="assets/logo.png" />
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </nav>

    <div id="spin" style="position:fixed;top:50%;left:50%;z-index:10000"></div>

    <article class="container">
      <div class="header">
        <h4>Texas state government</h4>
        <h1><?php print $meta['title']; ?></h1>
        <p class="author">Interactive by Andrew Chavez, J. David McSwane and Andrea Ball, American-Statesman<br />Published March 30, 2015</p>
        <p>A report from a “strike force” assembled by Gov. Greg Abbott in the wake of the 21CT contracting scandal, released today, criticizes purchasing practices at the state's largest agency and at the state agency responsible for information technology purchasing.</p>
        <p>The report drew largely on news reports as source material in its explanation of how 21CT came to land a lucrative contract without competition. The strike force investigation came following an American-Statesman investigation into the commission’s multimillion-dollar, no-bid deals with 21CT, which was hired to help with Medicaid fraud investigations.</p>
        <p>Key excerpts from the 92-page report are below.</p>
        <p><a href="http://www.mystatesman.com/news/news/state-regional-govt-politics/abbotts-strike-force-report-on-texas-health-agency/nkhnr/">Related: Abbott’s strike force: 21CT deal a ‘fiasco’ that skirted the law <i class="fa fa-angle-double-right"></i></a></p>
      </div>

      <hr />

      <div class="row">

        <div class="col-xs-12 col-sm-8 findings">
          <?php $findings = json_decode(file_get_contents('data/findings.json')); ?>
          <?php $i = 1; ?>
          <?php foreach($findings as $f): ?>
            <div class="finding">
              <div class="clearfix">
                <div class="finding-num"><?php echo $i; ?></div>
                <div class="finding-hed clearfix">
                  <h3><?php echo $f->hed; ?><?php /* <a title="Share this" href="https://twitter.com/intent/tweet?text=<?php echo urlencode('21CT strike force report: ' . $f->hed); ?>&url=<?php echo urlencode($meta['url']); ?>&hashtags=txlege&related=statesman" target="_blank"><i class="fa fa-twitter"></i></a>*/?></h3>
                  <p><?php echo $f->desc; ?></p>
                </div>
              </div>
              <div class="finding-img clearfix">
                <blockquote class="hidden-md hidden-lg"><i class="fa fa-quote-left"></i> <?php echo $f->text; ?> <i class="fa fa-quote-right"></i></blockquote>
                <img class="img-responsive hidden-xs hidden-sm" src="assets/<?php echo $f->img; ?>" />
                <div class="finding-img-meta"><a target="_blank" href="https://www.documentcloud.org/documents/1697981-strike-force.html#/document/p<?php echo $f->page; ?>/<?php echo $f->note; ?>"><i class="fa fa-file-text"></i> Jump to page</a> <span class="pull-right">p. <?php echo $f->page; ?></span></div>
              </div>
            </div>
            <?php $i++; ?>
          <?php endforeach; ?>
        </div>

        <div class="col-xs-12 col-sm-4 timeline">
          <div>
            <h2>Read the complete report</h2>
            <div class="full-doc-link clearfix">
              <div class="pull-left">
                <img src="assets/cover.gif" class="img-responsive" />
              </div>
              <a href="http://projects.statesman.com/documents/?doc=1697981-strike-force" target="_blank">Read and search the complete report in our document viewer</a>
            </div>
          </div>

          <div>
            <h2>The strike force</h2>
            <p>The team, appointed by the governor’s office, was led by <strong>Billy Hamilton</strong>, a former deputy comptroller, and included three other members who have experience with state contracts:</p>
            <ul>
              <li><strong>Scott McCown</strong>, clinical professor and director of the Children’s Rights Clinic at The University of Texas School of Law</li>
              <li><strong>Heather Griffith Peterson</strong>, chief financial officer of the Texas Department of Agriculture</li>
              <li><strong>Talmadge Heflin</strong>, director of the Center for Fiscal Policy at the conservative Texas Public Policy Foundation</li>
            </ul>
          </div>

          <div>
            <h2>Key events</h2>
            <?php $events = json_decode(file_get_contents('data/timeline.json')); ?>
            <?php foreach($events->timeline as $e): ?>
              <h4><?php echo $e->date; ?></h4>
              <p><?php echo $e->text; ?></p>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </article>

    <div class="clearfix" id="ads">
      <div class="visible-xs hidden-sm hidden-md hidden-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-3" class="center-block" style="width:320px; height:50px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-3'); });
          </script>
        </div>
      </div>
      <div class="hidden-xs visible-sm visible-md visible-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-1" class="center-block" style="width:728px; height:90px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-1'); });
          </script>
        </div>
      </div>
    </div>

    <p id="legal" class="center-block text-center"><small>© <?php print date("Y"); ?> <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
      <script src="//localhost:35729/livereload.js"></script>
    <?php endif; ?>
  </body>
</html>
