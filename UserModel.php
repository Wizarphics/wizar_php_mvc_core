<?php
/*
 * Copyright (c) 2022.
 * User: Fesdam
 * project: WizarFrameWork
 * Date Created: $file.created
 * 7/6/22, 1:20 PM
 * Last Modified at: 7/6/22, 1:20 PM
 * Time: 1:20
 * @author Wizarphics <Wizarphics@gmail.com>
 *
 */

namespace wizar\phpmvc;

use wizar\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}