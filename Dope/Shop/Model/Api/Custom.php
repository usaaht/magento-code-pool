<?php

namespace Dope\Shop\Model\Api;

use Dope\Shop\Model\ResourceModel\Used\CollectionFactory;
use Dope\Shop\Model\UsedFactory;
use Dope\Shop\Model\UsedRepository;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Webapi\Rest\Request;
use Psr\Log\LoggerInterface;

class Custom
{
    /**
     * @var ResourceConnection
     */
    protected $resourceConnection;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;
    /**
     * @var UsedRepository
     */
    private $usedRepository;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var UsedFactory
     */
    protected $used;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @param UsedRepository $usedRepository
     * @param LoggerInterface $logger
     * @param UsedFactory $used
     * @param Request $request
     */
    public function __construct(
        ResourceConnection $resourceConnection,
        CollectionFactory  $collectionFactory,
        UsedRepository $usedRepository,
        LoggerInterface $logger,
        UsedFactory $used,
        Request $request
    ) {
        $this->resourceConnection = $resourceConnection;
        $this->collectionFactory = $collectionFactory;
        $this->usedRepository = $usedRepository;
        $this->logger = $logger;
        $this->used = $used;
        $this->request = $request;
    }
    /**
     * @inheritdoc
     */
    public function setPostData()
    {
        $response = ['success' => false];
        $data = $this->request->getBodyParams();
        $userinfo = $this->used->create();
        try {

            // Implement Your Code here
            if (isset($data['Name'])) {
                $userinfo->setName($data['Name']);
                $userinfo->setFatherName($data['Father_Name']);
                $userinfo->setJob($data['Job']);
                $userinfo->setEdu($data['Education']);
                $userinfo->setPhone($data['Phone_Number']);
                $userinfo->setEmail($data['Email']);
                $userinfo->setCity($data['City']);

                $this->usedRepository->save($userinfo);
                $response = ['success' => true, 'message' => "UpgradeSchema Saved Successfully"];
            }
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
            $this->logger->info($e->getMessage());
        }
        $returnArray = json_encode($response);
        return $returnArray;
    }

    /**
     * @return mixed
     */
    public function getPostData()
    {
        $collection = $this->collectionFactory->create();
        $items = $collection->getData();
        return $items;
    }

    /**
     * @return void
     */
    public function deletePostData()
    {
        $data = $this->request->getParams();
        $connection  = $this->resourceConnection->getConnection();
        $id = $data['id'];
        $tableName = $this->resourceConnection->getTableName('my_table');
        $del = $connection->delete($tableName, ["entity_id = $id"]);
//        try {
//            $model = $this->collectionFactory->create();
//            $model->load($data);
//            $model->delete();
//        } catch (\Exception $e) {
//
//        }
//        $id = $data['entity_id'];
//        $editData = $this->used->create();
//        $user_data = $this->collectionFactory->create();
//        $editData = $user_data->getItemById($id);
//        $del = $this->usedRepository->delete($editData);
//        return $del;

        /* Create Connection */
//        $id = 4;

//        $sql = 'DELETE FROM ' . $tableName . ' WHERE entity_id = ' . $id;
//        $this->resourceConnection->getConnection()->query($sql);
//        return $sql;
    }
    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function putData()
    {
        $data = $this->request->getBodyParams();
        $id = $data['entity_id'];
        $update = $this->collectionFactory->create();
        $origData = $update->getItemById($id);
        $editData = $this->used->create();

        foreach ($data as $field => $value) {
            if ($origData->hasData($field)) {
                if ($value != $origData->getData($field)) {
                    $editData = $origData->setData($field, $value);
                }
            }
        }
        $newData = $this->usedRepository->save($editData);
        return $newData;
    }
}

//        $response = ['success' => false];
//        try {
//            // Load the record by ID
//            $record = $this->usedRepository->getById();
//            if ($record) {
//                // Delete the record
//                $this->usedRepository->delete($record);
//                $response = ['success' => true, 'message' => "Record deleted successfully"];
//            } else {
//                $response = ['success' => false, 'message' => "Record not found"];
//            }
//        } catch (\Exception $e) {
//            $response = ['success' => false, 'message' => $e->getMessage()];
//            $this->logger->info($e->getMessage());
////        }
//        return json_encode($response);
