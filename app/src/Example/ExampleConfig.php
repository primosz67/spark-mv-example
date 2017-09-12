<?php


namespace Example;

use Example\Dao\BaseDao;
use Spark\Core\Annotation\Bean;
use Spark\Core\Annotation\Configuration;
use Spark\Core\Annotation\EnableApcuBeanCache;
use Spark\Core\Annotation\SmartyViewConfiguration;

/**
 * @Configuration()
 *
 * @EnableApcuBeanCache(resetParam="reset")
 * @SmartyViewConfiguration(caching=true, forceCompile=false, compileCheck=false, cacheLifetime=3600)
 */
class ExampleConfig {

    /**
     * @Bean()
     */
    public function exampleDao() {
        $baseDao = new BaseDao();
        $baseDao->setData(array(
            "Easy to use",
            "Automatic dependency injection",
            "Profiles",
            "Multi language",
            "Fast",
            "Rebusted",
        ));
        return $baseDao;
    }
}
