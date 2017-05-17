<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of emails</div>

                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($emails as $email)
                        <tr>
                            <td>{{$email->firstName}}</td>
                            <td>{{$email->email}}</td>
                           <td>{{date('m/d/Y H:i a',strtotime($email->created_at))}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
            <div class="row">
                <div class="text-center">
                    {{$emails->links()}}
                </div>
            </div>

            <div class="row">
                <div class="text-center">
                    <a class="btn btn-primary" href="/">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>