<h1>Client Submission</h1>
<p>Name: {{ $client->name }}</p>
<p>Email: {{ $client->email }}</p>
<p>Package: {{ $client->address }}</p>
<p>Contact Number: {{ $client->contact_number }}</p>
<p>Date: {{ $client->submission_date }}</p>
<p>Signature:</p>
<img src="data:image/png;base64,{{ $client->signature }}">
