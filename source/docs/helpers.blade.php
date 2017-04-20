<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Helpers | Docs | Metaphor by META+Lab</title>
  <meta name="description" content="Development Guidelines for Developers Implementing Metaphors UI Components.">
  <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">

  <!-- FONT LIBS -->
  <script src="//use.typekit.net/gfb2mjm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
  <link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css">
</head>
<body>

  <div class="header">
    <nav class="primary-nav">
      <div class="container">
        <div class="primary-nav__mobile">
          <div class="primary-nav__btn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          <a href="//www.csun.edu" class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></a>
          <a href="../index.html" class="primary-nav__sub-brand">Metaphor</a>
          <a class="sr-only" href="#main">Skip to main content</a>
        </div>
        <ul class="primary-nav__links">
          <li><a href="../index.html" class="primary-nav__link">Home</a></li>
          <li><a href="vision.html" class="primary-nav__link active">Documentation</a></li>
          <li><a href="powered-by-metaphor.html" class="primary-nav__link">Powered-by Metaphor</a></li>
          <li><a href="//github.com/csun-metalab/metaphor.git" target="_blank" class="primary-nav__link"><i class="fa fa-github" aria-hidden="true"></i> Github</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Documentation</h1>
          <ul class="breadcrumbs breadcrumbs--marginless type--white">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Components</li>
            <li class="breadcrumb__item">Helpers</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="main main--metalab section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert--warning"><strong>Heads Up!</strong> Components &amp; docs are subject to change until official v1.0 release.
            <a href="#" class="alert__close" data-alert-close>&times;</a>
          </div>
        </div>
        <div class="col-sm-3">
          <p class="header--sm"><strong>Introduction:</strong></p>
          <ul class="nav">
            <li class="nav__item"><a class="nav__link" href="vision.html">Our Vision</a></li>
            <li class="nav__item"><a class="nav__link" href="getting-started.html">Getting Started</a></li>
            <li class="nav__item"><a class="nav__link" href="examples.html">Examples</a></li>
            <li class="nav__item"><a class="nav__link" href="contributing.html">Contributing</a></li>
            <li class="nav__item"><a class="nav__link" href="code-standards.html">Code Standards</a></li>
            <li class="nav__item"><a class="nav__link" href="accessibility.html">Accessibility</a></li>
            <li class="nav__item"><a class="nav__link" href="version-history.html">Version History</a></li>
          </ul>

          <br><hr><br>

          <p class="header--sm"><strong>Components:</strong></p>
          <ul class="nav">
            <li class="nav__item"><a class="nav__link" href="grid.html">Grid System</a></li>
            <li class="nav__item"><a class="nav__link" href="type.html">Typography</a></li>
            <li class="nav__item"><a class="nav__link" href="breadcrumbs.html">Breadcrumbs</a></li>
            <li class="nav__item"><a class="nav__link" href="nav.html">Nav</a></li>
            <li class="nav__item"><a class="nav__link" href="subnavigation.html">Sub Nav</a></li>
            <li class="nav__item"><a class="nav__link" href="buttons.html">Buttons</a></li>
            <li class="nav__item"><a class="nav__link" href="tags.html">Tags</a></li>
            <li class="nav__item"><a class="nav__link" href="panels.html">Panels</a></li>
            <li class="nav__item"><a class="nav__link" href="alerts.html">Alerts</a></li>
            <li class="nav__item"><a class="nav__link" href="lists.html">Lists</a></li>
            <li class="nav__item"><a class="nav__link" href="tables.html">Tables</a></li>
            <li class="nav__item"><a class="nav__link" href="forms.html">Forms</a></li>
            <li class="nav__item"><a class="nav__link" href="modals.html">Modals</a></li>
             <li class="nav__item"><a class="nav__link" href="timeline.html">Timeline</a></li>
            <li class="nav__item"><a class="nav__link" href="pagination.html">Pagination</a></li>
            <li class="nav__item"><a class="nav__link" href="accordion.html">Accordion</a></li>
            <li class="nav__item nav__item--active"><a class="nav__link" href="helpers.html">Helpers</a></li>
          </ul>

          <br><hr><br>

          <p class="header--sm"><strong>Resources:</strong></p>
          <ul class="nav">
              <li class="nav__item nav__item"><a class="nav__link" href="snippets.html">Text Editor Snippets</a></li>
              <li class="nav__item nav__item"><a class="nav__link" href="design-assets.html">Design Assets</a></li>
          </ul>

        </div>
        <div class="col-sm-9">

          <h2 class="type--header type--thin">Helpers</h2>
          <p>Helpers are utility classes that augment general capabilities across page elements. The use of helpers are not required, but may serve to enhance the experience of a page.</p>

          <br>

          <h2 class="type--header type--thin">Images</h2>
          <p>
            <img class="img--border" src="../docs/imgs/person_1464281947.jpg" alt="Nerces Image">
            <img class="img--circle" src="../docs/imgs/person_1464281947.jpg" alt="Example Circle Image">
            <img class="img--hexagon" src="../docs/imgs/person_1464281947.jpg" alt="Nerces Hexagon Image">
          </p>

          <pre><code>&lt;img class=&quot;img--border&quot; src=&quot;beard-slayer.jpg&quot; alt=&quot;Nerces Image&quot;&gt;
