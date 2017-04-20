@extends('_layouts.master')
@section('title')
  Typography | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Typography</li>
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

          <h2 class="type--header type--thin">Typography</h2>
          <h1>Headline Example 1</h1>
          <h2>Headline Example 2</h2>
          <h3>Headline Example 3</h3>
          <p><strong>Example:</strong> Lorem ipsum dolor sit amet, <em>italics consectetur adipisicing elit</em>. Ex eligendi modi dignissimos illo omnis animi, ut adipisci quidem! Recusandae corporis odio commodi eligendi excepturi possimus ea, praesentium quae, incidunt maiores.</p>
          <pre><code>&lt;h1&gt;Headline Example 1&lt;/h1&gt;
&lt;h2&gt;Headline Example 2&lt;/h2&gt;
&lt;h3&gt;Headline Example 3&lt;/h3&gt;

&lt;p&gt;&lt;strong&gt;Example:&lt;/strong&gt;Lorem ipsum dolor sit amet, &lt;em&gt;italics consectetur adipisicing elit&lt;/em&gt;. Nulla ratione reprehenderit ullam dolor sed illum odio, aliquid, officia mollitia illo quod numquam a non saepe eius! Quam, facere ratione veniam!.&lt;/p&gt;

<div class="type--dark-gray"><strong>// TYPE MODIFIERS</strong>
<strong>Type Size:</strong>
.giga
.mega
.kilo

.h1
.h2
.h3
.h4
.h5
.h6

.milli
.micro

<strong>Type Style:</strong>
.type--header
.type--emphasis
.type--strike
.type--left
.type--center
.type--right
.type--thin
.type--bold
.type--italic
.type--marginless
.type--uppercase

<strong>Type Color:</strong>
.type--red
.type--gray
.type--dark-gray
.type--light-gray
</div>
</code></pre>

<p><small><em><strong>Note:</strong> Take a look at Metaphors <code>_type.scss</code> &amp; <code>_helpers.scss</code> for more modifiers.</em></small></p>


        <br>
        </div>
      </div>
    </div>
  </div>
@endsection
