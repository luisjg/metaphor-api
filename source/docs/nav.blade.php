@extends('_layouts.master')
@section('title')
Nav | Docs | Metaphor by META+Lab
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
          <h2 class="type--thin">CSUN Nav</h2>
          <nav class="primary-nav primary-nav--cream">
            <div class="container">
              <div class="primary-nav__mobile">
                <div class="primary-nav__btn">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></div>
              </div>
              <ul class="primary-nav__links">
                <li><a class="primary-nav__link active" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
              </ul>
            </div>
          </nav>
          <nav class="primary-nav">
            <div class="container">
              <div class="primary-nav__mobile">
                <div class="primary-nav__btn">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></div>
              </div>
              <ul class="primary-nav__links">
                <li><a class="primary-nav__link active" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
              </ul>
            </div>
          </nav>
          <nav class="primary-nav primary-nav--black">
            <div class="container">
              <div class="primary-nav__mobile">
                <div class="primary-nav__btn">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></div>
              </div>
              <ul class="primary-nav__links">
                <li><a class="primary-nav__link active" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
              </ul>
            </div>
          </nav>

          <br>

          <pre><code>&lt;nav class=&quot;primary-nav&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;primary-nav__mobile&quot;&gt;
      &lt;div class=&quot;primary-nav__btn&quot;&gt;
        &lt;div class=&quot;bar&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;bar&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;bar&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;primary-nav__brand&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;California State University, Northridge (CSUN)&lt;/span&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;ul class=&quot;primary-nav__links&quot;&gt;
      &lt;li&gt;&lt;a class=&quot;primary-nav__link active&quot; href=&quot;#&quot;&gt;Nav Link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;primary-nav__link&quot; href=&quot;#&quot;&gt;Nav Link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;primary-nav__link&quot; href=&quot;#&quot;&gt;Nav Link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/nav&gt;

<div class="type--dark-gray"><strong>// NAV MODIFIERS</strong>
.primary-nav--cream
.primary-nav--black
</div></code></pre>

        <br>

        <h2 class="type--header type--thin">Side Nav</h2>

        <div class="row">
          <div class="col-sm-6">
            <ul class="nav">
              <li class="nav__item nav__item--active">
                <a href="#" class="nav__link">Link #1</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #2</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #3</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #4</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-6">
            <ul class="nav">
              <li class="nav__item nav__item--active nav__item--fill">
                <a href="#" class="nav__link">Link #1</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #2</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #3</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #4</a>
              </li>
            </ul>
          </div>
        </div>

        <pre><code>&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav__item nav__item--active&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #1&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav__item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #2&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav__item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #3&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav__item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #4&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

<div class="type--dark-gray"><strong>// SIDE NAV MODIFIERS</strong>
.nav__item--active
.nav__item--fill
</div></code></pre>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  @include('_partials.collaboration')
@endsection
