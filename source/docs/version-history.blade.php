@extends('_layouts.master')
@section('title')
  Version History | Docs | Metaphor by META+LAB
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
            <li class="breadcrumb__item">Version History</li>
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
          <h2 id="cdn" class="type--header type--thin">Available Versions</h2>
          <p>Previous versions of Metaphor are available through our Content Delivery Network (CDN). However, we recommend using the latest version for the most up-to-date functionality.</p>
          <pre><code><div class="type--dark-gray">// CSS</div>&lt;link rel=&quot;stylesheet&quot; href=&quot;//cdn.metalab.csun.edu/metaphor/v0.12.0-Alpha/css/metaphor.css&quot;&gt;

<div class="type--dark-gray">// JavaScript</div>&lt;script src=&quot;//cdn.metalab.csun.edu/metaphor/v0.12.0-Alpha/js/metaphor.js&quot;&gt;&lt;/script&gt;</code></pre>
          <p><small><em><strong>Note:</strong> Specific versions and information about their features can be found on<a target="_blank" href="https://github.com/csun-metalab/metaphor/releases?after=v0.6.0"> Github.</a></em></small></p>

          <ul class="timeline">

            <li>
              <div class="type--header">
                <h2 class="timeline__header type--marginless">Metaphor 0.12.0-Alpha <small>Release: 02/13/17</small></h2>
              </div>
              <p class="timeline__event"><strong>New Features</strong></p>
              <div class="timeline__content">
                <ol>
                  <li>Added a Sub-Navigation component.</li>
                </ol>
              </div>
              <p class="timeline__event"><strong>Improvements</strong></p>
              <div class="timeline__content">
                <ol>
                  <li>Panel components now have support for images with <code>.panel__img</code>.</li>
                </ol>
              </div>
            </li>

            <li>
              <div class="type--header">
                <h2 class="timeline__header type--marginless">Metaphor 0.11.0-Alpha <small>Release: 02/10/17</small></h2>
              </div>
              <p class="timeline__event"><strong>New Features</strong></p>
              <div class="timeline__content">
                <ol>
                  <li>Added a Timeline component.</li>
                </ol>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
