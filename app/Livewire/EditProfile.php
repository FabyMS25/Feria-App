<?php

namespace App\Livewire;

use App\Models\Company;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class EditProfile extends Component
{
    public function render()
    {
        $user = auth()->user();
        $roles = auth()->user()->roles;

        $company = Filament::getTenant(Company::class);

        return view('livewire.edit-profile',['company'=>$company]);
    }
    public function submitProfile(){

        // $company = Filament::getTenant(Company::class);
        // if($request->hasFile('portada')){
        //     $request->validate([
        //         'portada'=> 'required|image|mimes:png,jpg,jpeg'
        //     ]);

        //     $del='/storage/'.$company->portada;
        //     if(File::exists($del)){
        //         File::delete($del);
        //     }
        //     $file=$request->file('portada');
        //     $exe=$file->getClientOriginalExtension();
        //     $filename = 'portada'.microtime().'.'.$exe;
        //     $file->move('/storage/',$filename);
        //     $company->portada=$filename;
        // }

    }
}
