<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\utils\Utils;
use App\Mail\ContactMail;

class MainController extends Controller
{
  /* GET RESPONSES */

  public function getIndex(Request $r)
  {
    Utils::setLang($r);

    if($r->session()->get('lang') == 'tr')
    {
      return view('index')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Ana Sayfa');
    }
    else
    {
      return view('index')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Home');
    }
  }

  public function getServices(Request $r)
  {
    Utils::setLang($r);

    if($r->session()->get('lang') == 'tr')
    {
      return view('services')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Hizmetlerimiz');
    }
    else
    {
      return view('services')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Services');
    }
  }

  public function getPortfolio(Request $r)
  {
    Utils::setLang($r);

    $res = DB::select('select * from portfolio_website_ss');

    $imgs = array();

    foreach ($res as $row)
    {
      $jsonObj = json_decode($row->json_text);

      array_push($imgs, $jsonObj);
    }

    if($r->session()->get('lang') == 'tr')
    {
      return view('portfolio')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Galeri')->with('imgs', $imgs);
    }
    else
    {
      return view('portfolio')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Portfolio')->with('imgs', $imgs);;
    }
  }

  public function getAbout(Request $r)
  {
    Utils::setLang($r);

    if($r->session()->get('lang') == 'tr')
    {
      return view('about')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Hakkımızda');
    }
    else
    {
      return view('about')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'About');
    }
  }

  public function getContact(Request $r)
  {
    Utils::setLang($r);

    if($r->session()->get('lang') == 'tr')
    {
      return view('contact')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'İletişim');
    }
    else
    {
      return view('contact')->with('lang', $r->session()->get('lang'))->with('pageTitle', 'Contact');
    }
  }



  /* POST RESPONSES */

  public function postContact(Request $r)
  {
    if(empty($r->name) || empty($r->surname) || empty($r->email) || empty($r->phone) || empty($r->address) || empty($r->message))
    {
      if($r->session()->get('lang') == 'tr')
      {
        return response([
          'status' => 'success',
          'title' => 'Lütfen tüm alanları doldurun!',
          'text' => 'Lütfen tüm gerekli alanları doldurup tekrar deneyin.'
        ]);
      }
      else
      {
        return response([
          'status' => 'success',
          'title' => 'Please fill all fields!',
          'text' => 'Please fill all required fields and try again.'
        ]);
      }
    }
    else
    {
      DB::insert('insert into contact_messages(name, surname, email, phone, address, message) values(?, ?, ?, ?, ?, ?)', [$r->name, $r->surname, $r->email, $r->phone, $r->address, $r->message]);

      Mail::to(['86xlr86@gmail.com', 'onderaktas96@hotmail.com'])->send(new ContactMail($r->name, $r->surname, $r->email, $r->phone, $r->address, $r->message));


      if($r->session()->get('lang') == 'tr')
      {
        return response([
          'status' => 'success',
          'title' => 'Teşekkür ederiz!',
          'text' => 'Bizimle iletişim kurduğunuz için teşekkür ederiz. En kısa zamanda size geri dönüş yapacağız.'
        ]);
      }
      else
      {
        return response([
          'status' => 'success',
          'title' => 'Thank you!',
          'text' => 'Thank you for contacting us. We will get back to you as soon as possible.'
        ]);
      }
    }
  }

  public function changeLanguage(Request $r)
  {
    if($r->toLang == 'Türkçe')
    {
      $r->session()->put('lang', 'tr');
      app()->setLocale('tr');
    }
    else
    {
      $r->session()->put('lang', 'en');
      app()->setLocale('en');
    }

    return response(
      [
        'status' => 'success',
        'redirectURL' => 'NULL',
        'message' => 'NULL'
      ]
    );
  }
}
