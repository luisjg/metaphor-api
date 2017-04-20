@extends('_layouts.master')
@section('title')
  Panels | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Panels</li>
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

          <h2 class="type--header type--thin">Panels</h2>
          <div class="panel">
            <div class="panel__content">This is a basic panel</div>
          </div>
          <div class="panel">
            <div class="panel__content">This is a basic panel w/ a footer</div>
            <div class="panel__footer"><strong>Pro Tip!</strong> Smiling Makes Others Smile :)</div>
          </div>
          <div class="panel">
            <div class="panel__header">
              <strong>Panel</strong>
            </div>
            <div class="panel__content">This is a basic panel w/ a header</div>
          </div>
          <div class="panel panel--red">
            <div class="panel__header">
              <strong>Panel Alert</strong>
            </div>
            <div class="panel__content">This is a basic panel w/ a color modifier (options: red, cream, dark-gray)</div>
            <div class="panel__footer"><strong>Warning:</strong> Are You Sure You Want To Do That?</div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="panel">
                <div class="panel__content">
                  <p><strong>Panel Grid</strong></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="panel">
                <div class="panel__content">
                  <p><strong>Panel Grid</strong></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="panel">
                <div class="panel__content">
                  <p><strong>Panel Grid</strong></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
                </div>
              </div>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="panel">
                <div class="panel__img" style="background-image: url(http://manhattanpizzaplacehga.com/wp-content/uploads/2016/03/wafswectpmbr0zmug9ly.jpg)"></div>
                <div class="panel__content">
                  <p><strong>Project Pizza</strong></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="panel">
                <div class="panel__img" style="background-image: url(https://www.amherst.edu/system/files/styles/fs_1220_800/private/Psychology_compressed_1920x1280.jpg?itok=FAEv8xqf&__=1458580432)"></div>
                <div class="panel__content">
                  <p><strong>Project Mental</strong></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="panel">
                <div class="panel__img" style="background-image: url(https://www.seas.upenn.edu/images/cmpe/circuit-board.jpg)"></div>
                <div class="panel__content">
                  <p><strong>Project Circuit Deal</strong></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
                </div>
              </div>
            </div>
          </div>

          <br>

          <pre><code>&lt;div class=&quot;panel&quot;&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;panel&quot;&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel w/ a footer&lt;/div&gt;
  &lt;div class=&quot;panel__footer&quot;&gt;&lt;strong&gt;Pro Tip!&lt;/strong&gt; Smiling Makes Others Smile :)&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;panel&quot;&gt;
  &lt;div class=&quot;panel__header&quot;&gt;
    &lt;strong&gt;Panel&lt;/strong&gt;
  &lt;/div&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel w/ a header&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;panel panel--red&quot;&gt;
  &lt;div class=&quot;panel__header&quot;&gt;
    &lt;strong&gt;Panel Alert&lt;/strong&gt;
  &lt;/div&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel w/ a color modifier&lt;/div&gt;
  &lt;div class=&quot;panel__footer&quot;&gt;&lt;strong&gt;Warning:&lt;/strong&gt; Are You Sure You Want To Do That?&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;panel&quot;&gt;
  &lt;div class=&quot;panel__img&quot; style=&quot;background-image: url(...)&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;panel__content&quot;&gt;
    &lt;p&gt;&lt;strong&gt;Project Pizza&lt;/strong&gt;&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre><br>

        <br>
        </div>
      </div>
    </div>
  </div>
@endsection
