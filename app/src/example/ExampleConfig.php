<?php


namespace example;

use example\dao\BaseDao;
use spark\core\annotation\Bean;
use spark\core\annotation\Configuration;
use spark\core\annotation\EnableApcuBeanCache;
use spark\core\annotation\SmartyViewConfiguration;

/**
 * @Configuration()
 *
 * Change # to @ to see how things speed up;
 * #EnableApcuBeanCache(resetParam="reset")
 * #SmartyViewConfiguration(caching=true, forceCompile=false, compileCheck=false, cacheLifetime=3600)
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