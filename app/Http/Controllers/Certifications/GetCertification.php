<?php

use Illuminate\View\View;

class GetCertification {
    public function getCertification(): View{
        $user = User::all();
        return view('certificate.certificate-content', ['users',$user]);
    }
}