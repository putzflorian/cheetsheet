<?php

use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\Localizedfield;


class Test{
  public function categoriesAction(Request $request){

    $getInheritedValues = Concrete::getGetInheritedValues();
    Concrete::setGetInheritedValues(false);
    $getFallbackLanguages = Localizedfield::getGetFallbackValues();
    Localizedfield::setGetFallbackValues(false);

    foreach($validLanguages as $validLanguage){
      // do your stuff
    }


    Concrete::setGetInheritedValues($getInheritedValues);
    Localizedfield::setGetFallbackValues($getFallbackLanguages);


    return your data

  }
}
