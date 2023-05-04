<h1>Hello</h1>

<p>You got mail from the contact form on divinedaao.ng. <br>
To reply the sender directly, you can click on the email address below. Your email client will open with the subject and message body already populated. <br><br>
  <strong>Sender Name:</strong> {{$data['name']}} <br>
  <strong>Email:</strong> <a href="mailto:{{ $data['email']}}?subject=Re:{{$data['subject']}}&body={{ $data['message']}} "> {{ $data['email']}} </a> <br>
  <strong>Subject:</strong> {{$data['subject']}} <br>
  <strong>Message:</strong> {{ $data['message']}}<br>
  <hr>
</p>