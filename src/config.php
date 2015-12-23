<?php

/**
 *
 */

return [

    /**
     * set the table names
     */
    'tables' => [
        'roles' => 'profile_roles',
        'profiles' => 'profile_profiles',
        'access' => 'profile_access'
    ],

    /**
     * the relationship link for the profile roles into another table, under the roles table
     * one link to many roles
     */
    'link' => 'user_id'
];