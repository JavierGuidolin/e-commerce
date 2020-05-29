@component('mail::message')

<p>El usuario {{$data['fname'] . ' ' . $data['lname'] }} ha enviado el siguiente mensaje: </p>

<p> " <strong> {{$data['message']}} </strong> "</p>

<p>Respondele a la brevedad...</p>

@endcomponent


