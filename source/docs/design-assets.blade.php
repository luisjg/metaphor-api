@extends('_layouts.master')
@section('title')
Design Assets | Docs | Metaphor by META+Lab
@endsection
@section('body')
  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Documentation</h1>
          <ul class="breadcrumbs breadcrumbs--marginless type--white">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Resources</li>
            <li class="breadcrumb__item">Design Assets</li>
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
          <h2 id="getting-started" class="type--header type--thin">Design Assets</h2>
          <p><!-- Adobe Experience Design CC is part of <a href="http://www.adobe.com/products/experience-design.html">Adobe Creative Cloud</a>. It’s a new experience in user experience. Design and prototype websites and mobile apps with Adobe XD, the first all-in-one tool for UX designers. -->
          For designers mocking up an user interface layout we created a Adobe XD file that has all the componets available to you to help you create all aspects of your design.</p>

          <br>

          <h2 id="installation" class="type--header type--thin">Download</h2>
          <p>To use the Adobe XD file please make sure that you have <a href="http://www.adobe.com/products/experience-design.html"> Adobe Creative Cloud</a> install on your computer.
          <br>
          <br>
          Click the link to download: <a href="../resources/metaphor-xd.zip" download>metaphor.xd</a></p>
        </div>
      </div>
    </div>
  </div>
  @endsection
