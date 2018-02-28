<?php
/**
 * Nextcloud - user_sql
 * Copyright (C) 2012-2018 Andreas Böhler <dev (at) aboehler (dot) at>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace OCA\user_sql\HashAlgorithm;

/**
 * SHA1 password hash implementation.
 * @author Marcin Łojewski <dev@mlojewski.me>
 */
class SHA1 implements HashAlgorithm
{
    use Singleton;

    /**
     * @inheritdoc
     */
    public function getVisibleName()
    {
        return "SHA1";
    }

    /**
     * @inheritdoc
     */
    public function getPasswordHash($password)
    {
        return sha1($password);
    }

    /**
     * @inheritdoc
     */
    public function checkPassword($password, $dbHash)
    {
        return sha1($password) === $dbHash;
    }
}
