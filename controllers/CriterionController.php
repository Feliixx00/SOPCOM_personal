<?php

include $_SERVER['DOCUMENT_ROOT'] . '/SOPCOM/models/CriterionModel.php';
include $_SERVER['DOCUMENT_ROOT'] . '/SOPCOM/views/CriterionView.php';

class CriterionController {

    private $CriterionModel;
    private $CriterionView;

    function __construct()
    {
        $this->CriterionModel = new Criterion();
        $this->CriterionView  = new CriterionView();
    }

    /**
     * @OA\Get(
     *     path="/api_v1/index.php/criterion", 
     *     tags={"Criterions"},
     *     summary="List all criterions and its values",
     *     description="List all criterions and its values",
     *     operationId="getAllCriterions",
     *     @OA\Response(response="200", description="OK"),
     * )
    */
    public function getAllCriterion() {
        $criterions = $this->CriterionModel->getAllCriterions();
        $result = $this->CriterionView->buildCriterionsList($criterions);
        http_response_code(200);
        header("Content-Type: application/json");
        echo json_encode($result);
    }

}

?>