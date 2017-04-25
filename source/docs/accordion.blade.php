@extends('_layouts.master')
@section('title')
Accordion | Docs | Metaphor by META+LAB
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
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                @include('_partials.sidebar')
              </div>
              <div class="col-md-9">
                <h2 class="type--thin">Accordion</h2>
                <dl class="accordion">
                  <dt class="accordion__header"> Topic #1 </dt>
                  <dd class="accordion__content">
                    <div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
                    </div>
                  </dd>
                  <dt class="accordion__header"> Topic #2 </dt>
                  <dd class="accordion__content">
                    <p>Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
                    <p>Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
                    <p>Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
                  </dd>
                  <dt class="accordion__header"> Topic #3 </dt>
                  <dd class="accordion__content">
                    <p>Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
                  </dd>
                </dl>
                <br>
                <pre><code>&lt;dl class=&quot;accordion&quot;&gt;
  &lt;dt class=&quot;accordion__header&quot;&gt; Topic #1 &lt;/dt&gt;
  &lt;dd class=&quot;accordion__content&quot;&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?&lt;/p&gt;
  &lt;/dd&gt;
  &lt;dt class=&quot;accordion__header&quot;&gt; Topic #2 &lt;/dt&gt;
  &lt;dd class=&quot;accordion__content&quot;&gt;
    &lt;p&gt;Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?&lt;/p&gt;
  &lt;/dd&gt;
  &lt;dt class=&quot;accordion__header&quot;&gt; Topic #3 &lt;/dt&gt;
  &lt;dd class=&quot;accordion__content&quot;&gt;
    &lt;p&gt;Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?&lt;/p&gt;
  &lt;/dd&gt;
&lt;/dl&gt;</code></pre><br></code></pre><br>

              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('_partials.collaboration')
@endsection
