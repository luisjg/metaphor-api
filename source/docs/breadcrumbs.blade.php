@extends('_layouts.master')
@section('title')
Breadcumbs | Docs | Metaphor by META+LAB
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
            <li class="breadcrumb__item">Breadcrumbs</li>
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
          <h2 class="type--header type--thin">Breadcrumbs</h2>
          <ul class="breadcrumbs">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Documentation</li>
            <li class="breadcrumb__item">Breadcrumbs</li>
          </ul>
          <pre><code>&lt;ul class=&quot;breadcrumbs&quot;&gt;
  &lt;li class=&quot;breadcrumb__item breadcrumb__item--home&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-home&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;breadcrumb__item&quot;&gt;Documentation&lt;/li&gt;
  &lt;li class=&quot;breadcrumb__item&quot;&gt;Breadcrumbs&lt;/li&gt;
&lt;/ul&gt;


<div class="type--dark-gray"><strong>// BREADCRUMB MODIFIERS</strong>
.breadcrumbs--underlined
</div></code></pre><br>

        <br>
        </div>
      </div>
    </div>
  </div>
@endsection
