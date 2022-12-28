<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


// use Illuminate\Support\Facades\DB;



class Elibrary extends Controller
{

    public function index()
    {
        return view('Elibrary.libraryindex');
    }

    public function subjects()
    {
        $view_subject = DB::table('cra_subject')->get();

        return view('Elibrary.subject',compact('view_subject'));
    }

    public function addsubjects(Request $request)
    {
        $sub_name = $request['sub_name'];
        $category = $request['category'];
        $discription = $request['discription'];

        DB::table('cra_subject')->insert([

            'sub_name' => $sub_name,
            'category' => $category,
            'discription' => $discription
        ]);

       return redirect('/subject');
    }

    public function editsubjects($id)
    {
        $edit=DB::table('cra_subject')->where('id',$id)->first();
        return view('Elibrary.editsubject',compact('edit','id'));
    }

    public function updatesubjects(Request $request)
    {
        $id = $request['id'];
        $sub_name = $request['sub_name'];
        $category = $request['category'];
        $discription = $request['discription'];

        DB::table('cra_subject')->where('id',$id)->update([

            'id' => $id,
            'sub_name' => $sub_name,
            'category' => $category,
            'discription' => $discription
        ]);

       return redirect('/subject');
    }

    public function deletesubjects($id)
    {
        $edit=DB::table('cra_subject')->where('id',$id)->delete();
        return redirect('/subject');
    }




    public function files()
    {

        $view_file=DB::table('cra_file')->get();

        return view('Elibrary.file',compact('view_file'));
    }

    public function addfiles(Request $request)
    {
        $upload_date = $request['upload_date'];
        $subject = $request['subject'];
        $file_name = $request['file_name'];
        $auther = $request['auther'];
        $publisher = $request['publisher'];
        $upload_by = $request['upload_by'];
        $discription = $request['discription'];
        $e_file = $request['e_file'];

        if(!empty($request->file('e_file'))){

            $this->validate($request,[
                'e_file' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('e_file')){
            $uploadedImage = $request->file('e_file');
            $imageName     = time() .'.'. $e_file->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $e_file->file    = $destinationPath.$imageName;
        }
       

        DB::table('cra_file')->insert([

            'upload_date' => $upload_date,
            'subject' => $subject,
            'file_name' => $file_name,
            'auther' => $auther,
            'publisher' => $publisher,
            'upload_by' => $upload_by,
            'discription' => $discription,
            'e_file' => $e_file,
            
        ]);
        return redirect('/file');
    }


    public function editfiles($id)
    {
        $edit=DB::table('cra_file')->where('id',$id)->first();
        return view('Elibrary.editfile',compact('edit','id'));
        
    }

    public function updatefiles(Request $request)
    {
        $id = $request['id'];
        $upload_date = $request['upload_date'];
        $subject = $request['subject'];
        $file_name = $request['file_name'];
        $auther = $request['auther'];
        $publisher = $request['publisher'];
        $upload_by = $request['upload_by'];
        $discription = $request['discription'];
        $e_file = $request['e_file'];

        if(!empty($request->file('e_file'))){

            $this->validate($request,[
                'e_file' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('e_file')){
            $uploadedImage = $request->file('e_file');
            $imageName     = time() .'.'. $e_file->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $e_file->file    = $destinationPath.$imageName;
        }
       

        DB::table('cra_file')->where('id',$id)->update([

            'id' => $id,
            'upload_date' => $upload_date,
            'subject' => $subject,
            'file_name' => $file_name,
            'auther' => $auther,
            'publisher' => $publisher,
            'upload_by' => $upload_by,
            'discription' => $discription,
            'e_file' => $e_file,
            
        ]);
        return redirect('/file');
    }

    public function deletefiles($id)
    {
        $edit=DB::table('cra_file')->where('id',$id)->delete();
        return redirect('/file');
        
    }

    public function precedences()
    {

        $view=DB::table('cra_precedence')->get();
        return view('Elibrary.precedence',compact('view'));
    }

    public function addprecedences(Request $request)
    {
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $file_handle = $request['file_handle'];
        $date_from = $request['date_from'];
        $date_to = $request['date_to'];
        $file_status = $request['file_status'];
        $file_discription = $request['file_discription'];
        $upload_file = $request['upload_file'];

        if(!empty($request->file('upload_file'))){

            $this->validate($request,[
                'upload_file' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('upload_file')){
            $uploadedImage = $request->file('upload_file');
            $imageName     = time() .'.'. $e_file->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $upload_file->file    = $destinationPath.$imageName;
        }
       

        DB::table('cra_precedence')->insert([

            'file_no' => $file_no,
            'client_name' => $client_name,
            'file_handle' => $file_handle,
            'date_from' => $date_from,
            'date_to' => $date_to,
            'file_status' => $file_status,
            'file_discription' => $file_discription,
            'upload_file' => $upload_file,
            
        ]);
        return redirect('/precedence');
    }

    public function editprecedences($id)
    {
        $edit = DB::table('cra_precedence')->where('id',$id)->first();
        return view('Elibrary.editprecedence',compact('edit','id'));
    }

    public function updateprecedences(Request $request)
    {
        $id = $request['id'];
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $file_handle = $request['file_handle'];
        $date_from = $request['date_from'];
        $date_to = $request['date_to'];
        $file_status = $request['file_status'];
        $file_discription = $request['file_discription'];
        $upload_file = $request['upload_file'];

        if(!empty($request->file('upload_file'))){

            $this->validate($request,[
                'upload_file' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('upload_file')){
            $uploadedImage = $request->file('upload_file');
            $imageName     = time() .'.'. $e_file->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $upload_file->file    = $destinationPath.$imageName;
        }
       

        DB::table('cra_precedence')->where('id',$id)->update([

            'id' =>$id,
            'file_no' => $file_no,
            'client_name' => $client_name,
            'file_handle' => $file_handle,
            'date_from' => $date_from,
            'date_to' => $date_to,
            'file_status' => $file_status,
            'file_discription' => $file_discription,
            'upload_file' => $upload_file,
            
        ]);
        return redirect('/precedence');
    }

    public function deleteprecedence($id)
    {
        $edit=DB::table('cra_precedence')->where('id',$id)->delete();
        return redirect('/file');
        
    }


    public function viewfiles()
    {
        return view('Elibrary.viewfile');
    }

    public function viewprecedences()
    {
        return view('Elibrary.viewprecedence');
    }


public function sites()
    {
        $view_site=DB::table('cra_site')->get();
        return view('Elibrary.site',compact('view_site'));
    }

    public function addsites(Request $request)
    {
        $title = $request['title'];
        $site_url = $request['site_url'];
        $discription = $request['discription'];

        DB::table('cra_site')->insert([

            'title' => $title,
            'site_url' => $site_url,
            'discription' => $discription
        ]);

        return redirect('/site');
    }

    public function editsites($id)
    {
        $edit = DB::table('cra_site')->where('id',$id)->first();
        return view('Elibrary.editsite',compact('edit','id'));
    }

    public function updatesites(Request $request)
    {
        $id = $request['id'];
        $title = $request['title'];
        $site_url = $request['site_url'];
        $discription = $request['discription'];

        DB::table('cra_site')->where('id',$id)->update([
            'id' => $id,
            'title' => $title,
            'site_url' => $site_url,
            'discription' => $discription
        ]);

        return redirect('/site');
    }

    public function deletesites($id)
    {
        $delete_site = DB::table('cra_site')->where('id',$id)->delete();

        return redirect('/site');

    }


}
