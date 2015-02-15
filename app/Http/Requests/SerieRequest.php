<?php
/**
 * Created by PhpStorm.
 * User: Vagner
 * Date: 15/02/2015
 * Time: 00:47
 */

namespace App\Http\Requests;


class SerieRequest extends Request{


  public function rules(){
    return [
      'title' => 'required|unique:series|min:3',
      'description' => 'required'
    ];
  }

  public function authorize(){
    return true;
  }
}