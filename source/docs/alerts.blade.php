@extends('_layouts.master')
@section('title')
Alerts | Docs | Metaphor by META+LAB
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
              <h2 class="type--thin">Alerts</h2>
              <div class="alert"><strong>Pro Tip:</strong> Try Hitting Refresh!
                <a href="#" class="alert__close" data-alert-close>&times;</a>
              </div>
              <div class="alert alert--info"><strong>Pro Tip:</strong> Try Hitting Refresh!
                <a href="#" class="alert__close" data-alert-close>&times;</a>
              </div>
              <div class="alert alert--success"><strong>Success!</strong> Data Saved.
                <a href="#" class="alert__close" data-alert-close>&times;</a>
              </div>
              <div class="alert alert--warning"><strong>Warning!</strong> Data Storage Limited.
                <a href="#" class="alert__close" data-alert-close>&times;</a>
              </div>
              <div class="alert alert--danger"><strong>Danger!</strong> Something went horribly wrong. Application will self destruct in 1min...
                <a href="#" class="alert__close" data-alert-close>&times;</a>
              </div>
              <br>
          <pre><code>&lt;div class=&quot;alert&quot;&gt;
  &lt;strong&gt;Pro Tip:&lt;/strong&gt; Try Hitting Refresh!
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--info&quot;&gt;
  &lt;strong&gt;Pro Tip:&lt;/strong&gt; Try Hitting Refresh!
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--success&quot;&gt;
  &lt;strong&gt;Success!&lt;/strong&gt; Data Saved.
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--warning&quot;&gt;
  &lt;strong&gt;Warning!&lt;/strong&gt; Data Storage Limited.
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--danger&quot;&gt;
  &lt;strong&gt;Danger!&lt;/strong&gt; Something went horribly wrong. Application will self destruct in 1min...
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;</code></pre>

          <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  @include('_partials.collaboration')
@endsection
