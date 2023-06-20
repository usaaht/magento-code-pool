<?php declare(strict_types=1);

namespace Ader\Rest\Api;

use Ader\Rest\Api\Data\GridInterface;

interface GridRepositoryInterface
{
    public function getById(GridInterface $id);

    public function save(GridInterface $grid);

    public function deleteById(GridInterface $id);
}
