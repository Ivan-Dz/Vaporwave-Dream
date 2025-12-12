@extends('layouts.admin')

@section('title')
    Vaporwave Dream
@endsection

@section('content-header')
    <h1>Vaporwave Dream<small>An exclusive, premium theme.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li><a href="{{ route('admin.extensions') }}">Extensions</a></li>
        <li class="active">Vaporwave Dream</li>
    </ol>
@endsection

@section('content')

<div class="row">
  <div class="col-xs-3">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class='bx bx-star' style='margin-right:5px; color: #E458F6;'></i>Overview</h3> </div>
      <div class="box-body">
        <p>You are currently running version <code>^#version#^</code> of **Vaporwave Dream**.</p>
        <p>Author: **Your Name**</p>
      </div>
    </div>
  
  </div>
</div>

@endsection

@section('footer-scripts')
    @parent
    <script>
        // هنا يمكن إضافة أي JavaScript تحتاجه لاحقاً
    </script>
@endsection
