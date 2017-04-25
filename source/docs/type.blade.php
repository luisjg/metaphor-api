@extends('_layouts.master')
@section('title')
  Typography | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">{{ $page->upperCaseFilename() }}</li>
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

          <h2 class="type--thin">Typography</h2>
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
</div>
</div>

  @include('_partials.collaboration')
@endsection
