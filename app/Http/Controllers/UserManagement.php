<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DB;

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
        $user_list = DB::table('cra_reg_new_user')->get();
        return view('user_management.manage_user_account', compact('user_list'));

        // return view('user_management.manage_user_account');
    }

    public function userdestroy($id)
    {
        DB::table('cra_reg_new_user')->where('id', $id)->delete();
        return redirect('/manage_user_account');
    }

    public function useredit($id)
    {

        $edit = DB::table('cra_reg_new_user')->where('id', $id)->first();
        return view('user_management.user_edit', compact('edit', 'id'));
        // return view('user_management.user_edit');
    }



    public function regnewuser(Request $request)
    {
        $user_code = $request['user_code'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $initial = $request['initial'];
        $user_name = $request['user_name'];
        $password = $request['password'];
        $re_type_password = $request['re_type_password'];
        $post_address = $request['post_address'];
        $town_name = $request['town_name'];
        $telephone_no = $request['telephone_no'];
        $mobile_no = $request['mobile_no'];
        $email_address = $request['email_address'];
        $departments = $request['departments'];
        $upload_signature = $request['upload_signature'];
        $user_group = $request['user_group'];
        $user_role = $request['user_role'];


        DB::table('cra_reg_new_user')->insert([

            'user_code' => $user_code,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'initial' => $initial,
            'user_name' => $user_name,
            'password' => $password,
            're_type_password' => $re_type_password,
            'post_address' => $post_address,
            'town_name' => $town_name,
            'telephone_no' => $telephone_no,
            'mobile_no' => $mobile_no,
            'email_address' => $email_address,
            'departments' => $departments,
            'upload_signature' => $upload_signature,
            'user_group' => $user_group,
            'user_role' => $user_role,

        ]);
        return redirect('/manage_user_account');

        // return view('user_management.reg_new_user');
    }

    public function userupdate(Request $request)
    {
        $id = $request['id'];
        $user_code = $request['user_code'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $initial = $request['initial'];
        $user_name = $request['user_name'];
        $password = $request['password'];
        $re_type_password = $request['re_type_password'];
        $post_address = $request['post_address'];
        $town_name = $request['town_name'];
        $telephone_no = $request['telephone_no'];
        $mobile_no = $request['mobile_no'];
        $email_address = $request['email_address'];
        $departments = $request['departments'];
        $upload_signature = $request['upload_signature'];
        $user_group = $request['user_group'];
        $user_role = $request['user_role'];


        DB::table('cra_reg_new_user')->where('id', $id)->update([

            'user_code' => $user_code,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'initial' => $initial,
            'user_name' => $user_name,
            'password' => $password,
            're_type_password' => $re_type_password,
            'post_address' => $post_address,
            'town_name' => $town_name,
            'telephone_no' => $telephone_no,
            'mobile_no' => $mobile_no,
            'email_address' => $email_address,
            'departments' => $departments,
            'upload_signature' => $upload_signature,
            'user_group' => $user_group,
            'user_role' => $user_role,

        ]);
        return redirect('/manage_user_account');
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
        $user_group = DB::table('cra_add_user_group')->get();
        return view('user_management.manage_user_group', compact('user_group'));
        // return view('user_management.manage_user_group');
    }

    public function addnewusergrp(Request $request)
    {
        $id = $request['id'];
        $group_code = $request['group_code'];
        $group_name = $request['group_name'];
        $default_menu = $request['default_menu'];
        $group_role = $request['group_role'];

        DB::table('cra_add_user_group')->insert([
            'group_code' =>  $group_code,
            'group_name' =>  $group_name,
            'default_menu' =>  $default_menu,
            'group_role' =>  $group_role,

        ]);

        return redirect('/manage_user_group');
        // return view('user_management.add_new_user_grp');
    }

    public function editnewusergrp($id)
    {
        $edit_user = DB::table('cra_add_user_group')->where('id', $id)->first();
        return view('user_management.edit_new_user_grp', compact('edit_user', 'id'));

        // return view('user_management.edit_new_user_grp');
    }

    public function updategroup(Request $request)

    {
        $id = $request['id'];
        $group_code = $request['group_code'];
        $group_name = $request['group_name'];
        $default_menu = $request['default_menu'];
        $group_role = $request['group_role'];

        DB::table('cra_add_user_group')->where('id', $id)->update([

            'group_code' => $group_code,
            'group_name' => $group_name,
            'default_menu' => $default_menu,
            'group_role' => $group_role,

        ]);
        return redirect('/manage_user_group');
    }

    public function usergroupdestroy($id)
    {
        DB::table('cra_add_user_group')->where('id', $id)->delete();
        return redirect('/manage_user_group');
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
        // 
        $user_role = DB::table('cra_add_user_roles')->get();
        return view('user_management.manage_user_roles', compact('user_role'));
        // return view('user_management.manage_user_roles');
    }


    public function adduserrole(Request $request)
    {
        $role_name = $request['role_name'];
        DB::table('cra_add_user_roles')->insert([
            'role_name' =>  $role_name,
        ]);
        return redirect('/manage_user_roles');

        // return view('user_management.add_user_roles');
    }


    public function edituserrole($id)
    {
        $edit_role = DB::table('cra_add_user_roles')->where('id', $id)->first();
        return view('user_management.edit_user_roles', compact('edit_role', 'id'));
        // return view('user_management.edit_user_roles');
    }

    public function updaterole(Request $request)

    {
        $id = $request['id'];
        $role_name = $request['role_name'];

        DB::table('cra_add_user_roles')->where('id', $id)->update([

            'role_name' => $role_name,

        ]);
        return redirect('/manage_user_roles');
    }

    public function userroledestroy($id)
    {
        $user_role_destroy = DB::table('cra_add_user_roles')->where('id', $id)->delete();
        return redirect('/manage_user_roles');
    }


    public function manageuserdepartment()
    {
        $manage_document = DB::table('cra_add_user_department')->get();
        return view('user_management.manage_user_department', compact('manage_document'));
    }


    public function adduserdepartment(Request $request)
    {

        $department_code = $request['department_code'];
        $department_name = $request['department_name'];
        $h_o_d = $request['h_o_d'];
        $perfomance_report = $request['perfomance_report'];

        DB::table('cra_add_user_department')->insert([

            'department_code' => $department_code,
            'department_name' => $department_name,
            'h_o_d' => $h_o_d,
            'perfomance_report' => $perfomance_report,
        ]);
        return redirect('/manage_user_department');
    }


    public function edituserdepartment($id)
    {
        $edit_department = DB::table('cra_add_user_department')->where('id', $id)->first();
        return view('user_management.edit_user_department', compact('edit_department', 'id'));
    }

    public function updateuserdepartment(Request $request)
    {

        $id = $request['id'];
        $department_code = $request['department_code'];
        $department_name = $request['department_name'];
        $h_o_d = $request['h_o_d'];
        $perfomance_report = $request['perfomance_report'];

        DB::table('cra_add_user_department')->where('id', $id)->update([

            'department_code' => $department_code,
            'department_name' => $department_name,
            'h_o_d' => $h_o_d,
            'perfomance_report' => $perfomance_report,

        ]);
        return redirect('/manage_user_department');
    }



    public function destroyuserdepsrtment($id)
    {
        $destroy_user_department = DB::table('cra_add_user_department')->where('id', $id)->delete();
        return redirect('/manage_user_department');
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
    public function managetowns()
    {
        $manage_towns = DB::table('cra_town_city')->get();
        return view('user_management.manage_towns', compact('manage_towns'));
    }
    public function addtown(Request $Request)
    {
        $Town_City = $Request['Town_City'];

        DB::table('cra_town_city')->insert([
            'Town_City' => $Town_City,

        ]);

        return redirect('/manage_towns');
    }
    public function edittown($id)
    {
        $manage_towns = DB::table('cra_town_city')->where('id', $id)->first();
        return view('user_management.edit_town', compact('manage_towns', 'id'));
    }
    public function updatetown(Request $Request)
    {
        $id = $Request['id'];
        $Town_City = $Request['Town_City'];


        $update_town = array(
            'Town_City' => $Town_City,

        );
        DB::table('cra_town_city')->where('id', $id)->update($update_town);
        return redirect('/manage_towns');
    }
    public function deletetown($id)
    {
        DB::table('cra_town_city')->where('id', $id)->delete();
        return redirect('/manage_towns');
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
// public function manageuserdepartment (Request $request)

//     {

//         $id = $request['id'];
//         $department_code =$request['department_code'];
//         $department_name=$request['department_name'];
//         $h_o_d =$request['h_o_d'];
//         $perfomance_report=$request['perfomance_report'];

//         DB::table('cra_add_user_department')-> insert([

//             'department_code' => $department_code,
//             'department_name' => $department_name,
//             'h_o_d' => $h_o_d,
//             'perfomance_report' => $perfomance_report,
//         ]);

//         return redirect('/manage_user_department');
       
//     }