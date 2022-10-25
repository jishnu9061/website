<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_management.user_management');
     
    }
    public function manageuseraccount()
    {
        return view('user_management.manage_user_account');
    }
    public function useredit()
    {
        return view('user_management.user_edit');
    }
    public function regnewuser()
    {
        return view('user_management.reg_new_user');
    }
    public function attachments()
    {
        return view('user_management.user_attachments');
    }
    public function comments()
    {
        return view('user_management.user_comments');
    }
    public function changepassword()
    {
        return view('user_management.change_user_password');
    }
    public function manageusergrp()
    {
        return view('user_management.manage_user_group');
    }
    public function addnewusergrp()
    {
        return view('user_management.add_new_user_grp');
    }
    public function editnewusergrp()
    {
        return view('user_management.edit_new_user_grp');
    }
    public function rolesperuser()
    {
        return view('user_management.view_roles_per_user');
    }
    public function editviewroles()
    {
        return view('user_management.edit_view_roles');
    }
    

    public function manageuserroles()
    {
        return view('user_management.manage_user_roles');
    }
    public function adduserrole()
    {
        return view('user_management.add_user_roles');
    }
    public function edituserrole()
    {
        return view('user_management.edit_user_roles');
    }
    public function manageuserdepartment()
    {
        return view('user_management.manage_user_department');
    }
    public function adduserdepartment()
    {
        return view('user_management.add_user_department');
    }
    public function edituserdepartment()
    {
        return view('user_management.edit_user_department');
    }
    public function advocatestarget()
    {
        return view('user_management.advocates_target');
    }
    public function addnew()
    {
        return view('user_management.add_new_entry');
    }
    public function editadvocatetarget()
    {
        return view('user_management.edit_advocate_target');
    }
    public function advocatestarget2021()
    {
        return view('user_management.advocates_target_2021');
    }
    public function advocatestarget2022()
    {
        return view('user_management.advocates_target_2022');
    }
    public function advocatestarget2023()
    {
        return view('user_management.advocates_target_2023');
    }
    public function advocatestarget2024()
    {
        return view('user_management.advocates_target_2024');
    }
    public function advocatestarget2025()
    {
        return view('user_management.advocates_target_2025');
    }
    public function advocatestarget2026()
    {
        return view('user_management.advocates_target_2026');
    }
     public function matters()
    {
        return view('user_management.matters');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
