<?php

/*
 *    Copyright (C) 2023 Andrey "Limych" Khrolenok
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 */

namespace OPNsense\Tor\Api;

use OPNsense\Tor\Bridges;
use OPNsense\Core\Config;
use OPNsense\Base\ApiMutableModelControllerBase;
use OPNsense\Base\UIModelGrid;

class BridgesController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'bridges';
    protected static $internalModelClass = '\OPNsense\Tor\Bridges';
    public function searchaclAction()
    {
        return $this->searchBase('bridges', array('enabled', 'config'));
    }
    public function getaclAction($uuid = null)
    {
        $this->sessionClose();
        return $this->getBase('bridges', 'bridges', $uuid);
    }
    public function addaclAction()
    {
        return $this->addBase('bridges', 'bridges');
    }
    public function delaclAction($uuid)
    {
        return $this->delBase('bridges', $uuid);
    }
    public function setaclAction($uuid)
    {
        return $this->setBase('bridges', 'bridges', $uuid);
    }
    public function toggleaclAction($uuid)
    {
        return $this->toggleBase('bridges', $uuid);
    }
}
