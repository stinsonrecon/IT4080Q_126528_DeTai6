<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminEditRequest;
use App\Http\Requests\Auth\AdminRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
use Exception;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
    use StorageImageTrait;
    private $admin;
    public function __construct(Admin $admin)
    {
        $this->middleware(['auth']);
        $this->admin=$admin;
    }
    public function index(){
        $admins=$this->admin->paginate('5');
        return view('back-end.admin.admins.index',compact('admins'));
    }
    public function create(){
        $admins=$this->admin->paginate('5');
        return view('back-end.admin.admins.add',compact('admins'));
    }
    public function store(AdminRequest $request){
        try{
            DB::beginTransaction();
            $data=[
                'name'=>$request->name,
                'username'=>$request->username,
                'password'=>Hash::make($request->password) ,
            ];
            $dataImgage =$this->storageTraitUploat($request,'linkImg','admins');
                if(!empty($dataImgage))
                    {
                        $data['linkImg']=$dataImgage['file_name'];
                    }
                    else{
                        $data['linkImg']='chesen-banner-1.jpg';
                    }
            $this->admin->create($data);  
            DB::commit();
            session()->flash('success', 'Bạn đã thêm thành công.');
            return redirect()->route('admin.index'); 

        }
        catch(Exception $exception){
            DB::rollBack();
        }
    }

    public function edit($id){
        $admins=$this->admin->find($id);
        return view('back-end.admin.admins.edit',compact('admins'));
    }

    public function update(AdminEditRequest $request,$id){
        try{
            DB::beginTransaction();
            $data=[
                'name'=>$request->name,
                'username'=>$request->username,
                
            ];
            if(!empty($request->password)&&!empty($request->password_confirm)){
                $data['password']=Hash::make($request->password);
            }
            if($request->linkImg){
                Storage::delete('public/admins/'.$this->admin->find($id)->linkImg);
            }
            $dataImgage =$this->storageTraitUploat($request,'linkImg','admins');   
                if(!empty($dataImgage))
                    {
                        $data['linkImg']=$dataImgage['file_name'];
                    }
            $this->admin->find($id)->update($data);  
            DB::commit();
            session()->flash('success', 'Bạn đã sửa thành công.');
            return redirect()->route('admin.index'); 

        }
        catch(Exception $exception){
            DB::rollBack();
        }
    }

    public function delete($id){
        $n = $this->admin->find($id);
        
        if($n->linkImg && $n->linkImg != 'chesen-banner-1.jpg')
        {
            Storage::delete('public/admins/'.$n->linkImg);
        }
        $n->delete();
        session()->flash('success', 'Bạn đã xóa thành công.');
        return redirect()->route('admin.index');
    }

    


}
