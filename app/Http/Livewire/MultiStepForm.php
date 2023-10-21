<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
// use App\Models\Student;
use Livewire\Attributes\Rule;

class MultiStepForm extends Component
{

use WithFileUploads;

public $profile_pic;
public $country;
public $editor;

public $email;

public $tel;
public $currentStep = 1;

    // public $email;
 
    // protected $rules = [
    //     'email' => 'required|email',
    // ];


    public function render()
    {
        return view('livewire.multi-step-form');
    }

   
 public function validateData(){
    
    if($this->currentStep == 1){

       $this->validate([
                'email' => 'required',
                // 'country' => 'required',
                'tel' => 'required',
            ]);
       }
    if($this->currentStep == 2){
       
          $this->validateOnly('editor', [
            'editor' => 'required',
        ]);
   
    }
    if($this->currentStep == 3){
         $this->validate([
                    'profile_pic' => 'required|mimes:doc,docx,jpg,png,pdf|max:1024',
                    'email' => 'required|email',
                    'editor' => 'required',
                    'tel' => 'required',
                ]);
    }
 }
 public function firstStepSubmit()
    {
     
        $this->resetErrorBag();
        
        $validatedData = $this->validateData();
        
        $this->currentStep++;
    }

public function SecondStepSubmit()
    {
        
        $this->resetErrorBag();
        
        $validatedData = $this->validateData();
        
        $this->currentStep++;
    }

public function register(){

        $this->resetErrorBag();
        
        $validatedData = $this->validateData();
        
 
          $profile_name = 'profile_pic_'.$this->profile_pic->getClientOriginalName();
          $upload_cv = $this->profile_pic->storeAs('profile_pic', $profile_name);

          if($upload_cv){
              $values = array(
                  "pic"=>$this->profile_pic,
                  "tel"=>$this->tel,
                  "country"=>$this->country,
                  "editor"=>$this->editor,
                  "profile_name"=>$profile_name,
                  "email"=>$this->email,
              );
             $values['values'] = json_encode($values, true);
            
          }

        //$data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
        return redirect()->route('preview-form', $values);
       
    }
  
}
