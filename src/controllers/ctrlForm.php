<?php

function ctrlForm($request, $response, $container){
    
    

    $alu_name = $request->get(INPUT_POST, "al-nom");
    $alu_cognom = $request->get(INPUT_POST, "al-cog");
    $alu_data = $request->get(INPUT_POST, "al-data");
    $alu_carrer = $request->get(INPUT_POST, "al-carrer");
    $alu_num = $request->get(INPUT_POST, "al-num");
    $alu_ciutat = $request->get(INPUT_POST, "al-ciutat");
    $alu_codip = $request->get(INPUT_POST, "al-codip");
    

    $aluModel = $container->users();
    $aluModel = $aluModel ->insertalumne($alu_name, $alu_cognom, $alu_data, $alu_carrer, $alu_num, $alu_ciutat, $alu_codip);
   
    if($aluModel) {
        $response->redirect("location: /index.php");
    } else {
        $response->redirect("location: /index.php?r=");
    }

    return $response;
}