{{-- page title --}}
<title>{{ $seoMeta['page_title'] }} - {{ config('app.name') }}</title>

{{-- favicon --}}
<link rel="icon" href="{{ url('/') }}/favicon.ico">

{{-- meta --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content='{{ $seoMeta['meta_desc'] }}'>
<meta name="keywords" content="{{ $seoMeta['meta_keywords'] }}">
<meta name="author" content='Arthur LORENT'>

{{-- csrf token --}}
<meta content="{{ csrf_token() }}" name="csrf-token" />

{{-- minified versionned css --}}
<link href="{{ $css or elixir('css/app.back.css') }}" rel="stylesheet">