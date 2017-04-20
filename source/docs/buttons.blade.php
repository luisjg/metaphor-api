@extends('_layouts.master')
@section('title')
Buttons | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Buttons</li>
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
          <h2 class="type--header type--thin">Buttons</h2>
          <ul class="breadcrumbs">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Documentation</li>
            <li class="breadcrumb__item">Buttons</li>
          </ul>
          <p>
            <button role="button" class="btn btn-default">Button</button>
            <button role="button" class="btn btn-primary">Button</button>
            <button role="button" class="btn btn-success">Button</button>
          </p>
          <p>
          <pre><code>&lt;button role=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Button&lt;/button&gt;
&lt;button role=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
&lt;button role=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Button&lt;/button&gt;

<div class="type--dark-gray"><strong>// BUTTON MODIFIERS</strong>
<strong>Button Size:</strong>
.btn-sm
.btn-lg

<strong>Button Color:</strong>
.btn-default
.btn-primary
.btn-success

<strong>Button Style:</strong>
.btn-default-outline
.btn-primary-outline
.btn-success-outline
</div>
</code></pre><br>

        <br>
        </div>
      </div>
    </div>
  </div>
@endsection
