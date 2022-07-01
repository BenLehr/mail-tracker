@extends(config('mail-tracker.admin-template.name'))
@section(config('mail-tracker.admin-template.section'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Mail Tracker</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Datum</th>
                        <th>Name</th>
                        <th>Empfänger</th>
                        <th>Geöffnet</th>
                        <th>Öffnungsrate</th>
                        <th>&nbsp;</th>
                    </tr>
                    @foreach($campaigns as $campaign)
                        <tr class="">
                            <td>{{$campaign->id}}</td>
                            <td>{{$campaign->date}}</td>
                            <td>{{$campaign->name}}</td>
                            <td>{{$campaign->emails_send}}</td>
                            <td>{{$campaign->emails_opened}}</td>
                            <td>{{$campaign->opening_rate}}</td>
                            <td><a href="mail-tracker/campaign/{{ $campaign->id  }}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
