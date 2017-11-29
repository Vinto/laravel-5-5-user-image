<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Profile $profile)
    {
    	return view('profile.index', [
    		'profiles' => $profile->all()
    	]);
    }

    public function show(Profile $profile, $id)
    {
    	return view('profile.show', [
    		'profile' => $profile->find($id)
    	]);
    }

    public function create()
    {
    	return view('profile.create');
    }

    public function store(Request $request)
    {
    	$profile = new Profile();

    	$profile->fill(
    		$request->validate([
    			'name' => 'required',
    			'avatar' => 'required'
    		])
    	);

    	$profile->avatar = $request->file('avatar')->store('avatar');

    	$profile->save();

    	return redirect('/profile/'.$profile->id);
    }
}
