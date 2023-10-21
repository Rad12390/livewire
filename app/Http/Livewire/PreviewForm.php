<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

use Livewire\Component;

use App\Models\Users;

class PreviewForm extends Component
{
    public function render(Request $request)
    {
         $data = array(
                  "pic"=>$request->profile_pic,
                  "tel"=>$request->tel,
                  "country"=>$request->country,
                  "editor"=>$request->editor,
                  "profile_name"=>$request->profile_name,
                  "email"=>$request->email,
              );


          return view('livewire.preview-form', $data);
    }
      public function formPreviewSubmit($data)
    {
        $user = new Users();
        $user->email = $data['email'];
        $user->description = $data['editor'];
        $user->phone = $data['tel'];
        $user->profile_pic = $data['profile_name'];

     if($user->save()){ 
            return redirect()->route('success-page');
        }
    }

 }
