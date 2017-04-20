@extends('_layouts.master')
@section('title')
  Tags | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Tags</li>
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
          <h2 class="type--header type--thin">Tags</h2>
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
@endsection
