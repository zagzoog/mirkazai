<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-tabler-scan-eye  {{ $attributes }}>

{{ $slot ?? "" }}
</x-tabler-scan-eye>