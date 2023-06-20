<?php declare(strict_types=1);

namespace Macademy\Blog\Setup\Patch\Data;

use Macademy\Blog\Api\PostRepositoryInterface;
use Macademy\Blog\Model\PostFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class PopulateBlogPosts implements DataPatchInterface
{
    /**
     * @var PostFactory
     */
    private PostFactory $postFactory;
    /**
     * @var ModuleDataSetupInterface
     */
    private ModuleDataSetupInterface $moduleDataSetup;

    /**
     * @var PostRepositoryInterface
     */
    private PostRepositoryInterface $postRepository;
    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param PostFactory $postFactory
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        PostFactory $postFactory,
        PostRepositoryInterface $postRepository
    ) {
    }

    /**
     * @return array|string[]
     */
    public static function getDependencies() :array
    {
        return [];
    }

    /**
     * @return array|string[]
     */
    public function getAliases() : array
    {
        return [];
    }

    /**
     * @return void
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $post = $this->postFactory->create();
        $post->setData(
            [
                'title' => 'An Awesome Post',
                'content' =>'This is totally awesome'
            ]
        );

        $this->postRepository->save($post);

        $this->moduleDataSetup->endSetup();
    }
}
