@extends('_layouts.master')
@section('title')
Accordion | Docs | Metaphor by META+LAB
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
            <li class="breadcrumb__item">Accordion</li>
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
          <h2 class="type--header type--thin">Accordion</h2>
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
@endsection
