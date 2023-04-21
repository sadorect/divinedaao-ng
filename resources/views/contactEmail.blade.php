<h1>Welcome</h1>

<p>You got mail. <br>

  <strong>From:</strong> {{$data['name']}} <br>
  <strong>Email:</strong> <a href="mailto:{{ $data['email']}}?subject=Re:{{$data['subject']}}&body={{ $data['message']}} "> {{ $data['email']}} </a> <br>
  <strong>Subject:</strong> {{$data['subject']}} <br>
  <strong>Message:</strong> {{ $data['message']}}
</p>