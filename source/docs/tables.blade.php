@extends('_layouts.master')
@section('title')
  Tables | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Tables</li>
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
          <h2 class="type--header type--thin">Tables</h2>
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
@endsection
