<?php

namespace Clicars\Interfaces;

interface IMafia
{
    /**
     * Initialize the object
     *
     * @param IMember $godfather
     */
    public function __construct(IMember $godfather);

    /**
     * Get the godfather of the organisation
     * @return IMember
     */
    public function getGodfather(): IMember;

    /**
     * Add new member to the net
     *
     * @param IMember $member
     *
     * @return IMember|null
     */
    public function addMember(IMember $member): ?IMember;

    /**
     * Get a member by id
     *
     * @param int $id
     *
     * @return IMember|null
     */
    public function getMember(int $id): ?IMember;

    /**
     * Put a member in prison
     *
     * @param IMember $member
     *
     * @return bool
     */
    public function sendToPrison(IMember $member): bool;

    /**
     * Release a member from the prison
     *
     * @param IMember $member
     *
     * @return bool
     */
    public function releaseFromPrison(IMember $member): bool;

    /**
     * Find bosses who have more than required number of subordinates
     *
     * @param int $minimumSubordinates
     *
     * @return IMember[]
     */
    public function findBigBosses(int $minimumSubordinates): array;

    /**
     * Compare two members between them and return the one with the highest level or null if they are equals
     *
     * @param IMember $memberA
     * @param IMember $memberB
     *
     * @return IMember|null
     */
    public function compareMembers(IMember $memberA, IMember $memberB): ?IMember;
}
