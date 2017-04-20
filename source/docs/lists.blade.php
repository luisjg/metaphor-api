@extends('_layouts.master')
@section('title')
Lists | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Lists</li>
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
          <h2 class="type--header type--thin">Lists</h2>
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
@endsection
