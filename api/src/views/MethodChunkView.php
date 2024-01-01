<?php

    class MethodChunkView {
        
        public function buildMethodChunk($methodChunk, $intention, $tools, $artefacts, $activity, $roles, $contextCriteria, $relations) {
            $criterionView = new CriterionView();
            $response = $methodChunk[0];
            $response['abstract'] = $activity[0]['abstract'];
           //$response['Intention'] = $intention[0];
            $response['Intention'] = $intention;
            $response['Tools'] = $tools;
            $response['Situation'] = $artefacts['consumed'];
            $response['Product part'] = $artefacts['produced'];
            $response['Process part'] = $activity[0];
            $response['Roles'] = $roles;
            $response['Context Criteria'] = $criterionView->buildCriteriaList($contextCriteria);
            $response['Related chunks'] = $relations;
            return $response;
        }

    }

?>