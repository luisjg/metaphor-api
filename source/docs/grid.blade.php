  @extends('_layouts.master')
  @section('title')
    Grid System | Docs | Metaphor by META+Lab
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
                <h2 class="type--thin">Grid System</h2>
                <p>Using <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> you can modify the grid system to adjust on small, medium, or large devices.</p>

                <div class="grid--outline cf">
                  <div class="col--outline col-sm-12">12</div>
                  <div class="col--outline col-sm-1">1</div>
                  <div class="col--outline col-sm-11">11</div>
                  <div class="col--outline col-sm-2">2</div>
                  <div class="col--outline col-sm-10">10</div>
                  <div class="col--outline col-sm-3">3</div>
                  <div class="col--outline col-sm-9">9</div>
                  <div class="col--outline col-sm-4">4</div>
                  <div class="col--outline col-sm-8">8</div>
                  <div class="col--outline col-sm-5">5</div>
                  <div class="col--outline col-sm-7">7</div>
                  <div class="col--outline col-sm-6">6</div>
                  <div class="col--outline col-sm-6">6</div>
                </div>

                <br>

                <p>We recommend wrapping your grid inside a <code>.container</code> element to assist with content reflow.</p>
                <pre><code>&lt;div class=&quot;container&quot;&gt;

                  <div class="type--dark-gray">  &lt;!-- Your Code Here --&gt;
                    &lt;div class=&quot;row&quot;&gt;
                    &lt;div class=&quot;col-sm-12&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                  </div>
                  &lt;/div&gt;</code></pre>

                  <br>

                  <p>When adding the grid system to your project wrap your columns in a <code>.row</code> element. The following example is a basic row of columns ( <code>.col-*-*</code> ) that automatically adjust to different device sizes:</p>
                  <div class="grid-example cf">
                    <div class="col--outline col-sm-12 col-md-1 col-lg-2 col-xl-4">1</div>
                    <div class="col--outline col-sm-12 col-md-3 col-lg-8 col-xl-4">2</div>
                    <div class="col--outline col-sm-12 col-md-8 col-lg-2 col-xl-4">3</div>
                  </div>

                  <p><small><em><strong>Note:</strong> You will need to resize your browser to view grid system changes.</em></small></p>

                  <pre><code>&lt;div class=&quot;row&quot;&gt;
                    &lt;div class=&quot;col-sm-12 col-md-1 col-lg-2 col-xl-4&quot;&gt;1&lt;/div&gt;
                    &lt;div class=&quot;col-sm-12 col-md-3 col-lg-8 col-xl-4&quot;&gt;2&lt;/div&gt;
                    &lt;div class=&quot;col-sm-12 col-md-8 col-lg-2 col-xl-4&quot;&gt;3&lt;/div&gt;
                    &lt;/div&gt;</code></pre>

                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('_partials.collaboration')
  @endsection
