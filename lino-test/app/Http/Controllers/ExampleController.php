<?php

    namespace App\Http\Controllers;

    use App\Example;
    use App\Mail\TestMailable;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Mail;
    use Mockery\Exception;

    class ExampleController extends Controller
    {
        public function saveEmails(Request $request)
        {
            //return redirect()->route('/');
            $this->validate($request, [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'comment' => 'required'
            ]);

            $firstName = $request->input('firstName');
            $lastName = $request->input('lastName');
            $email = $request->input('email');
            $comment = $request->input('comment');

            //I save the comment just in Case
            $element = new Example([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'email' => $email,
                'comment' => $comment,
            ]);

            $element->save();

            //send email
            Mail::to($email)->send(new TestMailable($firstName, $lastName, $email,$comment));

            return redirect()->route('list.email');
        }

        public function listEmails()
        {
            $emails = DB::table('examples')
                ->orderBy('id', 'asc')
                ->paginate(5);
            return view('partials.table', ['emails' => $emails]);
        }
    }
