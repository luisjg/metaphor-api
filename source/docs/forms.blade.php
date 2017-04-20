@extends('_layouts.master')
@section('title')
Forms | Docs | Metaphor by META+Lab
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
            <li class="breadcrumb__item">Forms</li>
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
          <h2 class="type--header type--thin">Forms</h2>
          <p>When working with forms make sure to always wrap your input fields inside a parent <code>&lt;form&gt;</code> element. You can also use <code>.form__group</code> to space out your input fields vertically.</p>
          <pre><code>&lt;form&gt;

<div class="type--dark-gray">  &lt;!-- Add Form Inputs Here --&gt;
  &lt;div class=&quot;form__group&quot;&gt;
    &lt;label for=&quot;ex1&quot;&gt;Text&lt;/label&gt;
    &lt;input type=&quot;text&quot; id=&quot;ex1&quot; name=&quot;ex1&quot; placeholder=&quot;Text...&quot;&gt;
  &lt;/div&gt;

</div>&lt;/form&gt;</code></pre>

          <h2 class="type--header type--thin">Input Fields &amp; Textareas</h2>
          <div class="form__group">
            <div class="row">
              <div class="col-sm-4">
                <label for="ex1">Text</label>
                <input type="text" id="ex1" name="ex1" placeholder="Text...">
              </div>
              <div class="col-sm-4">
                <label for="ex2">Password</label>
                <input type="password" id="ex2" name="ex2" placeholder="Password...">
              </div>
              <div class="col-sm-4">
                <label for="ex3">Email</label>
                <input type="email" id="ex3" name="ex3" placeholder="Email...">
              </div>
            </div>
          </div>
          <div class="form__group">
            <label for="ex0">Textarea</label>
            <textarea id="ex0" name="ex0" placeholder="Textarea..."></textarea>
          </div>
          <pre><code>&lt;label for=&quot;ex1&quot;&gt;Text&lt;/label&gt;
&lt;input type=&quot;text&quot; id=&quot;ex1&quot; name=&quot;ex1&quot; placeholder=&quot;Text...&quot;&gt;

&lt;label for=&quot;ex2&quot;&gt;Password&lt;/label&gt;
&lt;input type=&quot;password&quot; id=&quot;ex2&quot; name=&quot;ex2&quot; placeholder=&quot;Password...&quot;&gt;

&lt;label for=&quot;ex3&quot;&gt;Email&lt;/label&gt;
&lt;input type=&quot;email&quot; id=&quot;ex3&quot; name=&quot;ex3&quot; placeholder=&quot;Email...&quot;&gt;

&lt;label for=&quot;ex0&quot;&gt;Comment&lt;/label&gt;
&lt;textarea id=&quot;ex0&quot; name=&quot;ex0&quot; placeholder=&quot;Comment...&quot;&gt;&lt;/textarea&gt;
</code></pre>

          <br>

          <h2 class="type--header type--thin">Labels w/ Required Fields</h2>
          <div class="form__group">
            <div class="row">
              <div class="col-sm-4">
                <label class="label--required" for="example_1">Username</label>
                <input type="text" id="example_1" name="example_1" placeholder="Username...">
              </div>
            </div>
          </div>
          <pre><code>&lt;label class=&quot;label--required&quot; for=&quot;ex1&quot;&gt;Text&lt;/label&gt;
&lt;input type=&quot;text&quot; id=&quot;ex1&quot; name=&quot;ex1&quot; placeholder=&quot;Text...&quot;&gt;
</code></pre>

          <br>

          <h2 class="type--header type--thin">Datepicker</h2>
          <div class="form__group">
            <label for="ex4">Date Picker</label>
            <input type="text" id="ex4" id="ex4" class="datepicker" placeholder="03/23/90">
          </div>

          <pre><code>&lt;label for=&quot;ex3&quot;&gt;Email&lt;/label&gt;
&lt;input type=&quot;text&quot; id=&quot;ex3&quot; name=&quot;ex3&quot; class=&quot;datepicker&quot; placeholder=&quot;01/01/16...&quot;&gt;</code></pre>

          <br>

          <h2 class="type--header type--thin">Select Fields</h2>
          <div class="form__group">
            <select name="" id="example1">
              <option value="">-- Select Type --</option>
              <option value="1">Jedi</option>
              <option value="2">Wookie</option>
              <option value="3">Sith</option>
            </select>
          </div>
          <pre><code>&lt;label for=&quot;example1&quot;&gt;Select Type&lt;/label&gt;
&lt;select name=&quot;example1&quot; id=&quot;example1&quot;&gt;
  &lt;option value=&quot;&quot;&gt;-- Select Type --&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;Jedi&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Wookie&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Sith&lt;/option&gt;
&lt;/select&gt;</code></pre>

        <br>
        </div>
      </div>
    </div>
  </div>
@endsection
