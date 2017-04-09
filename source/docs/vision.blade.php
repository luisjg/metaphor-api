@extends('_layouts.master')
@section('title')
  Our Vision | Docs | Metaphor by META+Lab
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
          <li class="breadcrumb__item">Our Vision</li>
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

        <h2 id="vision" class="type--header type--thin">Our Vision</h2>
        <p>At META+Lab we believe that developers should focus on their products without the concern of re-inventing the interface elements for every new application. So we built Metaphor, a user interface kit (UI Kit) that ensures web applications maintain consistency with <a href="http://www.csun.edu/identity">CSUN branding and identity standards</a>.</p>
        <p>Metaphor was architected from the ground up to specifically improve the mobile user experience, content legibility and compliance with ADA guidelines across all devices. With the help of Metaphor we hope to extend the current <a href="http://www.csun.edu/it/web-one">CSUN Web-One guidelines</a> to better incorporate web applications.</p>

        <br>

        <h2 id="open-source" class="type--header type--thin">Our Commitment to Open Source</h2>
        <p>We believe that using the Open Source methodology makes Metaphor more robust and flexible. Any problems found with our UI Kit can be immediately identified and fixed by META+LAB and the Open Source community.</p>
        <p>Out of the box Metaphor provides you with a comprehensive collection of HTML, CSS, and JS components. We openly encourage other developers to identify bugs, improvements and new features to improve Metaphor.</p>
        <p>Metaphor is a completely open source to encourage campus collaboration. Metaphor is built under the MIT License. If you are interested in contributing or learning more <a href="https://github.com/csun-metalab/metaphor.git">check out Metaphor on <i class="fa fa-github" aria-hidden="true"></i> Github.</a></p>

        <br>

      </div>
    </div>
  </div>
</div>
@endsection
