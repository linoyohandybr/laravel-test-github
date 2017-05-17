<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@include('partials.errors')
<div>
    <div class="col-md-12">
        <form action="{{route('save.email')}}" method="post">
            <div class="form-group">
                <label for="title">First Name</label>
                <input
                        type="text"
                        class="form-control"
                        id="firstName"
                        name="firstName">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                        type="text"
                        class="form-control"
                        id="lastName"
                        name="lastName">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                        type="text"
                        class="form-control"
                        id="email"
                        name="email">
            </div>

            <div class="form-group">
                <label for="lastName">Comment</label>
                <textarea
                        type="text"
                        class="form-control"
                        id="comment"
                        name="comment">
                    </textarea>
            </div>

            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-danger" href="/">Cancel</a>
        </form>
    </div>
</div>