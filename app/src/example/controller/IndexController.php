<?php


namespace example\controller;


use example\dao\BaseDao;
use spark\Controller;
use spark\core\annotation\Inject;
use spark\core\annotation\Path;
use spark\view\ViewModel;

/**
 * @Path("/")
 */
class IndexController extends Controller {


    /**
     * @Inject
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

}