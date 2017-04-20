@extends('_layouts.master')
@section('title')
Getting Started | Docs | Metaphor by META+Lab
@endsection
@section('body')
  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Documentation</h1>
          <ul class="breadcrumbs breadcrumbs--marginless type--white">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Intro</li>
            <li class="breadcrumb__item">Getting Started</li>
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
        @include('_partials.sidebar')
        <div class="col-sm-9">
          <h2 id="getting-started" class="type--header type--thin">Getting Started</h2>
          <p>The easiest way to try out Metaphor is by using our CDN and viewing the source code in our template <a href="examples.html">examples</a>. If you prefer downloading / installing from a package manager, check out the installation process below.</p>

          <br>

          <h2 id="installation" class="type--header type--thin">Installation</h2>
          <p>To include Metaphor in your next project simply run  the following in the command line: </p>
          <pre><code>$ bower install metaphor --save</code></pre>
          <p><small><em><strong>Note:</strong> If you haven't already you will need to install <a target="_blank" href="https://nodejs.org/en/download">Node/NPM</a> &amp; <a target="_blank" href="https://bower.io/#install-bower">Bower</a> first.</em></small></p>

          <br>

          <h2 id="cdn" class="type--header type--thin">Metaphor CDN</h2>
          <p>Alternatively, you can also add Metaphor to your project with our Content Delivery Network (CDN).</p>
          <pre><code><div class="type--dark-gray">// CSS</div>&lt;link rel=&quot;stylesheet&quot; href=&quot;//cdn.metalab.csun.edu/metaphor/css/metaphor.css&quot;&gt;

<div class="type--dark-gray">// JavaScript</div>&lt;script src=&quot;//cdn.metalab.csun.edu/metaphor/js/metaphor.js&quot;&gt;&lt;/script&gt;</code></pre>
          <p><small><em><strong>Note:</strong> You will need to add <a target="_blank" href="http://code.jquery.com">jQuery</a> to your project if you plan on using <code>metaphor.js</code></em></small></p>

          <br>

          <h2 id="template" class="type--header type--thin">Basic Template</h2>
          <p>Next add the following boilerplate code to your project:</p>
          <pre><code><div class="type--dark-gray">&lt;!DOCTYPE HTML&gt;
&lt;html class=&quot;no-js&quot; lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge,chrome=1&quot;&gt;
  &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Metaphor by META+LAB&lt;/title&gt;
  &lt;meta name=&quot;description&quot; content=&quot;&quot;&gt;
  &lt;link rel=&quot;icon&quot; href=&quot;//www.csun.edu/sites/default/themes/csun/favicon.ico&quot; type=&quot;image/x-icon&quot;&gt;

  &lt;!-- CSUN Branded Fonts --&gt;
  &lt;script src=&quot;//use.typekit.net/gfb2mjm.js&quot;&gt;&lt;/script&gt;
  &lt;script&gt;try{Typekit.load();}catch(e){}&lt;/script&gt;

</div>  &lt;link rel=&quot;stylesheet&quot; href=&quot;//cdn.metalab.csun.edu/metaphor/css/metaphor.css&quot;&gt;
<div class="type--dark-gray">  &lt;link rel=&quot;stylesheet&quot; href=&quot;../your-personal-project/path/to/styles.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;

  &lt;!-- Add Your Code Here &amp; Start Building ;D --&gt;

</div>  &lt;script src=&quot;//cdn.metalab.csun.edu/metaphor/js/metaphor.js&quot;&gt;&lt;/script&gt;
<div class="type--dark-gray">&lt;/body&gt;
&lt;/html&gt;</div></code></pre>

          <br>

          <h2 id="included" class="type--header type--thin">What's Included</h2>
          <p>When you download Metaphor via Bower, the following source files will be available to you</p>

          <pre><code><div class="type--dark-gray">Metaphor
  ├── CONTRIBUTING.md
  ├── LICENSE
  ├── README.md
  ├── bower.json
  ├── dist/
  │   ├── css/
  │   │   └── metaphor.css
  │   ├── fonts/
  │   └── js/
  │       └── metaphor.js
  ├── docs/
  ├── examples/
  ├── gulpfile.js
  ├── index.html
  ├── package.json
  └── src/
      ├── js/
      └── sass/
</div></code></pre>


        </div>
      </div>
    </div>
  </div>
@endsection
