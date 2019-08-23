<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Metadata\Driver;

/**
 * Forces advanced logic on a file locator.
 *
 * @author Jordan Stout <j@jrdn.org>
 */
interface AdvancedFileLocatorInterface extends FileLocatorInterface
{
    /**
     * Finds all possible metadata files.
     *
     * @param string $extension
     *
     * @return array
     */
    public function findAllClasses($extension);
}

?>