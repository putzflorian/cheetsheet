<?php



// set Locale
$this->get('pimcore.locale')->setLocale('de);


// call a service within a template
$productService = $app->getContainer()->get('app.service.product');

// call a service within a action
$productService = $this->get('app.service.product');

// get parameter in view
$this->getRequest()->get('id')

// get actual path
$this->getRequest()->getPathInfo()

// set header
$this->addResponseHeader('X-Custom-Header3', ['foo', 'bar']);

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
