@extends('_layouts.master')
@section('title')
  >Pagination | Docs | Metaphor by META+Lab
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
              @Include('_partials.sidebar')
            </div>
            <div class="col-md-9">
              <h2 class="type--thin">Pagination</h2>

              <ul class="pagination">
                <li class="disabled"><span>«</span></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="disabled"><span>...</span></li>
                <li><a href="">20</a></li>
                <li><a href="#">21</a></li>
                <li><a href="#" rel="next">»</a></li>
              </ul>

              <pre><code>&lt;ul class=&quot;pagination&quot;&gt;
  &lt;li class=&quot;disabled&quot;&gt;&lt;span&gt;«&lt;/span&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;span&gt;1&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;disabled&quot;&gt;&lt;span&gt;...&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;&quot;&gt;20&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;21&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; rel=&quot;next&quot;&gt;»&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre><br>

              <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @include('_partials.collaboration')
@endsection
