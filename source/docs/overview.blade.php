@extends('_layouts.master')
@section('title')
  Metaphor by META+LAB
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
            <li class="breadcrumb__item">Overview</li>
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
              <h2 class="type--thin">Our Vision</h2>
              <p>At META+Lab we believe that developers should focus on their products without the concern of re-inventing the interface elements for every new application. So we built Metaphor, a user interface kit (UI Kit) that ensures web applications maintain consistency with <a href="http://www.csun.edu/identity">CSUN branding and identity standards</a>.</p>
              <p>Metaphor was architected from the ground up to specifically improve the mobile user experience, content legibility and compliance with ADA guidelines across all devices. With the help of Metaphor we hope to extend the current <a href="http://www.csun.edu/it/web-one">CSUN Web-One guidelines</a> to better incorporate web applications.</p>

              <br>

              <h2 class="type--thin">Our Commitment to Open Source</h2>
              <p>We believe that using the Open Source methodology makes Metaphor more robust and flexible. Any problems found with our UI Kit can be immediately identified and fixed by META+LAB and the Open Source community.</p>
              <p>Out of the box Metaphor provides you with a comprehensive collection of HTML, CSS, and JS components. We openly encourage other developers to identify bugs, improvements and new features to improve Metaphor.</p>
              <p>Metaphor is a completely open source to encourage campus collaboration. Metaphor is built under the MIT License. If you are interested in contributing or learning more <a href="https://github.com/csun-metalab/metaphor.git">check out Metaphor on <i class="fa fa-github" aria-hidden="true"></i> Github.</a></p>

              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('_partials.collaboration')
@endsection
