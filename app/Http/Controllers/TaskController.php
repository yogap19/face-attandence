<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    function task()
    {
        $subjects = Subject::where('teacher', Auth::user()->username)->get();
        $users = User::all();

        // Menambahkan data pengguna ke setiap subject
        foreach ($subjects as $subject) {
            $subject->users = $users; // Menambahkan array user ke properti baru `users` pada setiap subject
        }

        $data = [
            'subject' => $subjects,
        ];
        // dd($users);
        return view('Teacher.task', $data);
    }


    function add_task(Request $request)
    {
        $validated = $request->validate([
            'taskName'       => 'required',
            'subject'        => 'required',
            'deadline'       => 'required',
            'description'    => ''
        ]);
        $subject = Subject::where('name', $request->subject)->first();
        $validated['codeTask'] = $subject->codeSubject;
        $validated['teacher'] = Auth::user()->username;
        $task = Task::create($validated);
        Session::flash('status', 'success');
        Session::flash('message', 'Created task success');
        // Ambil nilai subjek dan ubah menjadi format slug
        $subjectSlug = Str::slug($validated['subject']);

        // Redirect kembali ke halaman subjek dengan slug yang sesuai
        // Dalam Blade Template atau Controller
        return redirect()->route('subject_task', ['slug' => $subjectSlug]);
    }

    function subject_task($slug)
    {
        $title = Subject::subjectName($slug);
        $data = [
            'task'    => Task::where('subject', $title)->orderBy('created_at', 'desc')->get(),
            'title'   => $title,
        ];
        // dd($data);
        return view('Teacher.subject_task', $data);
    }

    function delete($id)
    {
        $task = Task::where('id', $id)->first();

        $slug = Str::slug($task->subject);
        $task->delete();
        return Redirect()->route('subject_task', ['slug' => $slug])->with('status', 'User deleted successfully');
    }
}
