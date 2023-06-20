<?php

namespace Dope\Shop\Api;

interface CustomInterface
{
    /**
     * GET for Post api
     * @return string
     */
    public function setPostData();


    /**
     * @return mixed
     */
    public function getPostData();

    /**
     * @return mixed
     */
    public function deletePostData();

    /**
     * @return mixed
     */
    public function putData();
}