&lt;img class=&quot;img--circle&quot; src=&quot;double-carnitas.jpg&quot; alt=&quot;Nerces Circle Image&quot;&gt;
&lt;img class=&quot;img--hexagon&quot; src=&quot;heavy-cream.jpg&quot; alt=&quot;Nerces Hexagon Image&quot;&gt;

<div class="type--dark-gray"><strong>// IMAGE MODIFIERS</strong>
.img--fluid
.img--circle
.img--hexagon
.img--border
</div></code></pre>
          <p><small><em><strong>Note:</strong> We recommend using image modifiers only on square images.</em></small></p>

          <h2 class="type--header type--thin">Colors &amp; Backgrounds</h2>
          <p>The following pallete reflects the colors available in the <a href="http://www.csun.edu/identity/design-guidelines">CSUN Design Guidelines</a>.</p>
          <div class="cf">
            <div class="bg--red" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--black" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--dark-gray" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--gray" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--light-gray" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--sea-green" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--periwinkle" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--golden-yellow" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--azure" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--iris" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--cream" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--scarlet" style="float: left; height: 50px; width: 50px;"></div>
          </div>
          <br>
          <pre><code>&lt;div class=&quot;bg--red&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--dark-gray&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--gray&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--light-gray&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--sea-green&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--periwinkle&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--golden-yellow&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--azure&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--iris&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--cream&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--scarlet&quot;&gt;&lt;/div&gt;</code></pre>

          <br>

          <h2 class="type--header type--thin">Floats &amp; Positioning</h2>
          <p>You can position elements to the left and right using the following floats:</p>
          <div class="cf">
            <div class="bg--red pull-left" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--periwinkle pull-left" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--black pull-right" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--sea-green pull-right" style="float: left; height: 50px; width: 50px;"></div>
          </div>
          <br>
          <pre><code>&lt;div class=&quot;pull-left&quot;>&lt;/div&gt;
&lt;div class=&quot;pull-right&quot;&gt;&lt;/div&gt;</code></pre>
          <p>Additionally, you can avoid parent elements with floated children from collapsing by adding a clearfix <code>.cf</code> class on the parent element. To learn more about clearfixes read <a href="http://nicolasgallagher.com/micro-clearfix-hack">Micro Clearfix Hack by Nicolas Gallagher</a>.</p>
          <div class="cf" style="border: 2px solid #ccc; padding: 10px;">
            <div class="bg--gray pull-left" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--azure pull-right" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--iris pull-right" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--golden-yellow pull-right" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--black pull-right" style="float: left; height: 50px; width: 50px;"></div>
            <div class="bg--sea-green pull-right" style="float: left; height: 50px; width: 50px;"></div>
          </div>
          <br>
          <pre><code>&lt;div class=&quot;cf&quot;&gt;
  &lt;div class=&quot;pull-left&quot;>&lt;/div&gt;
  &lt;div class=&quot;pull-right&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

          <br>

          <h2 class="type--header type--thin">Element Visibility</h2>
          <p>You can reveal and hide elements with the following visibility helpers:</p>

          <pre><code>&lt;div class=&quot;show&quot;>&lt;/div&gt;
&lt;div class=&quot;hide&quot;>&lt;/div&gt;

<div class="type--dark-gray">&lt;!-- Impacts flow of content but not visible --&gt;</div>&lt;div class=&quot;invisible&quot;&gt;&lt;/div&gt;</code></pre>

          <br>

        </div>
      </div>
    </div>
  </div>
  <footer>
	  <div class="container">
		  <div class="row">
  			<div class="col-sm-5">
  				<div class="row">
  					<div class="col-sm-3 footer-seal">
  						<img src="//www.csun.edu/sites/default/themes/csun/images/footer-seal.png" alt="Seal for California State University, Northridge">
  					</div>
  					<div class="col-sm-9">
  						<ul class="list--unstyled">
  							<li><strong>META+LAB</strong> <br>© California State University, Northridge</li>
  							<li>18111 Nordhoff Street, Northridge, CA 91330</li>
  							<li>Phone: (818) 677-1200 / <a href="//www.csun.edu/contact/" target="_blank">Contact Us</a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  			<div class="col-sm-7">
  				<div class="row">
  					<div class="col-sm-4">
  						<ul class="list--unstyled">
  							<li><a href="//www.csun.edu/emergency/" target="_blank">Emergency Information</a></li>
  							<li><a href="//www.csun.edu/afvp/university-policies-procedures/" target="_blank">University Policies &amp; Procedures</a></li>
  						</ul>
  					</div>
  					<div class="col-sm-4">
  						<ul class="list--unstyled">
  							<li><a href="//www.csun.edu/sites/default/files/900-12.pdf" target="_blank">Terms and Conditions for Use</a></li>
  							<li><a href="//www.csun.edu/sites/default/files/500-8025.pdf" target="_blank">Privacy Policy</a></li>
  							<li><a href="//www.csun.edu/it/document-viewers" target="_blank">Document Reader</a></li>
  						</ul>
  					</div>
  					<div class="col-sm-4">
  						<ul class="list--unstyled">
  							<li><a href="//www.calstate.edu/" target="_blank">California State University</a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </footer>
  <div class="metalab-footer">
    <div class="metalab-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="metalab-branding">
              <img src="//www.csun.edu/faculty/imgs/meta-logo-horz.png" alt="CSUN META Lab Logo">
              <ul class="list--unstyled">
                <li><a href="//metalab.csun.edu">metalab.csun.edu</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <ul class="list--unstyled metalab-tagline">
              <li>Explore. Learn. Go Beyond.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77781058-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
