<?php declare(strict_types=1);

namespace Ader\Rest\Model;

use Ader\Rest\Api\Data\GridInterface;
use Ader\Rest\Api\GridRepositoryInterface;
use Ader\Rest\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class GridRepository implements GridRepositoryInterface
{
    private GridResourceModel $gridResourceModel;

    public function __construct(GridResourceModel $gridResourceModel)
    {
        $this->gridResourceModel = $gridResourceModel;
    }

    public function getById(GridInterface $id): GridInterface
    {
        $grid = $this->gridResourceModel->load($id, $id->getId());
        if (!$grid->getId()) {
            throw new NoSuchEntityException(__('The grid with the "%1" ID doesn\'t exist.', $id));
        }
        return $grid;
    }

    public function save(GridInterface $grid): GridInterface
    {
        try {
            $this->gridResourceModel->save($grid);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $grid;
    }

    public function deleteById(GridInterface $id): bool
    {
        $grid = $this->getById($id);
        try {
            $this->gridResourceModel->delete($grid);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }
}
