<?php



// set Locale
$this->get('pimcore.locale')->setLocale('de);


// call a service within a action
$productService = $this->get('app.service.product');

// get parameter in view
$this->getRequest()->get('id')

// get actual path
$this->getRequest()->getPathInfo()

// set header
$this->addResponseHeader('X-Custom-Header3', ['foo', 'bar']);
$this->addResponseHeader('X-Robots-Tag', ["unavailable_after: " . $object->getDateTo()->toRfc850String()]);

// get all post parameter
$request->request->all()

// get all get parameter
$request->query->all()

// paging in view template
echo $this->render(
	"Includes/paging.html.php",
	get_object_vars($this->paginator->getPages("Sliding")));


// clear all caches (Symfony + Data Cache) 
./bin/console cache:clear --no-warmup && ./bin/console pimcore:cache:clear

// get element in areabrick Action
$info->getDocument()->getElement('thankyoupage');

// get view properties on Controllers and Area Brick Actions
$this->getDocumentTag($info->getDocument(), 'href', 'admin-email-doc')

// disable profiler for performance reasons (there are a LOT of DB queries being processed during this command) in CLI Commands
$this->getContainer()->get('profiler')->disable();

// translator in Controller
$translator = $this->get('translator');
$translator->trans('abc');

// redirect in controller

return new RedirectResponse('/de', 301);

oder

$response = new RedirectResponse('/de', 301);
$response->send();

// auch den prod cache leeren
/bin/console cache:clear --env=prod


// call a servive in a cli file
$smg = Pimcore::getContainer()->get('AppBundle\Templating\Helper\Smg');

// list all registred services
./bin/console debug:container

// $this->templatingEngine  --> in Service

class Filterhelper extends Helper implements TemplatingEngineAwareHelperInterface {

    use \Pimcore\Templating\Helper\Traits\TemplatingEngineAwareHelperTrait;
    
    
    
// geo sortierung in der db
$storeList->setOrderKey("(SELECT ACOS(SIN(geopoint__latitude / 180 * PI()) * SIN($centerlat / 180 * PI()) + COS(geopoint__latitude / 180 * PI()) * COS($centerlat / 180 * PI()) * COS(($centerlng / 180 * PI()) - (geopoint__longitude / 180 * PI()))) * 6378137)", false);    
