@extends('_layouts.master')
@section('title')
  Tags | Docs | Metaphor by META+Lab
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
              <h2 class="type--thin">Tags</h2>
              <p>
                <span>Tag Cloud: </span>
                <span class="tag tag--close">When</span>
                <span class="tag tag--close">A</span>
                <span class="tag tag--close">Problem</span>
                <span class="tag tag--close">Comes</span>
                <span class="tag tag--close">Along</span>
                <span class="tag tag--close">You</span>
                <span class="tag tag--close">Must</span>
                <span class="tag tag--close">Whip It</span>
              </p>
              <p>
                <span>Status: </span>
                <a href="#" class="tag tag--success">Approved</a>
                <a href="#" class="tag tag--warning">Pending</a>
                <a href="#" class="tag tag--danger">Error</a>
              </p>
          <pre><code>&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;Default&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;tag tag--success&quot;&gt;Approved&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;tag tag--warning&quot;&gt;Pending&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;tag tag--danger&quot;&gt;Error&lt;/a&gt;

<div class="type--dark-gray"><strong>// TAG MODIFIERS</strong>
<strong>Tag Actions:</strong>
.tag--close

<strong>Tag Colors:</strong>
.tag--success
.tag--warning
.tag--danger
</div></code></pre>
              <p><small><em><strong>Note:</strong> You can use <code>&lt;span&gt;</code> or <code>&lt;a&gt;</code> elements. The only difference is anchor tags include styling for cursors.</em></small></p>
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
