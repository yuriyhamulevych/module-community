<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\Community\Api;

interface GetModuleVersionInterface
{
    /**
     * Get module version
     *
     * @api
     * @param string $moduleName
     * @return string
     */
    public function execute(string $moduleName) : string;
}