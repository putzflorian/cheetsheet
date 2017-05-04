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
public function karriereFormAction(Request $request){
	$job = Job::getById($request->get("id"));
	$this->view->job = $job;
	if( !$job || ( !$job->isPublished() && !$this->editmode) ) {
		throw new NotFoundHttpException('Not found');
	}

	$response = $this->render('Content/karriereForm.html.php', $this->view->getAllParameters());
	$response->headers->set('robots', 'noindex,nofollow');

	return $response;
}

// get all post parameter
$request->request->all()

// get all get parameter
$request->query->all()
