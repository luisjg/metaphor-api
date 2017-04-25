@extends('_layouts.master')
@section('title')
  Tables | Docs | Metaphor by META+Lab
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
          <h2 class="type--thin">Tables</h2>
          <div class="table--responsive">
            <table class="table table--striped table--bordered table--padded table--hover">
              <thead>
                <tr>
                  <th>Deal One</th>
                  <th>Deal Two</th>
                  <th>Deal Three</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Hotness</td>
                  <td>Un-Hotness</td>
                  <td>Re-Hotness</td>
                </tr>
                <tr>
                  <td>Revenge of the Hotness</td>
                  <td>Revenge of the Un-Hotness</td>
                  <td>Revenge of the Re-Hotness</td>
                </tr>
                <tr>
                  <td>The Hotness Strikes Back</td>
                  <td>The Un-Hotness Strikes Back</td>
                  <td>The Re-Hotness Strikes Back</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <pre><code>&lt;div class=&quot;table--responsive&quot;&gt;
  &lt;table class=&quot;table table--striped table--bordered table--padded table--hover&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Deal One&lt;/th&gt;
      &lt;th&gt;Deal Two&lt;/th&gt;
      &lt;th&gt;Deal Three&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Col 1&lt;/td&gt;
      &lt;td&gt;Col 2&lt;/td&gt;
      &lt;td&gt;Col 3&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

<div class="type--dark-gray"><strong>// TABLE MODIFIERS</strong>
.table--responsive
.table--padded
.table--striped
.table--bordered
.table--hover
.table--underlined
</div></code></pre><br>

          <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @include('_partials.collaboration')
@endsection
