@extends('_layouts.master')
@section('title')
  Timeline | Docs | Metaphor by META+Lab
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
            <div class="col-md-8">
              <h2 class="type--thin">Timeline</h2>
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
    </div>
  </div>

  @include('_partials.collaboration')
@endsection
