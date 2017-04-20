@extends('_layouts.master')
@section('title')
  Timeline | Docs | Metaphor by META+Lab
@endsection
@section('body')
  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Documentation</h1>
          <ul class="breadcrumbs breadcrumbs--marginless type--white">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Components</li>
            <li class="breadcrumb__item">Timeline</li>
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
        <div class="col-sm-8">
          <h2 class="type--header type--thin">Timeline</h2>
          <div class="container">
            <ul class="timeline">
              <li class="timeline__header"><strong>D.Sc.</strong> 1995, Cool University</li>
              <li class="timeline__header"><strong>M.S.</strong> 1990, Coolest University</li>
              <li class="timeline__header"><strong>B.S.</strong> 1986, Coolio University</li>
            </ul>
          </div>

             <pre><code>&lt;ul class=&quot;timeline&quot;&gt;
  &lt;li class=&quot;timeline__header&quot;&gt;&lt;strong&gt;D.Sc.&lt;/strong&gt; 1995, Cool University
  &lt;/li&gt;
  &lt;li class=&quot;timeline__header&quot;&gt;&lt;strong&gt;M.S.&lt;/strong&gt; 1990, Coolest University&lt;/li&gt;
  &lt;li class=&quot;timeline__header&quot;&gt;&lt;strong&gt;B.S.&lt;/strong&gt; 1986, Coolio University&lt;/li&gt;
&lt;/ul&gt;</code></pre>
        </div>
      </div>
    </div>
  </div>
@endsection
