<?php


namespace AppBundle\Templating\Helper;


use Symfony\Component\HttpFoundation\Request;
use Pimcore\Http\Request\Resolver\DocumentResolver;
use Pimcore\Http\RequestHelper;
use Pimcore\Translation\Translator;
use Pimcore\Model\DataObject\Companyconfig;


class Filehelper extends \Symfony\Component\Templating\Helper\Helper
{

    public function getCachebuster($filepath, $debugLive = true)
    {
        if($debugLive){
            $file = $this->getStaticPath() . $filepath;
        } else {
            $file = $filepath;
        }

        return '/cache-buster-' . filemtime(PIMCORE_WEB_ROOT . $file) . $file;
    }

    public function getFilepath($filepath, $debugLive = true)
    {

        if($debugLive){
            $file = PIMCORE_WEB_ROOT .$this->getStaticPath() . $filepath;
        } else {
            $file = PIMCORE_WEB_ROOT . $filepath;
        }

        return $file;
    }


    public function getStaticPath()
    {
        $staticData = $this->addStaticFolderVars($this->requestHelper->getRequest());

        return $staticData['staticFolder'];
    }

    public function getStaticDebugMode()
    {
        $staticData = $this->addStaticFolderVars($this->requestHelper->getRequest());

        return $staticData['staticDebugMode'];
    }


    /**
     * Debug mode uses assets from /static/debug but can be overridden
     * with a liveCss parameter or a live-css property on the document
     *
     * @param Request $request
     *
     * @return bool
     */
    private function useDebugStaticFolder(Request $request)
    {
        $debug = false;

        if (\Pimcore::inDebugMode()) {
            $debug = true;

            if ($request->get('liveCss')) {
                $debug = false;
            } else {
                // load current document from request and check for a live-css property
                $document = $this->documentResolver->getDocument($request);

                if ($document && $document->getProperty('live-css')) {
                    $debug = false;
                }
            }
        }

        return $debug;
    }

    /**
     * @param Request $request
     * @param array $templateVars
     *
     * @return array
     */
    private function addStaticFolderVars(Request $request)
    {
        $templateVars['staticFolder']    = '/static/build';
        $templateVars['staticDebugMode'] = false;

        if ($this->useDebugStaticFolder($request)) {
            $templateVars['staticFolder']    = '/static/debug';
            $templateVars['staticDebugMode'] = true;
        }

        return $templateVars;
    }
    
        public function getYoutubeId($url, $netcookieUrl = false){

        // Here is a sample of the URLs this regex matches: (there can be more content after the given URL that will be ignored)
        // http://youtu.be/dQw4w9WgXcQ
        // http://www.youtube.com/embed/dQw4w9WgXcQ
        // http://www.youtube.com/watch?v=dQw4w9WgXcQ
        // http://www.youtube.com/?v=dQw4w9WgXcQ
        // http://www.youtube.com/v/dQw4w9WgXcQ
        // http://www.youtube.com/e/dQw4w9WgXcQ
        // http://www.youtube.com/user/username#p/u/11/dQw4w9WgXcQ
        // http://www.youtube.com/sandalsResorts#p/c/54B8C800269D7C1B/0/dQw4w9WgXcQ
        // http://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ
        // http://www.youtube.com/?feature=player_embedded&v=dQw4w9WgXcQ
        // It also works on the youtube-nocookie.com URL with the same above options.
        // It will also pull the ID from the URL in an embed code (both iframe and object tags)
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

        if($netcookieUrl){
            return 'https://www.youtube-nocookie.com/embed/' . $match[1];
        } else {
            return $match[1];
        }

    }




}
