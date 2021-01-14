<?php
class ActiveDataProvider extends CActiveDataProvider implements AjaxResponseInterface
{
    public function getResponseData()
    {
        $result = [];
        foreach($this->getdata() as $value){
            $result[]=$value->getAttributes();
        }
        return $result;
    }
    public function getErrors()
    {
        return [];
    }
}