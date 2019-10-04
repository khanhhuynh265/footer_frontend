<?php
namespace Smartosc\Article\Api\Data;

interface PostInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const POST_ID               = 'id';
    const TITLE                 = 'title';
    const IMAGE                 = 'image';
    const CREATED_AT            = 'created_at';
    /**#@-*/

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get IMAGE
     *
     * @return string|null
     */
    public function getIMAGE();

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * Set IMAGE
     *
     * @param string $IMAGE
     * @return $this
     */
    public function setIMAGE($IMAGE);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}
