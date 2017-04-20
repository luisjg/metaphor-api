@extends('_layouts.master')
@section('title')
Sub Navigation | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Sub Navigation</li>
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
          <h2 class="type--header type--thin">Sub Navigation</h2>
          <div class="tab-container">
            <ul class="tabs">
              <li class="tab__list">
                <a class="tab__link tab__link--active" href="#">Nav0</a>
              </li>
              <li class="tab__list">
                <a class="tab__link" href="#">Nav1</a>
              </li>
              <li class="tab__list">
                <a class="tab__link" href="#">Nav2</a>
              </li>
              <li class="tab__list">
                <a class="tab__link" href="#">Nav3</a>
              </li>
              <li class="tab__list">
                <a class="tab__link" href="#">Nav4</a>
              </li>
              <li class="tab__list">
                <a class="tab__link" href="#">Nav4</a>
              </li>
              <li class="tab__list">
                <a class="tab__link" href="#">Nav4</a>
              </li>
            </ul>
          </div>

          <br>

<pre><code>&lt;div class=&quot;tab-container&quot;&gt;
  &lt;ul class=&quot;tabs cf&quot;&gt;
    &lt;li class=&quot;tab__list&quot;&gt;
      &lt;a class=&quot;tab__link tab__link--active&quot; href=&quot;#&quot;&gt;Nav0&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;tab__list&quot;&gt;
     &lt;a class=&quot;tab__link&quot; href=&quot;#&quot;&gt;Nav1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;tab__list&quot;&gt;
      &lt;a class=&quot;tab__link&quot; href=&quot;#&quot;&gt;Nav2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;tab__list&quot;&gt;
      &lt;a class=&quot;tab__link&quot; href=&quot;#&quot;&gt;Nav3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;tab__list&quot;&gt;
      &lt;a class=&quot;tab__link&quot; href=&quot;#&quot;&gt;Nav4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;tab__list&quot;&gt;
      &lt;a class=&quot;tab__link&quot; href=&quot;#&quot;&gt;Nav5&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>

        </div>
      </div>
    </div>
  </div>
@endsection
