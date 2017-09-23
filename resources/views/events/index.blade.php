<!DOCTYPE html>
<html>

  <head>

    <meta charset="UTF-8">
    <title>Events</title>

  </head>

  <body>

    <h1> {{ count($events) }} Events</h1>
    @foreach($events as $event)
      <article>
        <h1>{{ $event->name }}</h1>
        <p>{{ $event->description }}</p>
        <p>{!! format_price($event) !!}</p>
        <p>Lieu: {{ $event->location }}</p>
        <p>Date: {{ format_date($event->starts_at) }}</p>
      </article>
      @if(! $loop->last)
      <hr>
      @endif
    @endforeach

  </body>

</html>
