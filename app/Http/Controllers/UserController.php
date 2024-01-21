<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $this->authorize('manage-users'); 
}
public function destroy(User $user)
{
    $this->authorize('delete', $user);

    $user->delete();

    return redirect()->route('admin.users.index')
        ->with('success', 'Gebruiker succesvol verwijderd.');
}

}