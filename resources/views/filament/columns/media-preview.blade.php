@php
    $url = Storage::url($getState());
    $record = $getRecord();
@endphp

@if($record->type === 'image')
    <img src="{{ $url }}" class="w-20 h-20 object-cover rounded" />
@elseif($record->type === 'video')
    <video src="{{ $url }}" class="w-28 h-20 rounded" controls></video>
@endif
