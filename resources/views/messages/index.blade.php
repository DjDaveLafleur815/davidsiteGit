@foreach($messages as $message)
    <p><strong>{{ $message->nom }} {{ $message->prenom }}</strong> ({{ $message->email }})</p>
    <p>{{ $message->contenu }}</p>
@endforeach
