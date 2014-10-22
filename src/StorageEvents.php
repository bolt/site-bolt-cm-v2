<?php
namespace Bolt;

/**
 * Definitions for all possible StorageEvents
 */
final class StorageEvents
{
    private function __construct()
    {
    }

    // we make no distinction between insert/update
    const PRE_SAVE      = 'preSave';
    const POST_SAVE     = 'postSave';

    const PRE_DELETE    = 'preDelete';
    const POST_DELETE   = 'postDelete';
}
