@extends('_layouts.master')
@section('title')
Breadcumbs | Docs | Metaphor by META+LAB
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
            <div class="col-md-9">
              <h2 class="type--thin">Breadcrumbs</h2>
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
    </div>
  </div>

  @include('_partials.collaboration')
@endsection
