<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teams = TeamMember::all();
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo'    => 'nullable|image|mimes:jpg,jpeg|max:2048',
        ]);

        $team = TeamMember::create($request->only('name', 'position'));

        if ($request->hasFile('photo')) {
            $team->addMediaFromRequest('photo')->toMediaCollection('photos');
        }

        return redirect()->route('admin.team.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function edit(TeamMember $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, TeamMember $team)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $team->update($request->only('name', 'position'));

        if ($request->hasFile('photo')) {
            $team->clearMediaCollection('photos');
            $team->addMediaFromRequest('photo')->toMediaCollection('photos');
        }

        return redirect()->route('admin.team.index')->with('success', 'Anggota berhasil diperbarui');
    }

    public function destroy(TeamMember $team)
    {
        $team->clearMediaCollection('photos');
        $team->delete();

        return redirect()->route('admin.team.index')->with('success', 'Anggota berhasil dihapus');
    }
}
