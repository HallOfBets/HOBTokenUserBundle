<?php
namespace HOB\TokenUserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Class HOBTokenUserConfiguration
 * @package HOB\TokenUserBundle\DependencyInjection
 */
class HOBTokenUserConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder    = new TreeBuilder();
        $rootNode       = $treeBuilder->root('hob_token_user');

        $rootNode->children()
        ->end();

        return $treeBuilder;
    }
}
