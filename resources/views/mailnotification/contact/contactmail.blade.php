@component('mail::message')
<h1 style="text-align: center; padding: 20px 0px;">Contact Us</h1>
<h3 style="padding: 20px 0px 10px 0px"><strong>Name : </strong> {{ $data->name}}</h3>
<h3 style="padding: 20px 0px 10px 0px"><strong>Email : </strong> {{ $data->email}}</h3>
<h3 style="padding: 20px 0px 10px 0px"><strong>Subject : </strong> {{ $data->subject}}</h3>
<h3 style="padding: 20px 0px 10px 0px"><strong>Message : </strong> {{ $data->message}}</h3>
Thanks,<br>
{{ 'Designer Country' }}
@endcomponent
