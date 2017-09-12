<?php


namespace example\controller;


use Example\Dao\BaseDao;
use Spark\Core\Annotation\Controller;
use Spark\Core\Annotation\Inject;
use Spark\Core\Annotation\Path;
use Spark\Http\Request;
use Spark\View\Utils\ViewHelper;
use Spark\View\ViewModel;

/**
 * @Controller()
 * @Path("/")
 */
class IndexController {


    /**
     * @Inject()
     * @var BaseDao
     */
    private $exampleDao;


    /**
     * @Path("")
     * @Path("/")
     * @Path("/index")
     */
    public function indexAction() {
        $viewModel = new ViewModel();
        $viewModel->add("data", $this->exampleDao->getData());
        return $viewModel;
    }

    /**
     *
     * Example with auto-filling parameters
     *
     * @Path("/otherWay")
     */
    public function otherAction(Request $request, BaseDao $exampleDao) {
        return ViewHelper::create()
            ->setViewName("example/index/index")
            ->add("data", $exampleDao->getData());
    }

}