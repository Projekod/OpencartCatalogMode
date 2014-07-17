<?php

class catalogMode {
    protected $_output;
    public function setOutput($val){
        $this->_output = $val;
        return $this;
    }
    public function removeButtons(){
        $cartClassArray = array("cart","compare","wishlist","price");
        $buttonHrefArray = array("wishlist","checkout/","/order");

        $head = "<style>.hideCart{display: none}</style>";
        $this->_output = str_replace("</head>","$head\n</head>",$this->_output);
        $req = new Request();
        if(isset($req->get["route"])){
            $route = $req->get["route"];
            if(strpos("-$route","checkout")){
                header("location:".HTTP_SERVER);
            }
        }
        foreach($cartClassArray as $cartClass){
            $this->_output = str_replace("<div class=\"$cartClass\">","<div class=\"hideCart\">",$this->_output);
            $this->_output = str_replace("<div id=\"$cartClass\">","<div id='cart' class=\"hideCart\">",$this->_output);
        }

        preg_match_all("/<a(.*)\/a>/Usi",$this->_output,$links);
        if($links){
            foreach($links[0] as $link){
                if($this->strposa($link,$buttonHrefArray,1)){
                    $this->_output = str_replace("<li>$link</li>","",$this->_output);
                    $this->_output = str_replace($link,"",$this->_output);
                }
            }
        }
        return $this->_output;
    }
    function strposa($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
            $res = strpos($haystack, $needle, $offset);
            if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);
    }
}

global $ext3dCatalog;
$ext3dCatalog = new catalogMode();