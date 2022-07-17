<?php

if (post('uloc') && post('uloc2')){
	
    $res = calls::create_call(post('id'),post('uloc').' '.post('uloc2'));
    $user = users::find_user_byID(session('user_id'));
    $driver = drivers::get_driver_info(post('id'));
    $result = drivers::updateBusy(post('id'));
    calls::calling_api($user['telno'],$driver['telno']);
	calls::calling_api($driver['telno'],$user['telno']);


    $plaka = explode('%',$driver['plate']);
    $driver['plate'] = implode(' ',$plaka);
    if ($res == 1 || $result == 1){
        echo '
                    <div class="about-section-2">
                        <div class="about-section-title">
                            <div class="about-section-title">
                                <span style="font-size: 20px;font-weight: bold" class="black-text">Lütfen Taksi ile iletişime geçiniz.</span><br>
                                <span class="black-text">Taksi Plakası:'.$driver["plate"].'</span><br>
                                <span class="black-text">Şoför Adı:'.$driver["uname"].'</span><br>
                                <span class="black-text">Araç Markası:'.$driver["marka"].'</span><br>
								   <span class="black-text">Araç Modeli:'.$driver["model"].'</span><br>
                            </div>
                        </div>
                        <div class="about-section-more">
                            NOT: Taksiyi Ara butonuna basınız. Ve taksi ile görüşünüz.
                        </div>
                    </div>';
    }else{
		
	echo "hata";	
	}

}

