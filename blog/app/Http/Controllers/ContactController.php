<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequset;
use App\Models\ContactModel;

class ContactController extends Controller {

 public function submit(ContactRequset $req) {
//    $validation =$req->validate([
//        'name' => 'required|min:4|max:50'
//    ]);
     $contact = new ContactModel();
     $contact->name = $req->input('name');
     $contact->mail = $req->input('email');
     $contact->company = $req->input('company');
     $contact->topic = $req->input('topic');
     $contact->message = $req->input('message');

     $contact->save();

     return redirect()->route('main')->with('success', 'Мы свяжемся с вами позже');

 }
public function allData (){
    $contact = new ContactModel;
    return view('messages', ['data' => $contact->all()]);
//    return view('messages', ['data' => $contact->orderBy('id','asc')->take(3)->get()]);
//    return view('messages', ['data' => [$contact->find(1)]]);
//     return view('messages', ['data' => ContactModel::all()]);
}
public function ShowMoreData ($id){
    $contact = new ContactModel;
    return view('MoreData', ['data' => $contact->find($id)]);
}
public function DataUpdate ($id){
    $contact = new ContactModel;
    return view('UpdateData', ['data' => $contact->find($id)]);
}
public function UpdateSaved ($id, ContactRequset $req) {

        $contact = ContactModel::find($id);
        $contact->name = $req->input('name');
        $contact->mail = $req->input('email');
        $contact->company = $req->input('company');
        $contact->topic = $req->input('topic');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('contact-data-More', $id)->with('success', 'Запись успешно изменена');
    }
    public function Deleted ($id){

        ContactModel::find($id)->delete();

        return redirect()->route('contact-data')->with('success', 'Запись успешно удалена');
    }


}
