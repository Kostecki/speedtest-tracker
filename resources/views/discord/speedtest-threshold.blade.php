**Speedtest Threshold Breached - #{{ $id }}**

A new speedtest was completed using **{{ $service }}** but a threshold was breached.

@foreach ($metrics as $item)
- **{{ $item['name'] }}** {{ $item['threshold'] }}: {{ $item['value'] }}
@endforeach
- **URL:** {{ $url }}
