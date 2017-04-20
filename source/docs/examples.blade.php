@extends('_layouts.master')
@section('title')
Examples | Docs | Metaphor by META+Lab
@endsection
@section('body')
  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Documentation</h1>
          <ul class="breadcrumbs breadcrumbs--marginless type--white">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Intro</li>
            <li class="breadcrumb__item">Examples</li>
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
          <h2 class="type--header type--thin">Examples</h2>
          <ul class="list--unstyled">
            <li><a href="../examples/one-column.html">One Column Layout</a></li>
            <li><a href="../examples/two-column.html">Two Column Layout</a></li>
            <li><a href="../examples/three-column.html">Three Column Layout</a></li>
            <li><a href="../examples/collapse-footer.html">Full Page View</a></li>
            <li><a href="../examples/banner-two-column.html">Banner Image with A Two Column Layout</a></li>
            <li><a href="../examples/multi-panel-column.html">Multi Panel Column Layout</a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>
@endsection
