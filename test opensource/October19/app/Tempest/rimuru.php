<?php

class ultimateSkill {

    public static function onclick($func){
        echo "onclick='".$func."'";
    }
}

class uniqueSkill {
    public static function greatSage(){
        
    }
}

function uniqueSkillGreatModal1(){
    echo '
    <div id="modal-container">
        <div class="modal-background">
        <div class="modal">
            <div class="close" style="top: 22px;right: 43px;">
                <i class="fa fa-close" onclick="closeModal()"></i>
            </div>
            <div class="modal-container-body"></div>
        </div>
        </div>
    </div>';
}

function uniqueSkillGreatModal2(){
    echo '
    <div class="modal-frame">
        <div class="modal">
            <div class="modal-inset">
                <div class="button close">
                    <i class="fa fa-close"></i>
                </div>
                <div class="modal-body">
                    <div class="modal-head"></div>
                    <div class="close"><i class="far fa-window-close"></i></div>
                    <div class="modal-body-body " >
                        <div class="loading">Loading&#8230;</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-overlay"></div>';
}

function raphael($id){
    echo $id;
}