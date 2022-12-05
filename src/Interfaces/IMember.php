<?php

namespace Clicars\Interfaces;

interface IMember
{
    /**
     * Initialize the object
     *
     * @param int $id
     * @param int $age
     */
    public function __construct(int $id, int $age);

    /**
     * Get member id
     * @return int
     */
    public function getId(): int;

    /**
     * Get member age
     * @return int
     */
    public function getAge(): int;

    /**
     * Add a new subordinate
     *
     * @param IMember $subordinate
     *
     * @return $this
     */
    public function addSubordinate(IMember $subordinate): IMember;

    /**
     * Remove a subordinate
     *
     * @param IMember $subordinate
     *
     * @return IMember|null
     */
    public function removeSubordinate(IMember $subordinate): ?IMember;

    /**
     * Get the list of the subordinates
     * @return IMember[]
     */
    public function getSubordinates(): array;

    /**
     * Get his boss
     * @return IMember|null
     */
    public function getBoss(): ?IMember;

    /**
     * Set boss of the member
     *
     * @param IMember|null $boss
     *
     * @return $this
     */
    public function setBoss(?IMember $boss): IMember;
}
