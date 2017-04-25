@extends('_layouts.master')
@section('title')
Lists | Docs | Metaphor by META+Lab
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
              <h2 class="type--thin">Lists</h2>
              <p>When using lists ( <code>&lt;ul&gt;</code> ), you can add custom modifiers to change their layout.</p>
              <div class="row">
                <div class="col-sm-4">
                  <ul class="list">
                    <li class="list__item"><a href="#">Side Nav Link</a></li>
                    <li class="list__item"><a href="#">Side Nav Link</a></li>
                    <li class="list__item"><a href="#">Side Nav Link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="list list--arrows list--hover">
                    <li class="list__item"><a href="#">Side Nav Link</a></li>
                    <li class="list__item"><a href="#">Side Nav Link</a></li>
                    <li class="list__item"><a href="#">Side Nav Link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="list list--underlined">
                    <li><a href="#">Nav Link List</a></li>
                    <li><a href="#">Nav Link List</a></li>
                    <li><a href="#">Nav Link List</a></li>
                  </ul>
                </div>
              </div>
              <br>
          <pre><code>&lt;ul class=&quot;list&quot;&gt;
  &lt;li class=&quot;list__item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Side Nav Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;list__item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Side Nav Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;list__item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Side Nav Link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

<div class="type--dark-gray"><strong>// LIST MODIFIERS</strong>
.list--arrows
.list--hover
.list--underlined
</div>
</code></pre><br>

            <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @include('_partials.collaboration')
@endsection
