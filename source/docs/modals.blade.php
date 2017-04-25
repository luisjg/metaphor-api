@extends('_layouts.master')
@section('title')
  Modals | Docs | Metaphor by META+Lab
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
          <h2 class="type--thin">Modals</h2>
          <p>Working with modals is super simple. Create your modal markup and then trigger the event with a button.</p>
          <p>
            <button class="btn btn-primary" data-modal="#test">Modal Powers Activate!!!</button>
            <button class="btn btn-default" data-modal="#test1">And Another One</button>
          </p>

          <!-- Modal Example 1 -->
          <div id="test" class="modal__outer">
            <div class="modal">
              <div class="modal__header">
                <strong>Modal Title</strong>
              </div>
              <div class="modal__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolore, aliquam nesciunt praesentium nemo amet laudantium voluptatem, libero consectetur doloribus blanditiis sint asperiores provident sequi minus atque, vitae minima tenetur!</div>
              <div class="modal__footer">
                <div class="pull-right">
                  <button class="btn btn-default" data-modal-close="#test">Cancel</button>
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              <div class="modal__close" data-modal-close="#test"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
          </div>

          <!-- Modal Example 2 -->
          <div id="test1" class="modal__outer">
            <div class="modal modal--sm">
              <div class="modal__header">
                <h3>Login</h3>
              </div>
              <div class="modal__content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form__group">
                      <label class="label--required" for="example5">Email</label>
                      <input id="example5" type="text" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form__group">
                      <label class="label--required" for="example6">Password</label>
                      <input id="example6" type="password" placeholder="Password">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal__footer">
                <div class="pull-right">
                  <button class="btn btn-default" data-modal-close="#test1">Cancel</button>
                  <button class="btn btn-primary">Sign in</button>
                </div>
              </div>
              <div class="modal__close" data-modal-close="#test1"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
          </div>

          <pre><code>&lt;button class=&quot;btn btn-default&quot; data-modal=&quot;#test&quot;&gt;Modal Powers Activate!!!&lt;/button&gt;

&lt;div id=&quot;test&quot; class=&quot;modal__outer&quot;&gt;
  &lt;div class=&quot;modal&quot;&gt;
    &lt;div class=&quot;modal__header&quot;&gt;
      &lt;strong&gt;Modal Title&lt;/strong&gt;
    &lt;/div&gt;
    &lt;div class=&quot;modal__content&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolore, aliquam nesciunt praesentium nemo amet laudantium voluptatem, libero consectetur doloribus blanditiis sint asperiores provident sequi minus atque, vitae minima tenetur!&lt;/div&gt;
    &lt;div class=&quot;modal__footer&quot;&gt;
      &lt;div class=&quot;pull-right&quot;&gt;
        &lt;button class=&quot;btn btn-default&quot; data-modal-close=&quot;#test&quot;&gt;Cancel&lt;/button&gt;
        &lt;button class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;modal__close&quot; data-modal-close=&quot;#test&quot;&gt;&lt;i class=&quot;fa fa-times&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre><br>

        <br>
        </div>
      </div>
    </div>
  </div>
@include('_partials.collaboration')
@endsection
