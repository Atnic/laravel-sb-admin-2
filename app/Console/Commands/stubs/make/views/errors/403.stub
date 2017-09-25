@extends('layouts.app')

@section('content-title')
<p class="text-warning">403 Error Page</p>
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">Oops! {{ class_basename($exception->getPrevious() ? : $exception) }}</div>

      @if($exception->getMessage())
      <div class="panel-body">
        {{ $exception->getPrevious() ? $exception->getPrevious()->getMessage() : $exception->getMessage() }}
      </div>
      @endif
    </div>
  </div>
</div>
@endsection
