<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    function account()
    {
        $data = [
            'attendance' => User::all(),
            'account'   => User::all()
        ];
        return view('Admin.menu.account', $data);
    }

    function edit($id)
    {
        $data = [
            'account' => User::where('id', $id)->first()
        ];
        return view('Admin.menu.edit', $data);
    }
    public function _edit(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'role_id' => 'required',
            'id' => 'required|exists:users,id', // Ensure the id exists in the users table
            'status' => 'nullable|string'
        ]);

        // Determine the status based on the request
        $status = $request->status !== null ? 'active' : 'nonactive';

        // Find the user by ID
        $account = User::find($request->id);

        // Check if the user exists
        if (!$account) {
            return redirect('account')->with('error', 'User not found');
        }

        // Update the user with validated data and set the status
        $account->update(array_merge($validated, ['status' => $status]));

        // Redirect with a success message
        return redirect('account')->with('status', 'User updated successfully');
    }
    function task()
    {
        $data = [];
        return view('Admin.menu.task', $data);
    }

    function delete($id)
    {
        $category = User::where('id', $id)->first();
        $category->delete();
        return Redirect('account')->with('status', 'User deleted scuccessfully');
    }
}
