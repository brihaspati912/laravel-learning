 @props(['active'=>false,"type"=>'a'])
 
@if($type==='a')
   <a {{$attributes}} class="{{ $active ?'bg-gray-900 text-white rounded-md  px-3 py-2 text-sm font-medium ':'rounded-md  px-3 py-2 text-white  text-sm font-medium '}}" >{{$slot }}</a>
@else
  <button {{$attributes}} class="{{ $active ?'bg-gray-900 text-white rounded-md  px-3 py-2 text-sm font-medium ':'rounded-md  px-3 py-2 text-white  text-sm font-medium '}}" >{{$slot }}</button>
  @endif
 
