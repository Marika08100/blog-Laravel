<?php

namespace App\Services;

interface Newsletter
{
   public function subscribe(string $email, string $list = null);

    //$list ?? =configr('services.mailchamp.lists.subscribers');
    //    $mailchamp = new ApiClient();




    // return $this->client()->lists ->lists->addListMember('services.mailchamp.lists.subscribers'),[
    // 'email_address' => $email,
    //'status' => 'subcribed'
    // ]);


    //protected function client(){
    //    $mailchamp = new ApiClient();
    // 
    // 
    //   return $mailchamp -> setConfig([
    //         'apiKey' => config('services.mailchamp.key'),
    //         'server' => '?'
    //     ]);}

}
