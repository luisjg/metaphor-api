@extends('_layouts.master')
@section('title')
Sub Navigation | Docs | Metaphor by META+Lab
@endsection
@section('body')
  <div class="main main--metalab">
    <div class="banner bg--dark-gray type--white" style="padding: 50px 0;">
      <div class="container">
        <div class="col-md-12">
          <h1 class="kilo type--thin">Components</h1>
          <p class="h5 type--marginless">An overview of Metaphor user interface components and more.</p>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="type--header" style="position: relative; border-color: #e7e7e7;">
          <ul class="breadcrumbs breadcrumbs--marginless">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Components</li>
            <li class="breadcrumb__item">{{ $page->upperCaseFilename() }}</li>
          </ul>
          <ul class="tabs cf" style="position: absolute; bottom: 0; right: 0;">
            <li class="tab__list">
              <a class="tab__link tab__link--active" href="#">Components</a>
            </li>
            <li class="tab__list">
              <a class="tab__link" href="#">Guides</a>
            </li>
            <li class="tab__list">
              <a class="tab__link" href="#">Integrations</a>
            </li>
          </ul>
        </div>

    <div class="section">
      <div class="row">
        <div class="col-md-3">
          @include('_partials.sidebar')
        </div>
        <div class="col-md3-8">
          <h2 class="type--thin">Sub Navigation</h2>
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
    </div>
  </div>
</div>

  @include('_partials.collaboration')
@endsection
