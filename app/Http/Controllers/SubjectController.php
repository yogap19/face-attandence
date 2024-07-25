<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubjectController extends Controller
{
    function subject()
    {
        $data = [
            'subject'   => Subject::all(),
            'teacher'   => User::all()
        ];
        return view('Admin.menu.subject', $data);
    }

    public function add_subject(Request $request)
    {
        $validated = $request->validate([
            'codeSubject' => 'required',
            'name'        => 'required',
            'teacher'     => 'required',
            'lessonHour'  => 'required|integer'
        ]);

        $subject = Subject::create($validated);
        Session::flash('status', 'success');
        Session::flash('message', 'Register success, wait admin for approval');

        return redirect('subject');
    }

    public function edit_subject(Request $request, $slug)
    {
        // Validasi input
        $validated = $request->validate([
            'codeSubject' => 'required',
            'teacher'     => 'required',
            'lessonHour'  => 'required',
        ]);

        // Cari subject berdasarkan slug
        if ($request->status == 'on') {
            $status = 'active';
        } else {
            $status = 'nonactive';
        }

        $subject = Subject::where('slug', $slug)->first();
        $subject->status = $status;
        $subject->save();
        // Jika subject tidak ditemukan, kembalikan dengan pesan error
        if (!$subject) {
            return redirect('subject')->withErrors(['subject_not_found' => 'Subject not found']);
        }

        // Update subject dengan data yang sudah divalidasi
        $subject->update($validated);

        // Set pesan flash
        Session::flash('status', 'success');
        Session::flash('message', 'Subject updated successfully');

        // Redirect ke halaman subject
        return redirect('subject');
    }
}
