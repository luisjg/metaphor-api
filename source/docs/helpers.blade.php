@extends('_layouts.master')
@section('title')
  Helpers | Docs | Metaphor by META+Lab
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

              <h2 class="type--thin">Helpers</h2>
              <p>Helpers are utility classes that augment general capabilities across page elements. The use of helpers are not required, but may serve to enhance the experience of a page.</p>

              <br>

              <h2 class="type--thin">Images</h2>
              <p>
                <img class="img--border" src="../docs/imgs/person_1464281947.jpg" alt="Nerces Image">
                <img class="img--circle" src="../docs/imgs/person_1464281947.jpg" alt="Example Circle Image">
                <img class="img--hexagon" src="../docs/imgs/person_1464281947.jpg" alt="Nerces Hexagon Image">
              </p>

              <pre><code>&lt;img class=&quot;img--border&quot; src=&quot;beard-slayer.jpg&quot; alt=&quot;Nerces Image&quot;&gt;
&lt;img class=&quot;img--circle&quot; src=&quot;double-carnitas.jpg&quot; alt=&quot;Nerces Circle Image&quot;&gt;
&lt;img class=&quot;img--hexagon&quot; src=&quot;heavy-cream.jpg&quot; alt=&quot;Nerces Hexagon Image&quot;&gt;

<div class="type--dark-gray"><strong>// IMAGE MODIFIERS</strong>
.img--fluid
.img--circle
.img--hexagon
.img--border
</div></code></pre>
              <p><small><em><strong>Note:</strong> We recommend using image modifiers only on square images.</em></small></p>

              <h2 class="type--thin">Colors &amp; Backgrounds</h2>
              <p>The following pallete reflects the colors available in the <a href="http://www.csun.edu/identity/design-guidelines">CSUN Design Guidelines</a>.</p>
              <div class="cf">
                <div class="bg--red" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--black" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--dark-gray" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--gray" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--light-gray" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--sea-green" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--periwinkle" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--golden-yellow" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--azure" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--iris" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--cream" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--scarlet" style="float: left; height: 50px; width: 50px;"></div>
              </div>
              <br>
              <pre><code>&lt;div class=&quot;bg--red&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--black&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--dark-gray&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--gray&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--light-gray&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--sea-green&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--periwinkle&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--golden-yellow&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--azure&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--iris&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--cream&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;bg--scarlet&quot;&gt;&lt;/div&gt;</code></pre>

              <br>

              <h2 class="type--thin">Floats &amp; Positioning</h2>
              <p>You can position elements to the left and right using the following floats:</p>
              <div class="cf">
                <div class="bg--red pull-left" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--periwinkle pull-left" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--black pull-right" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--sea-green pull-right" style="float: left; height: 50px; width: 50px;"></div>
              </div>
              <br>
              <pre><code>&lt;div class=&quot;pull-left&quot;>&lt;/div&gt;
&lt;div class=&quot;pull-right&quot;&gt;&lt;/div&gt;</code></pre>
              <p>Additionally, you can avoid parent elements with floated children from collapsing by adding a clearfix <code>.cf</code> class on the parent element. To learn more about clearfixes read <a href="http://nicolasgallagher.com/micro-clearfix-hack">Micro Clearfix Hack by Nicolas Gallagher</a>.</p>
              <div class="cf" style="border: 2px solid #ccc; padding: 10px;">
                <div class="bg--gray pull-left" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--azure pull-right" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--iris pull-right" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--golden-yellow pull-right" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--black pull-right" style="float: left; height: 50px; width: 50px;"></div>
                <div class="bg--sea-green pull-right" style="float: left; height: 50px; width: 50px;"></div>
              </div>
              <br>
              <pre><code>&lt;div class=&quot;cf&quot;&gt;
  &lt;div class=&quot;pull-left&quot;>&lt;/div&gt;
  &lt;div class=&quot;pull-right&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

              <br>

              <h2 class="type--thin">Element Visibility</h2>
              <p>You can reveal and hide elements with the following visibility helpers:</p>

              <pre><code>&lt;div class=&quot;show&quot;>&lt;/div&gt;
&lt;div class=&quot;hide&quot;>&lt;/div&gt;

<div class="type--dark-gray">&lt;!-- Impacts flow of content but not visible --&gt;</div>&lt;div class=&quot;invisible&quot;&gt;&lt;/div&gt;</code></pre>

              <br>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('_partials.collaboration')
@endsection
