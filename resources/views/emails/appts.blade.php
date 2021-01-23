@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello Admin',
        'level' => 'h3',
    ])

    @include('beautymail::templates.sunny.contentStart')
    <link rel='stylesheet' href='{{ asset('assets/css/bootstrap.min.css') }}' type='text/css' media='all' />
        <p>An appointment has been requested with the following details:<br/></p>

        <table class="table table-bordered table-striped item-tab">
                <tr>
                <th>Name:</th>
                    <td>{{ $appt->name }}</td>
                </tr>
                <tr>
                <th>Phone:</th>
                    <td>{{ $appt->phone }}</td>
                </tr>
                <tr>
                <th>Email:</th>
                    <td>{{ $appt->email??'None provided' }}</td>
                </tr>
                <tr>
                <th>Reason:</th>
                    <td>{{ $appt->reason }}</td>
                </tr>
                <tr>
                <th>Date:</th>
                    <td>{{ \Carbon\Carbon::parse($appt->appt_date)->toFormattedDateString() }}</td>
                </tr>
                <th>Time:</th>
                    <td>{{ \Carbon\Carbon::parse($appt->appt_time)->format('Y h:i:s A') }}</td>
                </tr>
                <tr>
        </table><br/>

        <strong>Message:</strong><br>
        <p style="text-align: center;">{{ $appt->message }}</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
        	'title' => 'View on dashboard',
        	'link' => 'https:deepeepharmacy.com/dashboard',
            'background-color' => '#17449e'
    ])
<script type='text/javascript' src='{{ asset('assets/js/bootstrap.min.js') }}'></script>
@stop