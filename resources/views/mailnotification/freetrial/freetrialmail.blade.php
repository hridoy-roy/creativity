@component('mail::message')
<h1 style="text-align: center; padding: 20px 0px;">Free Trail Infromation</h1>
<h3 style="padding: 20px 0px 10px 0px"><strong>Category : </strong> {{ $data->category}}</h3>
<h3 style="padding: 20px 0px 10px 0px"><strong>Email : </strong> {{ $data->email}}</h3>

Thanks,<br>
{{ 'Designer Country' }}
@endcomponent
