<?php 


namespace Source\App;


class ErroController extends Web{

    public function error($data){

        $errcode = $data["errcode"];

        $this->view([
            "header",
            "error",
            "footer"
        ],[
            "errcode" => $errcode,
        ]);
        

    }

}