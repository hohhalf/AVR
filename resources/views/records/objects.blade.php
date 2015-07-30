@extends('base')
<ol>
@foreach($dispname as $object)
  <li><a href="/show/{{$object->DataIndex}}">{{ $object->DispName }}</a></li>
@endforeach
</ol>
