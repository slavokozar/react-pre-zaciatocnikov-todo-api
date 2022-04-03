@php
    use Knuckles\Scribe\Tools\WritingUtils as u;
    /** @var  Knuckles\Camel\Output\OutputEndpointData $endpoint */

    $defaultHeaders = ["Content-Type", "Accept"];
    $hasHeaders = !empty($endpoint->headers) && !empty(array_diff(array_keys($endpoint->headers), $defaultHeaders));
    $hasHeadersOrQueryOrBodyParams = $endpoint->hasHeadersOrQueryOrBodyParams() && $hasHeaders;
@endphp





```javascript


axios.{{ strtolower($endpoint->httpMethods[0]) }}('{{ rtrim($baseUrl, '/') . '/' . ltrim($endpoint->boundUri, '/') }}@if(count($endpoint->cleanQueryParameters))?{!! u::printQueryParamsAsString($endpoint->cleanQueryParameters) !!}@endif'@if($hasHeadersOrQueryOrBodyParams), { @else)@endif
@if($hasHeadersOrQueryOrBodyParams)
    @if($hasHeaders)

    'headers': {
@foreach($endpoint->headers as $header => $value)
        "{{ $header }}": "{{ $value }}",
@endforeach
    }@if(!empty($endpoint->cleanBodyParameters)),@endif
    @if(!empty($endpoint->cleanBodyParameters))

    'data': {
@foreach($endpoint->cleanBodyParameters as $parameter => $value)
        "{{ $parameter }}": "{{ $value }}",
@endforeach
    }
    @endif
@endif

}
@endif

{{--    @elseif(!empty($endpoint->cleanBodyParameters))--}}
{{--        @if ($endpoint->headers['Content-Type'] == 'application/x-www-form-urlencoded')--}}
{{--            'form_params' => {!! u::printPhpValue($endpoint->cleanBodyParameters, 8) !!},--}}
{{--        @else--}}
{{--            'json' => {!! u::printPhpValue($endpoint->cleanBodyParameters, 8) !!},--}}
{{--        @endif--}}
{{--    @endif--}}


{{--    @if($endpoint->hasFiles())--}}
{{--        @foreach($endpoint->fileParameters as $parameter => $value)--}}
{{--            @foreach(u::getParameterNamesAndValuesForFormData($parameter, $value) as $key => $file)--}}
{{--            @endforeach--}}
{{--        @endforeach--}}
```