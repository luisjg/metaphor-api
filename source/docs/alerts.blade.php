@extends('_layouts.master')
@section('title')
Alerts | Docs | Metaphor by META+LAB
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
            <li class="breadcrumb__item">Alerts</li>
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
          <h2 class="type--header type--thin">Alerts</h2>
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
@endsection
