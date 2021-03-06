<?php

/**
 * This file is part of the Infinite ApiSupportBundle project.
 *
 * (c) Infinite Networks Pty Ltd <http://www.infinite.net.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Infinite\ApiSupportBundle\Error;

class ValidationErrors
{
    /**
     * The original input request object.
     *
     * @var mixed
     */
    public $input;

    /**
     * A list of violations encountered while building the request.
     *
     * @var \Symfony\Component\Validator\ConstraintViolationListInterface
     */
    public $violations;
}
