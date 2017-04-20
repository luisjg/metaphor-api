@extends('_layouts.master')
@section('title')
  Text Editor Snippets | Docs | Metaphor by META+Lab
@endsection
@section('body')
  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Documentation</h1>
          <ul class="breadcrumbs breadcrumbs--marginless type--white">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">Resources</li>
            <li class="breadcrumb__item">Text Editor Snippets</li>
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

          <h2 id="st3" class="type--header type--thin">Sublime Text - Snippet Package</h2>
          <p>Development using Metaphor is now even easier with our new Sublime Text Snippet Package. You can now on the fly use pre-built components to make your development a breeze and make use of all custom classes and modifiers made present by Metaphor.</p>

          <br>

          <h2 id="install-guide" class="type--header type--thin">Installation Guide</h2>
          <h3>With Package Control</h3>
          <p>The easiest way to install is through <a href="http://wbond.net/sublime_packages/package_control/installation">Package Control</a></p>
          <p>Once you install Package Control, restart Sublime Text, bring up the Command Palette (<code>Command+Shift+P</code> on OS X, <code>Control+Shift+P</code> on Linux/Windows). Select "Package Control: Install Package", then select <a href="https://github.com/csun-metalab/metaphor-snippets">Metaphor-Snippets</a>. This method will automatically keep Metaphor Sublime Package up to date.</p>
          <h3>Manual Installation</h3>
          <ol>
            <li>Download "MetaphorSnippets" folder</li>
            <li>Go to your packages (in Sublime : Preferences > Browse Packages...)</li>
            <li>Copy the folder "MetaphorSnippets" in this folder</li>
          </ol>
          <br>

        </div>
      </div>
    </div>
  </div>
@endsection
